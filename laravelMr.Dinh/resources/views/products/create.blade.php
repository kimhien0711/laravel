<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
@section('content')
<div class="container mt-5">
    <h2>Thêm sản phẩm</h2>
    <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Tên sản phẩm" required class="form-control mb-3">
    <input type="text" name="avatar" placeholder="Avatar" required class="form-control mb-3">
    <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
</body>
</html>

