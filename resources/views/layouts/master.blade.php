<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<!-- chứa link css  -->
	@include('core.linkcss')

	@yield('style')
</head>
<body>
	<!-- chứa phần header của page -->
	@include('core.header')
	@include('core.menutop')
	<div class="container">
		@yield('content')
	</div>
	
	@include('core.footer')
	@include('core.BackToTop')
	<!-- chứa các link javascript -->
	@include('core.linkjs')

	<!-- chèn code js -->
	@yield('script')
</body>
</html>