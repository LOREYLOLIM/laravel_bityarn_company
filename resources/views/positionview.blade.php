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
      <th scope="col">Name</th>

    </tr>
  </thead>

  <tbody>
  @foreach ($pos as $position)
    <tr>
      <th scope="row">{{ $employee->id }}</th>
      <td>{{ $position->pos }}</td>
    </tr>
    @endforeach

  </tbody>

</table>
 
</div>
