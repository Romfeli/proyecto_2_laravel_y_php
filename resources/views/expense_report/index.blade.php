@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reports</h1>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/create">Create a new Report</a>

        </div>
    </div>   

    <div class="row">
        <div class="col">
            <table class="table">
                @foreach ($expenseReports as $expenseReport)
                <tr>
                    
                    <td><a class="" href="/expense_reports/{{$expenseReport->id}}">{{$expenseReport->title}}</a></td>

                    <td><a class="btn btn-primary" href="/expense_reports/{{$expenseReport->id}}/edit">Editar</a></td>

                <td><a class="btn btn-danger" href="/expense_reports/{{$expenseReport->id}}/confirmDelete">Delete</a>

                </tr>
                @endforeach
            </table>
        
        </div>
    </div>  
           

@endsection
