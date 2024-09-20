@extends('layouts.master')
@section('content')
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center>
          <h3>وزارت صنعت و تجارت</h3>
          <h3>گزارشات بخش تکنالوژی دفاتر</h3>
          <h3>جزئیات گزارش</h3>
        </center>
        <hr>
				 @include('layouts.errors')
				 <br>
				<form>
					<b for="">مشخصات کارمند آی تی</b>
					<div class="row form-group">
						 <div class="col-lg-4">
							 <label  for="Field of Study" style="color:black">اسم کارمند آی تی: <span><?php echo $report[0]->name; ?></span></label>
						 </div>
						 <div class="col-lg-4">
							 <label  for="Field of Study" style="color:black">شماره تماس: <span><?php echo $report[0]->phone_number; ?></span></label>
						 </div>
						 <div class="col-lg-4">
							 <label  for="Field of Study" style="color:black">ایمیل آدرس: <span><?php echo $report[0]->email; ?></span></label>
						 </div>
					</div>

					<b for="">جزئیات گزارش</b>
					<div class="row form-group">
             <div class="col-lg-3">
               <label  for="Field of Study" style="color:black">اسم کارمند: <span><?php echo $report[0]->emp_name; ?></span></label>
             </div>
						 <div class="col-lg-3">
							 <label  for="Field of Study" style="color:black">ریاست: <span><?php echo $report[0]->departement; ?></span></label>
						 </div>
						<div class="col-lg-3">
							<label  for="Field of Study" style="color:black">کمپیوتر / وسیله: <span><?php echo $report[0]->device; ?></span></label>
						</div>
            <div class="col-lg-3">
              <label  for="Field of Study" style="color:black">تاریخ گزارش: <span><?php echo $report[0]->created_at; ?></span></label>
            </div>
          </div>
					<div class="row form-group">
						 <div class="col-lg-12 col-md-12 col-sm-12">
							 <b  for="Field of Study" style="color:black">توضیح مشکلات </b>
								 <textarea  rows="5%" class="form-control" style="border: 1px solid white"><?php echo $report[0]->problem; ?></textarea>
						 </div>
					</div>
					<div class="row form-group">
						 <div class="col-lg-12 col-md-12 col-sm-12">
							 <b  for="Field of Study" style="color:black">توضیح حل مسله </b>
							 <textarea   rows="5%" class="form-control" style="border: 1px solid white"><?php echo $report[0]->solution; ?></textarea>
						 </div>
					</div>
					<div class="row form-group">
						 <div class="col-lg-12 col-md-12 col-sm-12">
							 <b  for="Field of Study" style="color:black">اسکن مکتوب</b><br>
               <center>
                 <a href="/UploadedImages/reports/<?php echo $report[0]->image; ?>"><img src="/UploadedImages/reports/<?php echo $report[0]->image; ?>" height="300px"/></a>
               </center>
						 </div>
					</div>
        </form>
      </nav>
    </div>
  </div>

	<div class="container-fluid <?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '3'): ?>
		<?php echo 'hide' ?>
	<?php endif ?>" style="margin-top: -20px">
		<div class="navbar navbar-light bg-white b-a mb-2">
			<center>
				<h5>تصمیم گیری در مورد گزارش فوق</h5>
			</center>
			<br>
			<div class="row form-group">

					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
						<form method="post" action = "/confirme/<?php echo $report[0]->id; ?>">
								@csrf
							<input type="hidden" name="status" value="1">
							<input type="submit" class="btn btn-success form-control" value="تایید گزارش">
						</form>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
						<form method="post" action = "/confirme/<?php echo $report[0]->id; ?>">
							@csrf
							<input type="hidden" name="status" value="2">
							<input type="submit" class="btn btn-danger form-control" value="رد گزارش">
						</form>
					</div>

			 </div>
		</div>
	</div>
@endsection
