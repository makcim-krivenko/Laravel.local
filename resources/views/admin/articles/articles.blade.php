@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($articles as $article)
                <li><a href="/admin/articles/show/{{$article->id}}">{{$article->title}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection