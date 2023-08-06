<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
        <div style="display: flex; align-item: center">
            <p>{{$product->name}}</p>
            <p style="color: rgb(0, 102, 255); margin-left:  30px; font-weight: 900">{{$product->category->name}}</p>
        </div>
    @endforeach
</body>
</html>