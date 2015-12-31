<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

 @foreach($cartList as $cart)
	 nama user
	 <h1>{{$cart->name}}</h1>

	 nama produk
	 <h2>{{$cart->nama}}</h2>

	 status
	 <h2>{{$cart->status}}</h2>

	 <a href="bookedProduct/{{$cart->id}}">Booking</a>
		<hr>
 @endforeach

</body>
</html>
