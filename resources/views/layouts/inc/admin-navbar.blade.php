<nav class="mynav">
	<div class="navimg"><img src="{{asset('assets/image/logo.png')}}" alt=""></div>
	<div id="openProfile">
		@if(session('userName') == 'Developer')
		{{session('userName')}} <i class="fa-solid fa-code"></i>
		@else
		{{session('userName')}}	<i class="fa-solid fa-person"></i>
		@endif
	</div>

	<div class="profile-menu" >
		<ul>
			<li><a href="#">Profile</a> </li>
			<li><a href="http://127.0.0.1:8000/login">Log Out <i class="fa-solid fa-right-to-bracket"></i></a> </li>
		</ul>
	</div>

</nav>