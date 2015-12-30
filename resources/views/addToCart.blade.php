<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    nama company
    <h1>{{$company->nama}}</h1>

    nama produk
    <h1>{{$produk->nama}}</h1>

    <form  action="../addToCart/{{$produk->id}}" method="POST">
        <button type="submit">Add to cart</button>
    </form>


  </body>
</html>
