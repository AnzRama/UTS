
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Halaman Login</h1>

    <form action="/login" method="post"> 
        @csrf

        <ul>
            <li>
                <label for="name">Nama :</label>
                <input class="form-control @error('name') is-invalid @enderror" required type="text" name="name" id="name" value="{{old ('name) }}">
            </li>

            <li>
                <label for="password">Password :</label>
                <input required class="form-control" type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login"> Login </button>
            </li>
        </ul>

    </form>
</body>
</html>