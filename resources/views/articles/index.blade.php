@extends('layouts.app')
@section('content')
	@foreach($articles->chunk(3) as $row)
		<div class="row">
			@foreach ($row as $article)
				<articl class="col-md-4">
					<h3>{{ $article->id . ' ' . $article->title }}<h3>
					<img src="{{ $article->image }}" alt="360">
					<div class="body">
						{{ $article->intro }}
					</div>	
				</article>
			@endforeach
		</div>
	@endforeach
{{ $articles->appends(['type' => 'article'])->links()}}
@endsection

