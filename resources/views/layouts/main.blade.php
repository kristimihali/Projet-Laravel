@include('layouts/header')

<div class="row">
	<div id="content" class="col-lg-8 col-md-10 mx-auto">
		<router-view class="view"></router-view>
		@yield('content')
	</div>
</div>

@include('layouts/footer')