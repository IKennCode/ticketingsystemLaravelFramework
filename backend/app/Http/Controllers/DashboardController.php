<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(){
        $ticketCount = Tickets::count();
        $newTicketCount = Tickets::whereNull('opened_by')->count();
        $openTicketCount = Tickets::where('opened_by', '>', 0 )->where('status', '=', 1)->where('opened_by', '>', 0)->whereNULL('acknowledged_by')->count();
        $resolvedTicketCount = Tickets::where('status', '=', 3)->count();
        $cancelledTicketCount = Tickets::where('status', '=', 5)->count();

        $rules = DB::table('users')
                        ->join('permissions', 'users.permission', '=', 'permissions.id')
                        ->where('users.id', '=', auth()->user()->id)
                        ->select('permissions.*')
                        ->get();
        // $permission = Permission::all();
        // dd($rules);

        return view('dashboard', [
            'ticketCount' => $ticketCount,
            'newTicketCount' => $newTicketCount,
            'openTicketCount' => $openTicketCount,
            'resolvedTicketCount' => $resolvedTicketCount,
            'cancelledTicketCount' => $cancelledTicketCount,
            'rules' => $rules
        ]);
    }
}
