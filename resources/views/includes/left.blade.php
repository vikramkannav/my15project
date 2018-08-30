<div id="sidebar-wrapper">
    <nav id="spy">
        <ul class="sidebar-nav">
            <li class="logo adv_center">
                <img src="{{ asset('/img/logo.png') }}" alt="Logo" class="img-responsive gologo">
            </li>
            <li class="adv_center user_profile">
                <a href="./profile_setting.html" style="background: none !important ">
                    {{--<img--}}
                            {{--src="{{ asset('/img/user.png') }}"--}}
                            {{--class="img-responsive side-bar-img">--}}
                    <a href="{{URL::to(Auth::user()."/".Auth::user()->id."/profile-pic")}}" style="background: none !important ">
                    <img src="{{Auth::user()->picture?url(Auth::user()->picture):'/img/no-user.png'}}" class="img-responsive side-bar-img">


                    <span class="white_color-text">
                                    <h4>{{Auth::user()->name}}</h4>
                                </span>
                    <span class="white_color-text">
                                    <h5>{{Auth::user()->city}},{{Auth::user()->state}}</h5>
                                </span>
                </a>
            </li>
            <li>
                <a href="{{"/home"}}">
                    <i class="fa fa-bell" style="margin-left: -21px;"></i> All Posts </a>
            </li>
            <li>
                <a href="{{"/posts"}}">
                    <i class="fa fa-book" style="margin-left: -21px;"></i> My Post</a>
            </li>

            <li>
                <a href="{{"/posts/create"}}">
                    <i class="fa fa-edit" style="margin-left: -21px;"></i> Create Post</a>
            </li>

            <li>
                <a href="{{'/profile/'}}{{Auth::user()->id}}">
                    <i class="fa fa-user" style="margin-left: -21px;"></i> My Account</a>
            </li>
        </ul>
    </nav>
</div>