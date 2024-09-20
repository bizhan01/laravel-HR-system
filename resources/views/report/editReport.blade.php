@extends('layouts.master')
@section('content')
<!-- Content -->
	<div class="content-area py-1">
		<div class="container-fluid">
      <nav class="navbar navbar-light bg-white b-a mb-2">
        <center><h3>اصلاح گزارش</h3></center>
				<form action = "/updateReport/<?php echo $report[0]->id; ?>" method = "post" enctype="multipart/form-data" >
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<input type="hidden" name="user_id" value="<?php echo $report[0]->user_id;?>">
					<div class="row form-group">
             <div class="col-lg-4 col-md-4 col-sm-4">
               <label  for="Field of Study" style="color:black">اسم کارمند <span style="color: red">*</span></label>
               <input type="text"  name="emp_name"  value="<?php echo $report[0]->emp_name; ?>" class="form-control" placeholder="اسم کارمند" required>
             </div>
						 <div class="col-lg-4 col-md-4 col-sm-4">
							 <label  for="Field of Study" style="color:black">ریاست <span style="color: red">*</span></label>
							 <select class="form-control" name="departement" required="" style="height: 38px">
								<option><?php echo $report[0]->departement; ?></option>
								@foreach($departements as $departement)
									<option>{{$departement->title}}</option>
								@endforeach
							 </select>
						 </div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<label  for="Field of Study" style="color:black">کمپیوتر / وسیله <span style="color: red">*</span></label>
								<select class="form-control" name="device" required="" style="height: 38px">
									<option><?php echo $report[0]->device; ?></option>
									<option>لب تاپ</option>
									<option>دیسکتاپ</option>
									<option>پرنتر</option>
								</select>
						</div>
          </div>
					<div class="row form-group">
						 <div class="col-lg-12 col-md-12 col-sm-12">
							 <label  for="Field of Study" style="color:black">توضیح مشکلات <span style="color: red">*</span></label>
								 <textarea name="problem" cols="30" rows="7" class="form-control" placeholder="توضیح کامل مشکلات موجود" required><?php echo $report[0]->problem; ?></textarea>
						 </div>
					</div>
					<div class="row form-group">
						 <div class="col-lg-12 col-md-12 col-sm-12">
							 <label  for="Field of Study" style="color:black">توضیح حل مسله <span style="color: red">*</span></label>
							 <textarea name="solution" cols="30" rows="7" class="form-control" placeholder="توضیحات عملیات انجام شده..." required><?php echo $report[0]->solution; ?></textarea>
						 </div>
					</div>
					<div class="row form-group">
						 <div class="col-lg-12 col-md-12 col-sm-12">
							 <label  for="Field of Study" style="color:black">اسکن مکتوب <span style="color: red">*</span></label>
							 <input type="hidden" name="image" value="<?php echo $report[0]->image; ?>">
               <input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/reports/<?php echo $report[0]->image; ?>" data-height="200" accept="image/*"/>
						 </div>
					</div>
					<input type="hidden" name="status" value="<?php echo $report[0]->status;?>">
          <div class="row form-group">
             <div class="col-md-4">
               <input type="submit" name="submit" value="ذخیره" class="btn btn-rounded btn-success " />
								<button type="reset" class="btn btn-rounded btn-warning"><li class="fa fa-remove"> لغو</li></button>
             </div>
          </div>
					@include('layouts.errors')
        </form>
      </nav>
    </div>
  </div>
@endsection
