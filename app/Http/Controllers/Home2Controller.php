<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Salary;
use App\Expense;

class Home2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $earnings_annual = 0;
        $earnings_monthly = 0;
        $earnings_all = 0;
        $salaries = Salary::where('user_id', Auth::user()->id)
               ->get();

        foreach ($salaries as $salary) {
            if (date('Y', strtotime($salary->date)) == date('Y')) {
                $earnings_annual += $salary->amount;
            }

            if (date('m', strtotime($salary->date)) == date('m')) {
                $earnings_monthly += $salary->amount;
            }

            $earnings_all += $salary->amount;
        }

        return view('home2', array(
            'earnings_annual' => $earnings_annual,
            'earnings_monthly' => $earnings_monthly,
            'earnings_all' => $earnings_all,
            'objectives_count' => 0
        ));
    }

    public function register()
    {
        return view('register');
    }

    public function export_report()
    {
        $salaries = Salary::all();
        $expenses = Expense::all();

            return response()->json([
                'salaries' => $salaries,
                'expenses' => $expenses
            ]);
    }
}
