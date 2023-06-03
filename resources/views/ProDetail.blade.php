<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$sanpham->name}}</h1>
    <img src="/source/image/product/{{$sanpham->image}}" alt="">
    <span class="flash-del"><del>${{$sanpham->unit_price}}</del></span>
    <span class="flash-sale"><b>${{$sanpham->promotion_price}}</b></span>
</body>
</html>