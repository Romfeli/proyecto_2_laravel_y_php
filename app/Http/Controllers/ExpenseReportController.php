<?php

namespace App\Http\Controllers;

use App\Models\ExpenseReport;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource. listado
     */
 
    public function index()
{
    return view('expense_report.index', [
        'expenseReports' => ExpenseReport::all()
    ]);
}
    /**
     * Show the form for creating a new resource.   crea   GET
     */
    public function create()
    {
        
        return view('expense_report.create');
    }

    /**
     * Store a newly created resource in storage. guarda o almacena 
     */
    public function store(Request $request)
    {


        $validData = $request->validate([
            'title' => 'required|min:3'
        ]);

        $report = new ExpenseReport();
        $report->title = $validData['title'];
        $report->save();

        return redirect('/expense_reports');
       

    }

    /**
     * Display the specified resource. muestra un solo elemento slug un solo elemento
     */
    public function show(ExpenseReport $expenseReport)
    {
        return view('expense_report.show', [
            'report' => $expenseReport
        ]);
    }

    /**
     * Show the form for editing the specified resource.   EDITAR
     */
    public function edit(Request $request, string $id )
    {

       

        $report = ExpenseReport::findOrFail($id);
        return view('expense_report.edit', [
            'report' => $report
        ]);

    }

    /**
     * Update the specified resource in storage.   ACTUALIZA
     */
    public function update(Request $request, string $id)

    {

        $validData = $request->validate([
            'title' => 'required|min:3'
        ]);
    
        $report = ExpenseReport::findOrFail($id);
        $report->title = $validData['title'];
        $report->save();
        return redirect('/expense_reports');
    }

    /**
     * Remove the specified resource from storage. DELETE
     */
    public function destroy(string $id)
    {
        $report = ExpenseReport::findOrFail($id);
        $report->delete();
        return redirect('/expense_reports');
    }

    public function confirmDelete(string $id)
    {

        

        $report = ExpenseReport::findOrFail($id);

        return view('expense_report.confirmDelete',[
            'report' => $report
        ]);
        
    }


}
