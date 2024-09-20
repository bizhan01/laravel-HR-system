<!-- Sidebar -->
<div class="site-overlay"></div>
<div class="site-sidebar" style="background-color: #373944">
  <div class="custom-scroll custom-scroll-light">
    <ul class="sidebar-menu">
      <li class="menu-title">مینو ها</li>

      <li class="with-sub">
        <a href="/" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-home"></i></span>
          <span class="s-text">داشبورد</span>
        </a>
      </li>

      <li class="with-sub <?php if (Auth::user()->isAdmin == '2' || Auth::user()->isAdmin == '3'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-group"></i></span>
          <span class="s-text">کاربران</span>
        </a>
        <ul>
          <li><a href="/addUser">اضافه نمودن کاربر جدید</a></li>
          <li><a href="{{route('userList')}}">لیست کاربران</a></li>
          <li><a href="{{ route('blockList') }}">کاربران بلاک شده</a></li>
        </ul>
      </li>

      <li class="with-sub <?php if (Auth::user()->isAdmin == '2' || Auth::user()->isAdmin == '3'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="{{ route('departement') }}" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-home"></i></span>
          <span class="s-text">دیپارتمنت ها</span>
        </a>
      </li>

      <li class="with-sub">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-group"></i></span>
          <span class="s-text">گزارشات</span>
        </a>
        <ul>
          <li class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>"><a href="{{ route('newReport') }}">گزارش جدید</a></li>
          <li class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>"><a href="{{route('pendingReports')}}">منتظر تایید</a></li>
          <li class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>"><a href="{{ route('approvedReports') }}">گزارشات تایید شده</a></li>
          <li class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '2'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>"><a href="{{ route('rejectedReports') }}">گزارشات رد شده (ناقص)</a></li>
          <li class="<?php if (Auth::user()->isAdmin == '1' || Auth::user()->isAdmin == '3'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>"><a href="{{ route('newReports') }}">گزارشات جدید</a></li>
          <li class="<?php if (Auth::user()->isAdmin == '3'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>"><a href="{{ route('confirmedReports') }}">گزارشات تصویب شده</a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
<!-- Aside End -->
