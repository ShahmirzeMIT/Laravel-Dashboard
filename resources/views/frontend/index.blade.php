<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('assets/frontend/css/navbar.css')}}">
<link rel="stylesheet" href="{{asset('assets/frontend/css/main.css')}}">
</head>
<body>
	<header>
		@include('layouts.inc.frontend.navbar')
	</header>
	<main>
	<video src="{{asset('assets/frontend/video/4.mp4')}}" class="object-fit-none" autoplay  loop controls="controls">
	<!-- <source src="{{asset('assets/frontend/video/4.mp4')}}" type="video/mp4" /> -->
	</video>
	</main>
	<footer></footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>