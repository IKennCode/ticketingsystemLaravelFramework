<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\Providers\AppServiceProvider;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function tickets(){
        // $data = Tickets::orderBy('id', 'desc')->paginate(10);
        $data = DB::table('tickets')
        ->join('users', 'tickets.created_by', '=', 'users.id')
        ->select('tickets.*', 'users.first_name', 'users.last_name')
        ->orderBy('id', 'desc')->paginate(10);

        $category = "All";

        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }
    public function alltickets(){
        $data = DB::table('tickets')
        ->join('users', 'tickets.created_by', '=', 'users.id')
        ->select('tickets.*', 'users.first_name', 'users.last_name')
        ->orderBy('id', 'desc')->paginate(10);
        $category = "All";
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }

    public function mytickets(){
        $data = DB::table('tickets')
                ->join('users', 'tickets.created_by', 'users.id')
                ->select('tickets.*', 'users.first_name', 'users.last_name')
                ->where('acknowledged_by', '=', auth()->user()->id )->orWhere('created_by', '=', auth()->user()->id)->orderBy('id', 'desc')->paginate(10);
        $category = "My";
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }

    public function newticket(){
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('newticket', [
            'rules' => $rules
        ]);
    }

    public function addticket(Request $request){
        // dd($request);
        $ticket = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'category' => ['required'],
            'status' => ['required'],
            'created_by' => ['required'],
            'created_at' => ['required']
        ]);
        
        $ticket['created_at'] = now();

        $save = Tickets::insert($ticket);

        if($save){
            return redirect('/tickets/mytickets')->with('message', 'Ticket created');
        }else{
            return redirect('/tickets/mytickets')->with('message', 'Failed to create ticket');
        }
    }

    public function newtickets(){
        $data = DB::table('tickets')
                ->join('users', 'tickets.created_by', 'users.id')
                ->select('tickets.*', 'users.first_name', 'users.last_name')
                ->whereNULL('opened_by')->orderBy('id', 'desc')->paginate(10);
        $category = "New";
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }

    public function opentickets(){
        $data = DB::table('tickets')
                ->join('users', 'tickets.created_by', 'users.id')
                ->select('tickets.*', 'users.first_name', 'users.last_name')
                ->where('tickets.opened_by', '>', 0 )
                ->where('tickets.status', '=', 1)
                ->where('tickets.opened_by', '>', 0)
                ->whereNULL('tickets.acknowledged_by')
                ->orderBy('tickets.id', 'desc')
                ->paginate(10);

        $category = "Open";
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }

    public function resolvedtickets(){
        $data = DB::table('tickets')
                ->join('users', 'tickets.created_by', 'users.id')
                ->select('tickets.*', 'users.first_name', 'users.last_name')
                ->where('tickets.status', '=', 3)
                ->orderBy('tickets.id', 'desc')
                ->paginate(10);

        $category = "Resolved";
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }

    public function resolve(Request $request){
        $ticket_id = $request->input('ticket_id');
        $resolution = $request->input('resolution');
        Tickets::where('id', '=', $ticket_id)->update(['resolution' => $resolution, 'status' => 3, 'resolved_by' => auth()->user()->id]);
        return redirect()->intended('/tickets/resolvedtickets');
    }

    public function closedtickets(){
        $data = Tickets::where('opened_by', '>', 0 )
        ->where('status', '>', 3 )
        ->where('resolved_by', '>', 0 )
        ->orderBy('id', 'desc')
        ->paginate(10);
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        $category = "Closed";
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }

    public function cancelledtickets(){
        $data = Tickets::where('cancelled_by', '>', 0 )
        ->where('status', '=', 5)
        ->orderBy('id', 'desc')
        ->paginate(10);
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        $category = "Cancelled";
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }

    public function viewticket($ticket_id, $viewer_id){
        $check = Tickets::where('id', $ticket_id)->where('opened_by', '!=', null)->get();
        if($check){
            Tickets::where('id', $ticket_id)->update(['opened_by' => $viewer_id]);
            $data = Tickets::where('id', $ticket_id)->where('opened_by', '=', $viewer_id)->get();
            $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
            return view('ticket', ['ticket' => $data, 'rules' => $rules]);
        }else{
            $data = Tickets::where('id', $ticket_id)->where('opened_by', '!=', null)->get();
            $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
            return view('ticket', ['ticket' => $data, 'rules' => $rules]);
        }
        
    }

    public function ack_ticket(Request $request){
        $ticket_id = $request->input('ticket_id');
        $ack = Tickets::where('id', '=', $ticket_id)->update(['acknowledged_by' => auth()->user()->id, 'status' => 2]);
        if($ack){
            return redirect()->intended('/tickets/mytickets');
        }else{
            return redirect()->intended('/tickets');
        }
    }

    public function search(Request $request){
        $search_value = $request->input('search');
        $data = Tickets::where('id', 'like', '%'.$search_value.'%')
        ->orWhere('title', 'like', '%'.$search_value.'%')
        ->orWhere('description', 'like', '%'.$search_value.'%')
        ->orWhere('category', 'like', '%'.$search_value.'%')
        ->orWhere('created_by', 'like', '%'.$search_value.'%')
        ->paginate(10);
        // dd($data);

        $category = "Search";
        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        return view('tickets', [
            'tickets' => $data,
            'category' => $category,
            'rules' => $rules
        ]);
    }

    public function cancel(Request $request){
        $ticket_id = $request->input('ticket_id');
        Tickets::where('id', '=', $ticket_id)->update(['cancelled_by' => auth()->user()->id, 'status' => 5]);
        return redirect()->intended('/tickets/mytickets');
    }
}
