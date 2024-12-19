
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Halaman Login</h1>

    <form action="/regis" method="post"> 
        @csrf

        <ul>
            <li>
                <label for="username">Nama :</label>
                <input class="form-control @error('username') is-invalid @enderror" required type="text" name="username" id="username" value="{{old ('username) }}">
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