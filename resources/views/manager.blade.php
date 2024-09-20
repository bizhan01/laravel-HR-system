@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
			<div class="col-lg-12 col-md-12 col-sm-12">
        <img src="img/photos-1/SPSS-variable-name-enhacement.jpg" height="400px" width="100%" alt="" />
      </div>
    </div>

    <div class="row row-md">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-info mb-2">
          <div class="t-icon right"><i class="fa fa-times-circle"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$pendingReportCount}}</h1>
            <h6 class="text-uppercase">منتظر تایید</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-success  mb-2">
          <div class="t-icon right"><i class="fa fa-check"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$confirmedReportCount}}</h1>
            <h6 class="text-uppercase">تایید شده</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-warning  mb-2">
          <div class="t-icon right"><i class="fa fa-group"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$empCount}}</h1>
            <h6 class="text-uppercase">کارمندان</h6>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
