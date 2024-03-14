@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Reports</h1>

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
        <form action="/expense_reports" method="POST">
            @csrf
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="text" name="title"  id="title" class="form-control" placeholder="type a title" value="{{old('title')}}">
        </div>
            <button type="submit" class="btn btn-primary"> Submit</button>
        </form>
        </div>
    </div>  
           

@endsection
