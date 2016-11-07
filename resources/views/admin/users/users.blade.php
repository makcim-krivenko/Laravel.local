@extends('admin.layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="panel-body">
            <div class="table-responsive">
                <h2>Users</h2>
                <a href="/admin/users/create/" class="btn btn-primary btn-outline"><i class="fa fa-btn fa-plus"></i>  Add New</a>
                <table class="table table-striped table-bordered table-hover" style="margin-top: 20px;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User type</th>
                        <th>Изменить</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 0; ?>
                    @foreach($users as $user)
                        <?php $i++; ?>
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <?php
                                switch($user->user_type){
                                    case 5:
                                        echo "manager";
                                        break;
                                    case 10:
                                        echo "admin";
                                        break;
                                    case 100:
                                        echo "superadmin";
                                        break;
                                    default:
                                        echo "Неизвесный пользователь";
                                }
                                ?>
                            </td>
                            <td><a href="/admin/users/edit/{{$user->id}}" class="btn btn-danger"><i class="fa fa-btn fa-edit"></i>  Edit</a></td>
                            <td><a href="/admin/users/delete/{{$user->id}}" class="btn btn-danger"><i class="fa fa-btn fa-trash-o"></i>  Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>


@endsection