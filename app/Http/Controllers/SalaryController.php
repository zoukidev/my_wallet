<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Salary;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $salaries = Salary::where('user_id', Auth::user()->id)
               ->get();
        return view('salary_list', array(
            'salaries' => $salaries
        ));
    }

    public function add()
    {
        return view('salary_add');
    }

    public function post_add(Request $request)
    {
        $salary = new Salary();
        $salary->amount = $request->amount;
        $salary->date = date_create($request->date);
        $salary->user_id = Auth::user()->id;

        $salary->save();
        return redirect('tp/salary/list');
    }
}
