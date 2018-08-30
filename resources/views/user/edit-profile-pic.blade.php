@extends('home')
@section('content')

    {{--<form action="/{{strtolower(Auth::user()->account->city)}}.{{strtolower(Auth::user()->account->state)}}/{{Auth::user()->id}}/update"  method="POST" enctype="multipart/form-data" id="pet">--}}
    {{ Form::model($user=Auth::user(), array('route' => array('profileUpdate',$user->id),'enctype'=>"multipart/form-data",'method'=>'PUT')) }}

    {!! csrf_field() !!}
        <div class="clearfix">&nbsp;</div>
        <div class="row ">
            <div class="col-md-12 content_area">
                <h3>Profile Pic</h3>
                <div class="panel-body">
                    <div class="row ">
                        <div class="col-md-12 profile_setting " >

                            <div class="media form-group">
                                <div class="media-left">
                                    <a href="#" class="">
                                        <i>
                                            <img src="{{Auth::user()->picture?:'/img/no-user.png'}}"  id="picture_img"   height="250" width="250" style="padding-bottom: 20px;" >
                                            <input type="file" id="picture"  name="picture" class="image_class" data-src="/img/no-user.png" required/>
                                        </i>

                                    </a>
                                </div>

                            </div>
                            <!--/media-->




                            <div class="row ">

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn_blue">Save</button>
                                </div>
                            </div>


                        </div>





                    </div>


                </div>

            </div>



            {!! Form::close() !!}

    </div>


</div>

@endsection
