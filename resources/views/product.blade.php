<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h1>Sic Ecom</h1>
    <center><h1>Our Product</h1><center>
    <center>
        @foreach ($products as $product)
        <p>
            Name : {{$product->name}}
        </p>
        <p>
            Price : {{$product->price}} tk
        </p>
        <a href="detail">Buy</a>
        @endforeach
    <center>
</body>
</html>