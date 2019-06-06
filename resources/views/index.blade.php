@extends('layouts.app')

@section('content')

<a href="{{ action([\App\Http\Controllers\IxbtController::class, 'index']) }}">Обновить</a>
<h1>Новостная лента</h1>
@if($news_lists->count())
{{ $news_lists->links() }}
<img src="https://www.ixbt.com/img/r30/00/02/18/91/-.jpg" align="left" hspace="20">
	@foreach($news_lists as $news)
	<div class="list-group p-1 h-50 w-100">
	  <a href="{{$news->link}}" class="list-group-item list-group-item-action">
	    <div class="d-flex w-100 justify-content-between">
	      <h5 class="mb-1">{{$news->title}}</h5>
	      <small>Категория: {{$news->category}}/</small>	      
	    </div>
	    <p class="mb-1">{!! html_entity_decode($news->description) !!}</p>
	    <p class="mb-1 h-50 w-25"></p>
	    <small>{{$news->pubDate}}</small>
	    <small>Автор: {{$news->author}}</small>
	  </a>
	</div>
	@endforeach
	{{ $news_lists->links() }}
@else	
   <div class="text-center">{{'Список пуст'}}</div>
@endif
@endsection