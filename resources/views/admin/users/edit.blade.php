@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="thumbnail">
                    <div class="caption">
                        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                    </div>
                </div>
                <form role="form" class="form-horizontal" method="post" action='/admin/users/update/{{$user->id}}'>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">User name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label">User email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label">User type</label>
                        <select class="form-control" name="user_type">
                            @foreach (config('my_constants.USER_TYPES') as $k => $v)
                                @if ($v == $user->user_type)
                                    <option value="{{$v}}" selected>{{$k}}</option>
                                    @continue
                                @endif
                                @if ($v >= Auth::user()->user_type)
                                    @continue
                                @endif
                                <option value="{{$v}}">{{$k}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="control-label">User password</label>
                        <input id="password" type="password" class="form-control" name="password" value="">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="control-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-btn fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

