@extends('app')

@section('content')
<div class="container">
    <div class="">
        <h1>Blog Post</h1>
        <a href="{{url('/blog/create')}}" class="btn btn-success">New Post</a>
        <hr>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr class="bg-info">
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contents as $con)
                <tr>
                    <td>{{ $con->id }}</td>
                    <td>{{ $con->title }}</td>
                    <td>{{ $con->description }}</td>
                    <td><img src="{{asset('img/'.$con->image.'.jpg')}}" height="35" width="30"></td>
                    <td>
                        <a href="{{url('blog',$con->id)}}" class="btn btn-primary">Read</a>
                        <a href="{{route('blog.edit',$con->id)}}" class="btn btn-warning">Update</a>
                        <a href="{{route('blog.destroy',$con->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>

    </div>
</div>
@endsection
