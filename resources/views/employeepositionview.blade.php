@extends('layouts.app')
<br>
<br>
<br>
<br>

<div class="container">
 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Employment ID</th>
      <th scope="col">Employement Position</th>
      <th scope="col">Assignment ID</th>
      <th scope="col">Period</th>

    </tr>
  </thead>

  <tbody>
  @foreach ($employeeposition as $employee)
    <tr>
      <th scope="row">{{ $employee->id }}</th>
      <td>{{ $employee->employeeid }}</td>
      <td>{{ $employee->positionid }}</td>
      <td>{{ $employee->assigmentid }}</td>
      <td>{{ $employee->period }}</td>
    </tr>
    @endforeach

  </tbody>

</table>
 
</div>
