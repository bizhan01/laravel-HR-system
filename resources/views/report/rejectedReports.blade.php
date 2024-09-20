@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
   <div class="col-lg-12 box box-block" style="background-color: #ef8e8e">
     <center><h3>جدول حل مشکلات بخش تکنالوژی دفاتر</h3></center>
     <center><h3>لیست گزارشات رد شده</h3></center><br>
      <table class="table table-striped table-bordered dataTable" id="table-2">
        <thead>
          <tr>
            <th colspan="2" >اسم کارمند</th>
            <th colspan="5" >ریاست</th>
            <th colspan="5" >کمپیوتر / وسیله</th>
            <th>جزئیات</th>
            <th>ویرایش</th>
            <th>حذف</th>
          </tr>
        </thead>
        <tbody>
          @foreach($reports as $report)
          <tr>
            <td colspan="2">{{$report->emp_name}}</td>
            <td colspan="5">{{$report->departement}}</td>
            <td colspan="5">{{$report->device}}</td>
            <td>
              <a class="text-success" href="showDetails/{{ $report->id }}"><i class="fa fa-info btn btn-rounded btn-info"></i></a>
            </td>
            <td>
              <a class="text-success" href="editReport/{{ $report->id }}"><i class="fa fa-edit btn btn-rounded btn-success"></i></a>
            </td>
            <td>
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
