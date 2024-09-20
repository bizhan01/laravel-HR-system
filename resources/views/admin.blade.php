@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md">
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box box-block bg-white tile tile-1 mb-2">
          <div class="t-icon right"><span class="bg-success"></span><i class="ti-shopping-cart-full"></i></div>
          <div class="t-content">
            <h6 class="text-uppercase mb-1">منتظر تایید</h6>
            <h1 class="mb-1">{{$pendingReportCount}}</h1>
            <!-- <span class="tag tag-danger mr-0-5">+17%</span> -->
            <!-- <span class="text-muted font-90">from previous period</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box box-block bg-white tile tile-1 mb-2">
          <div class="t-icon right"><span class="bg-primary"></span><i class="ti-bar-chart"></i></div>
          <div class="t-content">
            <h6 class="text-uppercase mb-1">تایید شده</h6>
            <h1 class="mb-1">{{$confirmedReportCount}}</h1>
            <!-- <i class="fa fa-caret-up text-success mr-0-5"></i><span>12,350</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box box-block bg-white tile tile-1 mb-2">
          <div class="t-icon right"><span class="bg-danger"></span><i class="ti-package"></i></div>
          <div class="t-content">
            <h6 class="text-uppercase mb-1">رد شده</h6>
            <h1 class="mb-1">{{$rejectedReportCount}}</h1>
            <!-- <span class="tag tag-primary mr-0-5">+125</span> -->
            <!-- <span class="text-muted font-90">arraving today</span> -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-xs-12">
        <div class="box box-block bg-white tile tile-1 mb-2">
          <div class="t-icon right"><span class="bg-warning"></span><i class="fa fa-users"></i></div>
          <div class="t-content">
            <h6 class="text-uppercase mb-1">کارمندان</h6>
            <h1 class="mb-1">{{$empCount}}</h1>
            <!-- <div id="sparkline1"></div> -->
          </div>
        </div>
      </div>
    </div>

    <div class="row row-md">
      <div class="col-lg-12 col-md-6 col-xs-12">
        <img src="img/photos-1/parameter-vs-statistic.jpg" height="400px" width="100%" alt="" />
      </div>
    </div>

  </div>
</div>
@endsection
