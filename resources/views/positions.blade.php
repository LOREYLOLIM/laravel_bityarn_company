@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>

<button type="button" class="btn btn-danger"><a href='{{ route ("positionsview") }}'>Positions</a></button>

<form action="{{ route('position.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="pos" id="name">
            </div>
            
            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>

        @endsection()