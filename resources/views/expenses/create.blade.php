@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports/{{$report->id}}">Back</a>

        </div>
    </div>  
    <div class="row">
        <div class="col">
           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)

                        <li>{{$error}}</li>
    
                        @endforeach
                    </ul>        
                </div>
           @endif    
        <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
            @csrf
        <div class="form-group">
            <label for="Title">Description</label>
            <input type="text" name="description"  id="description" class="form-control" placeholder="type a description" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="Title">Amount</label>
            <input type="text" name="amount"  id="amount" class="form-control" placeholder="type a amount" value="{{old('title')}}">
        </div>
            <button type="submit" class="btn btn-primary"> Submit</button>
        </form>
        </div>
    </div>  
           

@endsection
