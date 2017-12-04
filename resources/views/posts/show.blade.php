@extends('layouts.app')
@section('content')
<h5>{{ $post->hobby }}</h5>
@can('update', $post)
<a href="#">编辑</a>
@endcan
@endsection