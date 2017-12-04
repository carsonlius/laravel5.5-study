@extends('layouts.app')
@section("content")
<h5>{{$classMate->student_name}}</h5>
@can('show-classmate', $classMate)
<a href="#">编辑</a>
@endcan
@endsection