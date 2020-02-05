<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Salary;

class Home2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $salaries = Salary::where('user_id', Auth::user()->id)
               ->get();

        $earnings_annual = 0;
        foreach ($salaries as $salary) {
            // dd(date('Y', strtotime($salary->date)));
            if (date('Y', strtotime($salary->date)) == date('Y')) {
                $earnings_annual += $salary->amount;
            }
        }
        return view('home2', array(
            'earnings_annual' => $earnings_annual
        ));
    }

    public function register()
    {
        return view('register');
    }
}
