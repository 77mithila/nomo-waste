<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>NoMo-Waste</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
<div id="wrapper">


    <div class="col-lg-4">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>CURRENT OFFERS FROM LOCAL SHOPS</h5>

                <div class="ibox-tools">
                    <span class="label label-warning-light pull-right">{{count($offers)}} offers</span>
                </div>
            </div>
            <div class="ibox-content">

                <div>
                    <div class="feed-activity-list">
                        <div class="feed-element">

                            <div class="media-body ">

                                <div class="col-sm-6">
                                    <a class="btn btn-info btn-lg" href="/list-offers?orderBy=store_name">
                                        Order By Store Name
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="btn btn-info btn-lg" href="/list-offers?orderBy=end_date">
                                        Order By Expire Date
                                    </a>
                                </div>

                            </div>
                        </div>

                        @foreach ($offers as $offer)

                        <div class="feed-element">

                            <div class="media-body ">
                                <strong class="pull-right"> {{ $offer->store_name }}</strong>
                                <strong>{{ $offer->name }}</strong> now available for <strong>€ {{ round((100-$offer->discount_percentage)/100*$offer->retail_price) }}.00</strong> <br>
                                <div class="well">
                                    Was €{{ $offer->retail_price }}.00 and now <span class="badge badge-primary">{{ $offer->discount_percentage }}% OFF</span>
                                </div>
                                <small>Offer ends on {{$offer->end_date_formatted}} or when the stock finishes</small>
                            </div>
                        </div>

                        @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
</body>
</html>