@if(auth()->user()->isAdmin == 1 && auth()->user()->status == 1)
	@include('admin')
@elseif(auth()->user()->isAdmin == 2 && auth()->user()->status == 1)
	@include('manager')
@elseif(auth()->user()->isAdmin == 3 && auth()->user()->status == 1)
	@include('employee')
@else
  @include('blocked')
@endif
