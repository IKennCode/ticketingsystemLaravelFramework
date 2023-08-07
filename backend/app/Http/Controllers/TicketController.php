<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function tickets(){
        $tickets = Ticket::all();
        return response()->json($tickets);
    }
}
