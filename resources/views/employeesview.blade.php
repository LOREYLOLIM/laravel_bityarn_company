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
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Other Name</th>
      <th scope="col">Sex</th>
      <th scope="col">Date Of birth</th>
      <th scope="col">ID type</th>
      <th scope="col">ID number</th>

    </tr>
  </thead>

  <tbody>
  @foreach ($employees as $employee)
    <tr>
      <th scope="row">{{ $employee->id }}</th>
      <td>{{ $employee->fname }}</td>
      <td>{{ $employee->lname }}</td>
      <td>{{ $employee->oname }}</td>
      <td>{{ $employee->sex }}</td>
      <td>{{ $employee->DOB }}</td>
      <td>{{ $employee->IDtype }}</td>
      <td>{{ $employee->IdNumber }}</td>
    </tr>
    @endforeach

  </tbody>

</table>
 
</div>
