@extends('layouts.app')
@section('content')

{!! Form::open(['url' => 'hobby/store']) !!}
<div class="form-group">
<h3>填充爱好</h3>
</div>
<div class="form-group">
	{!! Form::label('user_id', '用户ID:') !!}
	{!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<div class='form-group'>
	{!! Form::label('hobby', '爱好:') !!}
	{!! Form::text('hobby', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('发表文章', ['class' => 'btn btn-success form-control']) !!}
	
</div>

{!! Form::close() !!}
@if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

@endsection
