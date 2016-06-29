@extends('admin.main')
@section('content')
    <table>
        <tr>
            <td>id</td>
            <td>��������</td>
            <td>��������</td>
            <td>��������</td>
        </tr>
        <tr>
            @foreach($categories as $category)
                <td>{{$category->title}}</td>
                <td><a href="{{action('CategoriesControllr@edit', ['categories' =>$category->id])}}">��������</a></td>
                <td>
                    <form method="POST" action="{{action('CategoriesController@destroy',['categories'=>$category->id])}}">
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="text" value="�������"/>
                    </form>
                </td>
        </tr>
        @endforeach
    </table>
    </ul>


