<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NoMo Waste | Login</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-7 center-orientation">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h4>
                        <strong>NoMo Waste - Demo Application</strong>
                    </h4>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Sign in</h3>

                            <form role="form" action="/login" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" placeholder="Username" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" class="form-control" name="password">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                        <strong>Log in</strong>
                                    </button>
                                    <label> <input type="checkbox" class="i-checks"> Remember me </label>
                                </div>
                                @csrf
                            </form>
                        </div>
                        <div class="col-sm-6"><h4>Not a member?</h4>

                            <p>You can create an account:</p>

                            <p class="text-center">
                                <a href="/registration"><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                    </div>
                    @if($message)
                        <div class="alert alert-warning alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            {{$message}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mainly scripts -->
<script src="/js/jquery-2.1.1.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/js/inspinia.js"></script>
<script src="/js/plugins/pace/pace.min.js"></script>
</body>

</html>