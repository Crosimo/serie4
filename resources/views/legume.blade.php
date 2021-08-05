@extends('template/home')

@section('content')

@foreach ($data as $item)


<div>{{$item->name}}</div>
<div>{{$item->quantité}}</div>
<div>{{$item->id}}</div>


@endforeach


@endsection
