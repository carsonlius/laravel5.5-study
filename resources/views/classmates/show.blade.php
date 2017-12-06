@extends('layouts.app')
@section("content")
<h5>{{$classMate->student_name}}</h5>
@can('edit_form')
<a href="#">编辑</a>
@endcan
@endsection