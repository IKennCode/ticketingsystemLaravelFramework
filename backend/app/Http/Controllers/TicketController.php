<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function tickets(){
        $data = Tickets::orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    public function alltickets(){
        $data = Tickets::orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    public function mytickets(){
        $data = Tickets::where('created_by', '=', auth()->user()->id )->orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    public function newticket(){
        return view('newticket');
    }

    public function addticket(Request $request){
        $data = Tickets::where('created_by', '=', auth()->user()->id )->orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    public function newtickets(){
        $data = Tickets::where('opened_by', '=', 0 )->orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    public function opentickets(){
        $data = Tickets::where('opened_by', '>', 0 )
        ->where('status', '=', 0 )
        ->where('resolved_by', '=', 0 )
        ->where('cancelled_by', '=', 0 )
        ->orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    public function resolvedtickets(){
        $data = Tickets::where('opened_by', '>', 0 )
        ->where('status', '=', 3 )
        ->where('resolved_by', '>', 0 )
        ->orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    public function closedtickets(){
        $data = Tickets::where('opened_by', '>', 0 )
        ->where('status', '>', 3 )
        ->where('resolved_by', '>', 0 )
        // ->where('closed_by', '>', 0 )
        // add closed_by column
        ->orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    public function cancelledtickets(){
        $data = Tickets::where('cancelled_by', '=', 0 )
        ->orderBy('id', 'desc')->get();
        return view('tickets', ['tickets' => $data]);
    }

    // RESERVE
    // public function tickets(){
    //     $tickets = Tickets::all();
    //     return response()->json($tickets);
    // }
}
