@extends('admin.layouts.app')

@section('content')


        <div class="col-lg-12">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
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
                                <td><input type="button" value="edit" name="edit"/></td>
                                <td><input type="button" value="delete" name="delete"/></td>
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