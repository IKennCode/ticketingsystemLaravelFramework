<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\Providers\AppServiceProvider;

class TicketController extends Controller
{
    public function tickets(){
        $data = Tickets::orderBy('id', 'desc')->paginate(10);
        return view('tickets', ['tickets' => $data]);
    }
    public function alltickets(){
        $data = Tickets::orderBy('id', 'desc')->paginate(10);
        return view('tickets', ['tickets' => $data]);
    }

    public function mytickets(){
        $data = Tickets::where('acknowledged_by', '=', auth()->user()->id )->orderBy('id', 'desc')->paginate(10);
        return view('tickets', ['tickets' => $data]);
    }

    public function newticket(){
        return view('newticket');
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
            return redirect('/tickets')->with('message', 'Ticket created');
        }else{
            return redirect('/tickets')->with('message', 'Failed to create ticket');
        }
    }

    public function newtickets(){
        $data = Tickets::whereNULL('opened_by')->orderBy('id', 'desc')->paginate(10);
        return view('tickets', ['tickets' => $data]);
    }

    public function opentickets(){
        $data = Tickets::where('opened_by', '>', 0 )
        ->where('status', '=', 1)
        ->where('opened_by', '>', 0)
        ->whereNULL('acknowledged_by')
        ->orderBy('id', 'desc')
        ->paginate(10);;
        return view('tickets', ['tickets' => $data]);
    }

    public function resolvedtickets(){
        $data = Tickets::where('status', '=', 3)
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('tickets', ['tickets' => $data]);
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
        // ->where('closed_by', '>', 0 )
        // add closed_by column
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('tickets', ['tickets' => $data]);
    }

    public function cancelledtickets(){
        $data = Tickets::where('cancelled_by', '>', 0 )
        ->where('status', '=', 5)
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('tickets', ['tickets' => $data]);
    }

    public function viewticket($ticket_id, $viewer_id){
        $check = Tickets::where('id', $ticket_id)->where('opened_by', '!=', null)->get();
        if($check){
            Tickets::where('id', $ticket_id)->update(['opened_by' => $viewer_id]);
            $data = Tickets::where('id', $ticket_id)->where('opened_by', '=', $viewer_id)->get();
            return view('ticket', ['ticket' => $data]);
        }else{
            $data = Tickets::where('id', $ticket_id)->where('opened_by', '!=', null)->get();
            return view('ticket', ['ticket' => $data]);
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
        return view('tickets', ['tickets' => $data]);
    }

    public function cancel(Request $request){
        $ticket_id = $request->input('ticket_id');
        Tickets::where('id', '=', $ticket_id)->update(['cancelled_by' => auth()->user()->id, 'status' => 5]);
        return redirect()->intended('/tickets');
    }

    // 1 = New
    // 2 = Acknowledged
    // 3 = Resolved
    // 4 = Closed
    // 5 = Cancelled
}
