<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

  <div class="flex-center position-ref full-height">
      <div class="content">
          <div class="title m-b-md">
              <a href="/">@lang('messages.exam')</a>
          </div>

          <div class="links">
                <a href="/">@lang('messages.cycle_students')</a>
                <a href="#">@lang('messages.student_to_cycle')</a>
                <a href="#">@lang('messages.student_to_company')</a>
                <a href="#">@lang('messages.new_student')</a>
          </div>
          <hr><br><br>
					<div class="op">
          	@yield('content')
					</div>
      </div>
  </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
