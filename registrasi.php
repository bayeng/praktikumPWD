<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristasi</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="cekRegistrasi.php" method="POST">
                    <div>
                        <label for="uname">Username</label>
                        <input type="text" name="uname">
                    </div>
                    <div>
                        <label for="pwd">Password</label>
                        <input type="password" name="pwd">
                    </div>
                    <div>
                        <button type="submit">Registrasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>