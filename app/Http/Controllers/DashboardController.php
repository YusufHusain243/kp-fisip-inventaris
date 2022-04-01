<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function lihatDashboard(){
        return view('admin.dashboard.dashboard', [
            "title" => "Dashboard Admin"
        ]);
    }
}
