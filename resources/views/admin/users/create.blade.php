@extends('admin.layouts.app')
@section('content')

        <form class="form-horizontal" method="POST" action='/store'>
            <label class="control-label">Название статьи</label>
            <input type="text" class="form-control"  name="title">
            <label class="control-label">Статья</label>
            <textarea class="form-control" ></textarea>
            <input type="hidden" value="{{csrf_token()}}">
            <input class="btn btn-primary" type="submit" value="Создать">
        </form>

@endsection