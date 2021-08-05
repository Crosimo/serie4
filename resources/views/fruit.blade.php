@extends('template/home')
@include('partials/nav')
@section('content')
@for ($i = count($data)-1; $i > 0; $i--)
@if (strlen($data[$i]->name)>5)
<div style="background-color:grey">{{$data[$i]->name}}</div>
@else
<div >{{$data[$i]->name}}</div>
@endif

<div>
<a style ="color:purple" href="{{route('showFruit', $data[$i]->id)}}">{{$data[$i]->name}}</a>
  </div>
<div>{{$data[$i]->id}}</div>
@endfor

@endsection
