@extends('home')
@section('content')
<div class="row">
    <div class="col-md-12 content_area">
        <h3>All Posts</h3>
        <div class="panel-body">
            <table class="table history table-striped ">
                <thead>
                <tr>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Status</td>
                    <td>City</td>
                    <td>Contact Number</td>
                    <td>Request</td>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->status}}</td>
                    <td>{{$post->user->city}}</td>
                    <td>{{$post->user->mobile}}</td>
                    <td><i class="fa fa-edit" style="margin-left: -21px;"></i></td>
                </tr>
                @endforeach
               </tbody>
            </table>
        </div>

    </div>

</div>

@endsection('content')