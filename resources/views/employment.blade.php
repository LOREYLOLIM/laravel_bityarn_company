@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>

<button type="button" class="btn btn-danger"><a href="{{ route ('employeesview') }}">Employeement</a></button>

<form method="post" action="{{ route ('employeedata.store') }}">
    @csrf
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="fname" id="name">
            </div>

            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lname" id="name">
            </div>

            <div class="form-group">
                <label>Other Name</label>
                <input type="text" class="form-control" name="oname" id="name">
            </div>
            <div class="form-group">
                <label>Sex</label>
                <input type="text" class="form-control" name="sex" id="name">
            </div>
            <div class="form-group">
                <label>Date Of Birth</label>
                <input type="text" class="form-control" name="DOB" id="name">
            </div>
            <div class="form-group">
                <label>ID Type</label>
                <input type="text" class="form-control" name="IDtype" id="name">
            </div>
            <div class="form-group">
                <label>ID Number</label>
                <input type="text" class="form-control" name="IdNumber" id="name">
            </div>
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>

        @endsection()