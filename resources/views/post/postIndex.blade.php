@extends('home')
@section('content')
<div class="row">
    <div class="col-md-12 content_area">
        <h3>My Posts</h3>
        <div class="panel-body">
            <table class="table history table-striped ">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Status</td>
                    <td>Edit</td>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->status}}</td>
                    <td><a href="/posts/{{$post->id}}/edit"><i class="fa fa-edit" style="margin-left: -21px;"></i></a></td>
                  </tr>
                @endforeach
               </tbody>
            </table>
        </div>

    </div>

</div>

@endsection('content')