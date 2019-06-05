@extends('layouts.app')

@section('content')

<h1></h1>
	<div class="list-group p-1">	 
	    <div class="d-flex w-100 justify-content-between">
	      <h5 class="mb-1">{{$news->title}}</h5>	      
	    </div>
	    <p class="mb-1">{{ $news->description }}</p>	 
	</div>
@endsection