<?php

namespace App\Http\Controllers;

use App\LoanRequest;
use App\Program;
use App\Tape;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){

        $data['users'] = User::all();
        $data['tapes'] = Tape::all();
        $data['programs'] = Program::all();
        $data['latest_loans'] = LoanRequest::latest()->where('status', 0)->limit(7);
        return view('index', $data);
    }
}
