@extends('home')
@section('content')
           <div class="row ">
                <div class="col-md-12 content_area">
                    {{ Form::model($user=Auth::user(), array('route' => array('profileUpdate',$user->id),'enctype'=>"multipart/form-data",'method'=>'PUT','class'=>'end_user_form')) }}
                    {!! csrf_field() !!}

                    <h3>Profile Settings</h3>
                    <div class="panel-body">
                        <div class="row ">
                            <div class="col-md-12 profile_setting ">

                                <div class="media form-group">
                                    <div class="media-left">
                                        <a href="#" class="pet_photo_popup add_pet_photo_popup">
                                            <i>
                                                <img class="" src="/img/cam-icon.png" alt="...">
                                            </i>
                                            <input type="file" style="display:none">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="col-sm-6">
                                             {{Form::text('name',old('name'),array('id'=>'name','class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>"Name",'required'=>'required'))}}
                                        </div>
                                    </div>
                                </div>
                                <!--/media-->
                                <div class="clearfix"></div>

                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">Email</label>
                                    {{Form::text('email',old('email'),array('id'=>'email','class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>"Email",'required'=>'required'))}}
                                   </div>

                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">Password</label>
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Old Password">
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="New Password">
                                </div>

                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">Mobile</label>
                                    {{Form::text('mobile',old('mobile'),array('id'=>'mobile','class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>"Mobile"))}}

                                </div>


                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">City</label>
                                    {{Form::text('city',old('city'),array('id'=>'city','class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>"City"))}}
                                     </div>

                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">State</label>
                                    {{Form::text('state',old('state'),array('id'=>'state','class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>"State"))}}
                                </div>


                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">Zip</label>
                                   {{Form::text('zip',old('zip'),array('id'=>'zip','class'=>'form-control', 'maxlength'=>'50', 'placeholder'=>"Zip"))}}
                                </div>

                                <div class="form-group form-inline">
                                    <label for="exampleInputName2">Gender</label>
                                    {{Form::select('gender',['Male'=>'Male','Female'=>'Female'],old('gender'),array('id'=>'gender','class'=>'form-control field_main', 'placeholder'=>"Select gender",'maxlength'=>50))}}
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
