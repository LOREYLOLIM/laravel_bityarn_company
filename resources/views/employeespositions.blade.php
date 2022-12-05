@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>


<button type="button" class="btn btn-danger"><a href="{{ route ('employeepositionview') }}">Employee Positions</a></button>

<form method="post" action="{{ route ('employeepositiondata.store') }}">
@csrf
        <div class="form-group">
                <label>Employee ID</label>
                <input type="text" class="form-control" name="employeeid" id="name">
            </div>
            <div class="form-group">
                <label>Position ID</label>
                <input type="text" class="form-control" name="positionid" id="name">
            </div>
            <div class="form-group">
                <label>Assignment Date</label>
                <input type="text" class="form-control" name="assigmentid" id="name">
            </div>
            <div class="form-group">
                <label>Assignment Period</label>s
                <input type="text" class="form-control" name="period" id="name">
            </div>
           
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>

        @endsection()