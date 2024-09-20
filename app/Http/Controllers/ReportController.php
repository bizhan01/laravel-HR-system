<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Report;
use App\Departement;
use DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
      {
        $departements = Departement::latest()->get();
        return view('report.addReport', compact('departements'));
      }

      public function newReports()
      {
        $reports = Report::where('status', 0)->latest()->get();
        return view('report.pendingReports', compact('reports',));
      }

      public function confirmedReports()
      {
        $reports = Report::where('status', 1)->latest()->get();
        return view('report.approvedReports', compact('reports',));
      }

      public function confirme(Request $request, $id) {
        $status = $request->status;
        try {
           DB::update('update reports set status = ? where id = ?',[$status, $id]);
           session()->flash('success', 'عملیات موافقانه اجرا شد ');
          return back();
        } catch (Exception $e) {
          return back()->whit('failed', 'خطا رخ داده لطفا دوباره کوشش کنید');
        }
        return redirect('back')->with();
      }


      public function pendingReports()
      {
        if (Auth::check()){
          $userid = Auth::user()->id;
        }
        $reports = Report::where('status', 0)->where('user_id', $userid)->latest()->get();
        return view('report.pendingReports', compact('reports',));
      }

      public function approvedReports()
      {
        if (Auth::check()){
          $userid = Auth::user()->id;
        }
        $reports = Report::where('status', 1)->where('user_id', $userid)->latest()->get();
        return view('report.approvedReports', compact('reports',));
      }


      public function rejectedReports()
      {
        if (Auth::check()){
          $userid = Auth::user()->id;
        }
        $reports = Report::where('status', 2)->where('user_id', $userid)->latest()->get();
        return view('report.rejectedReports', compact('reports',));
      }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
            'emp_name'=>'required',
            'departement'=>'required',
            'device'=>'required',
            'problem'=>'required',
            'solution'=>'required',
            'solution'=>'required',
            'status'=>'required',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages/reports"), $new_name);
        }
        else {
          $new_name = 'report.png';
        }
          Report::create([
              'user_id' => Auth::user()->id,
              'emp_name'=> request('emp_name'),
              'departement'=> request('departement'),
              'device'=> request('device'),
              'problem'=> request('problem'),
              'solution'=> request('solution'),
              'image' => $new_name,
              'status' => request('status'),
              'created_at'=>carbon::now(),
              'updated_at'=>carbon::now(),

            ]);
            try {
             session()->flash('success', 'عملیات موافقانه اجرا شد ');
             return back();
             } catch(Exception $ex) {
             session()->flash('failed', 'خطا! دوباره کوشش کنید');
             return back();
           }
    }


      public function showDetails($id) {
        $report = DB::table('reports as rpt')
         ->rightJoin('users as ur', 'rpt.user_id', '=', 'ur.id')
         ->where('rpt.id', '=',  $id)
         ->select("ur.name", "ur.phone_number", "ur.email",
          "rpt.id", "rpt.emp_name", "rpt.departement", "rpt.device", "rpt.problem", "rpt.solution", "rpt.image", "rpt.created_at")
         ->get();


          // $report = DB::select('select * from reports where id = ?',[$id]);
         return view('report.showDetails',['report'=>$report]);
       }


        public function show($id) {
          $departements = Departement::latest()->get();
          $report = DB::select('select * from reports where id = ?',[$id]);
         return view('report.editReport',['report'=>$report, 'departements'=>$departements]);
       }



      public function edit(Request $request, $id) {
         $user_id = $request->input('user_id');
         $emp_name = $request->input('emp_name');
         $departement = $request->input('departement');
         $device = $request->input('device');
         $problem = $request->input('problem');
         $solution = $request->input('solution');
         $status = $request->input('status');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages/reports", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update reports set user_id = ? where id = ?',[$user_id, $id]);
         DB::update('update reports set emp_name = ? where id = ?',[$emp_name, $id]);
         DB::update('update reports set departement = ? where id = ?',[$departement, $id]);
         DB::update('update reports set device = ? where id = ?',[$device, $id]);
         DB::update('update reports set problem = ? where id = ?',[$problem, $id]);
         DB::update('update reports set solution = ? where id = ?',[$solution, $id]);
         DB::update('update reports set image = ? where id = ?',[$new_name, $id]);
         DB::update('update reports set status = ? where id = ?',[$status, $id]);
         return redirect('/pendingReports');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from reports where id = ?',[$id]);
     return back();
  }
}
