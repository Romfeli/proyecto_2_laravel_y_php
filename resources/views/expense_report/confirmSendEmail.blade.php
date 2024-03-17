@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report</h1>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-secondary" href="/expense_reports">Back</a>

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
           <form action="/expense_reports/{{$report->id}}/sendEmail" method="POST">
    @csrf
    <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Type an email" value="{{ old('email') }}">
        </div>
        <button type="submit" class="btn btn-primary">Send Email</button>
    </form>
        </div>
    </div>  
           

@endsection
