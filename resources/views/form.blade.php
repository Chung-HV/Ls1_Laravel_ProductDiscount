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
<h2>Nhap thong tin vao day</h2>
<form action="/abc" method="post">
    @csrf
    <p>
        <input name="productDescription" type="text" placeholder="Description">
    </p>
    <p>
        <input name="price" type="number" placeholder="Price">
    </p>
    <p>
        <input name="discountPercent" type="text" placeholder="Discount">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>
</body>
</html>
