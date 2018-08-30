
        <html lang="en">

        @include('includes.header')

        <body>

        <div id="wrapper">

        @include('includes.left')

            <div id="page-content-wrapper">
                @include('includes.contentHeader')
                <div class="page-content inset" data-spy="scroll" data-target="#spy">
                   <br/>
               {{--     @include('includes.contentTop')--}}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @yield('content')
                    @include('includes.footer')
                </div>

            </div>



        </div>

        </body>

        <script> /*Menu-toggle*/
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("active");
            });</script>


        </html>

