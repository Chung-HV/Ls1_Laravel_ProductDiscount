<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>SHOW DISCOUNT AMOUNT</h2>
<table>
    <tr>
        <td>Product Description</td>
        <td>{{$productDescription}}</td>
    </tr>
    <tr>
        <td>List Price</td>
        <td>{{$price}}</td>
    </tr>
    <tr>
        <td>Discount Percent</td>
        <td>{{$discountPercent}}</td>
    </tr>
    <tr>
        <td>Discount Amount</td>
        <td>{{$discountAmount}}</td>
    </tr>
    <tr>
        <td>Discount Price</td>
        <td>{{ $discountPrice }}</td>
    </tr>
</table>
</body>
</html>
