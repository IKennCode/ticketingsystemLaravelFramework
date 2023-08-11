<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;

class TicketController extends Controller
{
    public function tickets(){
        $data = Tickets::all();
        return view('tickets', ['tickets' => $data]);
    }

    public function createTicket(Request $request){
        
    }

    // RESERVE
    // public function tickets(){
    //     $tickets = Tickets::all();
    //     return response()->json($tickets);
    // }
}
