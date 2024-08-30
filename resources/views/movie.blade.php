@extends('layouts.app_movie')
@section('content')
<ol>
@foreach ($movies as $item)
        <li>{{$item}}</li>
@endforeach
</ol>
@endsection