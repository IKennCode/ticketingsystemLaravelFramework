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
        $data = Tickets::where('created_by', '=', auth()->user()->id )->orderBy('id', 'desc')->paginate(10);
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
        ->whereNULL('resolved_by')
        ->whereNULL('cancelled_by')
        ->orderBy('id', 'desc')
        ->paginate(10);;
        return view('tickets', ['tickets' => $data]);
    }

    public function resolvedtickets(){
        $data = Tickets::where('opened_by', '>', 0 )
        ->where('status', '=', 3 )
        ->where('resolved_by', '>', 0 )
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('tickets', ['tickets' => $data]);
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
        $data = Tickets::where('cancelled_by', '=', 0 )
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('tickets', ['tickets' => $data]);
    }

    public function viewticket(Request $request){
        $ticket_id = $request->input('id');
        $opened_by = $request->input('opened_by');

        $is_viewed = Tickets::where('id', $ticket_id)->get();
        if(($is_viewed[0]['opened_by']) === null){
            $update = Tickets::where(['id' => $ticket_id])->update(['opened_by' => $opened_by]);
            $data = Tickets::where('id', $ticket_id)->get();
            return view('ticket', ['ticket' => $data])->with('message', 'Ticket #' . $ticket_id);
        }elseif(($is_viewed[0]['opened_by']) != null){
            $data = Tickets::where('id', $ticket_id)->get();
            return view('ticket', ['ticket' => $data])->with('message', 'Ticket #' . $ticket_id);
        }else{
            return redirect('/tickets')->with('message', 'Error creating ticket');
        }
    }

    public function ticket(){
        return view('ticket');
    }

    // RESERVE
    // public function tickets(){
    //     $tickets = Tickets::all();
    //     return response()->json($tickets);
    // }
}
