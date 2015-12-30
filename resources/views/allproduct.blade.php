<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    @foreach($products as $produk)
      <h1>{{$produk->nama}}</h1>
      <h2>{{$produk->fasilitas}}</h2>
      <h2>{{$produk->ukuran}}</h2>
      <a href="produk/{{$produk->id}}">Add to cart</a>
    @endforeach
  </body>
</html>
