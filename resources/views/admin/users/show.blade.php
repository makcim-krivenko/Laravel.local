@extends('admin.layouts.app')

@section('content')

        <h1>{{$article->title}}</h1>
        {{$article->content}}

@endsection