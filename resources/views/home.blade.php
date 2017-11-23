@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <passport-clients></passport-clients>
            <passport-authorized-clients></passport-authorized-clients>
            <passport-personal-access-tokens></passport-personal-access-tokens>
            <script type="application/javascript">
		$.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                console.log('Hello world liusen');
                $.get('/api/user').done(function(response){
                    console.log(response);

                });

            </script>
        </div>
    </div>
</div>
@endsection

