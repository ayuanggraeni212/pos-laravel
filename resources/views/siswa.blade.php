<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

<h1>Ini dari controller function index</h1><br>
<p>Nama : {{$nama}}</p>
<ul>
	@foreach ($pelajaran as $pl)
	<li>{{$pl}}</li>
	@endforeach
</ul>
</body>
</html>