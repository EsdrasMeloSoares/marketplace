<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'início';
        $usersCount = User::count();

        $lastWeekUsersCount = User::where('created_at', '>=', now()->subWeek())->count();
        $percentageIncrease = ($lastWeekUsersCount / $usersCount) * 100;
        $message = "+" . $percentageIncrease. "% em relação à semana passada";
        
        return view('dashboard.index', compact('title', 'usersCount', 'message'));
    }
}
