@extends('home')
@section('content')
           <div class="row ">
                <div class="col-md-12 content_area">
                    @if(isset($post))
                      {!! Form::model($post, ['method' => 'PUT','route' => ['posts.update', $post->id]]) !!}
                        <h3>Update Post</h3>
                    @else
                        {{ Form::open(['route' => 'posts.store']) }}
                        <h3>Create Post</h3>
                    @endif
                    {!! csrf_field() !!}
                    <div class="panel-body">
                        <div class="row ">
                            <div class="col-md-12 profile_setting ">

                                <div class="clearfix"></div>

                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">Post Name</label>
                                    {{Form::text('name',old('name'),array('id'=>'name','class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>"Post Name",'required'=>'required'))}}
                                </div>
                                 <div class="form-group form-inline">
                                    <label for="exampleInputName2">Description</label>
                                     {{Form::text('description',old('description'),array('id'=>'description','class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>"Post Description",'required'=>'required'))}}
                                </div>

                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">Status</label>
                                    {{Form::select('status',['Publish'=>'Publish','Unpubish'=>'Unpubish'],old('status'),array('id'=>'status','class'=>'form-control field_main', 'placeholder'=>"Select Select Status",'maxlength'=>50))}}
                                </div>
                                <div class="row ">

                                    <div class="col-md-12 text-center">
                                     <button type="submit" class="btn_blue">Submit</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

               {!! Form::close() !!}

            </div>

@endsection
