@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
   <div class="col-lg-12 box box-block" style="background-color: #8fecec">
     <center><h3>جدول حل مشکلات بخش تکنالوژی دفاتر</h3></center>
     <center><h3>لیست گزارشات منتظر تایید</h3></center><br>
      <table class="table table-striped table-bordered dataTable" id="table-2">
        <thead>
          <tr>
            <th>اسم کارمند</th>
            <th>ریاست</th>
            <th>کمپیوتر / وسیله</th>
            <th>جزئیات</th>
            <th class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">ویرایش</th>
            <th class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">حذف</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reports as $report)
          <tr>
            <td>{{$report->emp_name}}</td>
            <td>{{$report->departement}}</td>
            <td>{{$report->device}}</td>
            <td>
              <a class="text-success" href="showDetails/{{ $report->id }}"><i class="fa fa-info btn btn-rounded btn-info"></i></a>
            </td>
            <td class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
              <a class="text-success" href="editReport/{{ $report->id }}"><i class="fa fa-edit btn btn-rounded btn-success"></i></a>
            </td>
            <td class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2'): ?>
              <?php echo 'hide' ?>
            <?php endif ?>">
                <a class="text-danger" href="deleteReport/{{ $report->id }}" onclick='return confirm("حذف شود؟")'><i class="fa fa-trash btn btn-rounded btn-danger"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
