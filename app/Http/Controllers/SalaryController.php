<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        // $expenses = Expense::where('user_id', Auth::user()->id)
        //        ->get();
        $salaries = array();
        return view('salary_list', array(
            'salaries' => $salaries
        ));
    }

    public function add()
    {
        return view('salary_add');
    }
}
