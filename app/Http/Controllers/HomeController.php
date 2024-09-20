<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }

      $pendingReportCount = DB::table('reports')->where('status', 0)->count('id');
      $confirmedReportCount = DB::table('reports')->where('status', 1)->count('id');
      $rejectedReportCount = DB::table('reports')->where('status', 2)->count('id');
      $empCount = DB::table('users')->count('id');

      $userPendingReportCount = DB::table('reports')->where('status', 0)->where('user_id', $userid)->count('id');
      $userConfirmedReportCount = DB::table('reports')->where('status', 1)->where('user_id', $userid)->count('id');
      $userRejectedReportCount = DB::table('reports')->where('status', 2)->where('user_id', $userid)->count('id');

      return view('home', compact(
      'pendingReportCount', 'confirmedReportCount', 'rejectedReportCount',
      'userPendingReportCount', 'userConfirmedReportCount', 'userRejectedReportCount',
      'empCount'));
    }

}
