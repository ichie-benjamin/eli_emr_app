<?php

namespace App\Http\Controllers;


use App\Models\DailySchedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dailySchedules = DailySchedule::with('patient')->paginate(25);
        return view('admin.index',compact('dailySchedules'));
    }
public function soon(){
        return view('admin.coming');
}

    public function media()
    {
        return view('admin.media');
    }
}
