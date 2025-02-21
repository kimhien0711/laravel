<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nhập Liệu</title>
    <link rel="stylesheet" href="././assets/css/signup.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control" name="age">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="date">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="tel" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <label>Web</label>
                <input type="url" class="form-control" name="web">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div>
                @include ('blocks.error')
            </div>
            <button type="submit" class="btn btn-primary">OK</button>
            <div class="display-info">
                @if (isset($userSession))
                        @foreach ($userSession as $user)
                        <p>Name: {{ $user['name'] }}</p>
                        <p>Age: {{ $user['age'] }}</p>
                        <p>Date: {{ $user['date'] }}</p>
                        <p>Phone: {{ $user['phone'] }}</p>
                        <p>Web: {{ $user['web'] }}</p>
                        <p>Address: {{ $user['address'] }}</p>
                        <hr>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
</body>

</html>
