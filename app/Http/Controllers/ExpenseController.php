<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Expense;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $expenses = Expense::where('user_id', Auth::user()->id)
               ->get();
        return view('expense_list', array(
            'expenses' => $expenses
        ));
    }

    public function add()
    {
        return view('expense_add');
    }

    public function post_add(Request $request)
    {
        $expense = new Expense();
        $expense->title = $request->title;
        $expense->description = $request->description;
        $expense->amount = $request->amount;
        $expense->date = date_create($request->date);
        $expense->user_id = Auth::user()->id;

        $expense->save();
        // dd($request);
        return redirect('tp/expense/list');
    }
}
