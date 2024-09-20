@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
			<div class="col-lg-12 col-md-12 col-sm-12">
        <center>
        <img src="img/logo/logo.png" height="150px" alt="" />
        <h3>وزارت صنعت و تجارت</h3>
        <h3>دپارتمنت آی تی</h3>
        <h3>پنل مدیریتی و گزارش دهی کارمندان آی تی</h3>
        <hr>
      </center>
      </div>
    </div>

    <div class="box box-block bg-white">
      <div class="row">
        <div class="col-md-4">
          <div class="box box-block py-1 bg-primary text-xs-center mb-1">
            <span class="arrow arrow-bottom arrow-primary"></span>
            مجموعه گزارشات
          </div>
        </div>
        <div class="col-md-4">
          <div class="box box-block py-1 bg-info text-xs-center mb-1">
            <span class="arrow arrow-bottom arrow-info"></span>
            منتظر تایید
          </div>
        </div>
        <div class="col-md-4">
          <div class="box box-block py-1 bg-success text-xs-center mb-1">
            <span class="arrow arrow-bottom arrow-success"></span>
            تایید شده
          </div>
        </div>
      </div>
      <div class="row row-md">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="box box-block tile tile-2 bg-primary mb-2">
            <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
            <div class="t-content">
              <h1 class="mb-1">{{$userPendingReportCount}}</h1>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="box box-block tile tile-2 bg-info mb-2">
            <div class="t-icon right"><i class="ti-bar-chart"></i></div>
            <div class="t-content">
              <h1 class="mb-1">{{$userConfirmedReportCount}}</h1>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="box box-block tile tile-2 bg-success  mb-2">
            <div class="t-icon right"><i class="fa fa-check"></i></div>
            <div class="t-content">
              <h1 class="mb-1">{{$userRejectedReportCount}}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
