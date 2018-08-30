<div class="content-header">
    <div class="col-md-12">
        <div class="col-xs-2">
                        <span id="home">
                        <a id="menu-toggle" href="#">
                        <i class="fa fa-bars ext"></i>
                        </a>
                       </span>
        </div>
        <div class="col-xs-8 col-sm-8 text-center"><h3>My Test Application</h3>
        </div>
        <div class="col-xs-1 adv_right" >
            <div class="logout_btn" style="line-height: 0!important;">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class=" blue_color-text icon-logout icons"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        </div>
    </div>
</div>