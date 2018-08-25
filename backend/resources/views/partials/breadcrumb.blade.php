<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{$title}}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>
            @if($linkOne)
            <li>
                <a href="{{$linkOneUrl}}">{{$linkOneName}}</a>
            </li>
            @endif
            @if($linkTwo)
            <li class="active">
                <strong>{{$linkTwoName}}</strong>
            </li>
            @endif
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>