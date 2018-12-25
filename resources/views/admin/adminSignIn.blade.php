@extends('admin.layoutWhite')
@section('pageName',$pageName)
@section('title',$title)



@section('content')
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->
            <section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 to_animate">
                            <div class="with_border with_padding">

                                <h4 class="text-center">
                                    Sign In to Your Account
                                </h4>
                                <hr class="bottommargin_30">
                                <div class="wrap-forms">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="email">Email address</label>
                                                    @if($messages !== null && $messages->has('email'))
                                                        @foreach($messages->get('email') as $message)
                                                            <p style="color:red">{{$message}}</p>
                                                        @endforeach
                                                    @endif
                                                    <i class="grey fa fa-envelope-o"></i>
                                                    <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group has-placeholder">
                                                    <label for="password">Password</label>
                                                    @if($messages !== null && $messages->has('password'))
                                                        @foreach($messages->get('password') as $message)
                                                            <p style="color:red">{{$message}}</p>
                                                        @endforeach
                                                    @endif
                                                    <i class="grey fa fa-pencil-square-o"></i>
                                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                {{--<div class="checkbox">--}}
                                                    {{--<input type="checkbox" id="remember_me_checkbox">--}}
                                                    {{--<label for="remember_me_checkbox">Rememrber Me--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                        <button type="submit" class="theme_button block_button color1">Log In</button>
                                    </form>
                                </div>

                                <div class="darklinks text-center topmargin_20">

                                    <a role="button" data-toggle="collapse" href="#signin-resend-password" aria-expanded="false" aria-controls="signin-resend-password">
                                        Forgot your password?
                                    </a>

                                </div>
                                <div class="collapse form-inline-button" id="signin-resend-password">
                                    <form class="form-inline topmargin_20">
                                        <div class="form-group">
                                            <label class="sr-only">Enter your e-mail</label>
                                            <input type="email" class="form-control" placeholder="E-mail">
                                        </div>
                                        <button type="submit" class="theme_button with_icon">
                                            <i class="fa fa-share"></i>
                                        </button>
                                    </form>
                                </div>


                            </div>
                            <!-- .with_border -->

                            <p class="divider_20 text-center">
                                Not registered? <a href="/sign-up">Create an account</a>.<br>
                                or go <a href="/">Home</a>
                            </p>

                        </div>
                        <!-- .col-* -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </section>
        </div>
        <!-- eof #box_wrapper -->
    </div>
    <!-- eof #canvas -->

@endsection