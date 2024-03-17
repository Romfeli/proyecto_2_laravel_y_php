<?php

namespace App\Http\Controllers;

use App\Models\Expense;

use Illuminate\Http\Request;
use App\Models\ExpenseReport;

class ExpenseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expenses.create',[
            'report'=>$expenseReport]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ExpenseReport $expenseReport)
    {

        $validData = $request->validate([
            'description' => 'required|min:3',
            'amount' => 'required|numeric'


        ]);
        $expense = new Expense();
        $expense->description = $validData['description'];
        $expense->amount = $validData['amount'];
        $expense->expense_report_id = $expenseReport->id;
        $expense->save();
        return redirect('/expense_reports/'.$expenseReport->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
