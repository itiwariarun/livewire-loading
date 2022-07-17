<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel-Livewire Load More</title>
<!-- Fonts -->
  <script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
<!-- Styles -->
<style>
html, body {
color: #4f5355;
font-family: 'Nunito', sans-serif;
font-weight: 200;
height: 100vh;
margin: 0;
}
.full-height {
height: 100vh;
}
.flex-center {
align-items: center;
display: flex;
justify-content: center;
}
.position-ref {
position: relative;
}
.top-right {
position: absolute;
right: 10px;
top: 18px;
}
.content {
text-align: center;
}
.title {
font-size: 84px;
}
.links > a {
color: #636b6f;
padding: 0 25px;
font-size: 13px;
font-weight: 600;
letter-spacing: .1rem;
text-decoration: none;
text-transform: uppercase;
}
.m-b-md {
margin-bottom: 30px;
}
</style>
</head>
<body class="bg-stone-800">
<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header font-extrabold text-xl text-stone-100 text-center" style="background-color:#78716c">
<h2>Laravel-Livewire Load More</h2>
</div>
<div class="card-body" style="background-color:#eeebea">
@if (session()->has('message'))
<div class="alert alert-success">
{{ session('message') }}
</div>
@endif
@livewire('loading-list')
</div>
</div>
</div>
</div>
</div>
@livewireScripts
<script type="text/javascript">
window.onscroll = function(ev) {
if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
window.livewire.emit('load-more');
}
};
</script>
</body>
</html>