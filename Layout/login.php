<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/login.css">

    <title>Login</title>
</head>

<body>
    <div class="login">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>

        <h2 class="judul">Masukkan Identitas Admin</h2>

        <form action="">
            <div class="form-group akun">
                <label>Username</label>
                <input type="text" class="form-control" id="inputUsername" placeholder="Masukkan Username Admin">
            </div>

            <div class="form-group akun">
                <label>Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Masukkan Password Admin">
            </div>

            <div class="form-group submit">
                <input type="submit" class="btn btn-primary submit" style="background-color: #0094FF" value="Masuk">
            </div>
        </form>
    </div>

    <?php include 'footer.php' ?>
</body>

</html>