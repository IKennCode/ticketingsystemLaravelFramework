<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;

class DashboardController extends Controller
{
    public function dashboard(){
        $ticketCount = Tickets::count();
        $newTicketCount = Tickets::whereNull('opened_by')->count();
        $openTicketCount = Tickets::where('opened_by', '>', 0 )->where('status', '=', 1)->where('opened_by', '>', 0)->whereNULL('acknowledged_by')->count();
        $resolvedTicketCount = Tickets::where('status', '=', 3)->count();
        $cancelledTicketCount = Tickets::where('status', '=', 5)->count();
        return view('dashboard', [
            'ticketCount' => $ticketCount,
            'newTicketCount' => $newTicketCount,
            'openTicketCount' => $openTicketCount,
            'resolvedTicketCount' => $resolvedTicketCount,
            'cancelledTicketCount' => $cancelledTicketCount,
        ]);
    }
}
