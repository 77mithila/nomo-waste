<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NoMo Waste | Register</title>

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
                        <div class="col-sm-11">
                            <h3 class="m-t-none m-b">Register</h3>
                            <p>Register your store today</p>
                            <form role="form" action="/create-manager" method="post">
                                <div class="form-group">
                                    <label>Store Name</label>
                                    <input type="text" class="form-control" name="storename">
                                </div>
                                <div class="form-group">
                                    <label>Store Reg No</label>
                                    <input type="number" class="form-control" name="storeId">
                                </div>
                                <div class="form-group">
                                    <label>Manager Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password" class="form-control" name="password">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                        <strong>Register</strong>
                                    </button>
                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>
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
