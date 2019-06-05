@extends('layouts.app')

@section('content')

<h1>Новостная лента</h1>
@if($news_lists->count())
{{ $news_lists->links() }}

	@foreach($news_lists as $news)
	<div class="list-group p-1">
	  <a href="{{$news->link}}" class="list-group-item list-group-item-action">
	    <div class="d-flex w-100 justify-content-between">
	      <h5 class="mb-1">{{$news->title}}</h5>
	      <small>Категория: {{$news->category}}/Автор: {{$news->category}}</small>
	    </div>
	    <p class="mb-1">{{ str_limit($news->description, 50) }}</p>
	    <small>{{$news->pubDate}}</small>
	  </a>
	</div>
	@endforeach
	{{ $news_lists->links() }}
@else	
   <div class="text-center">{{'Список пуст'}}</div>
@endif
@endsection