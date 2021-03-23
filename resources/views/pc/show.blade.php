@extends('layout.main')

@section('content')
<h1>Calcultor</h1>
<form action="{{route('do-math')}}" method="post">
    <div>{{$r}}</div>

    X: <input type="text" name="x">
    Y: <input type="text" name="y">
    <button type="submit">DO MATH</button>
    @csrf{{-- apsaugo nuo apgavysciu ir netikros formos submit --}}

</form>
@endsection
@section('title') Calculator @endsection
