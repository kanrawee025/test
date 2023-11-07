<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h3 class="h3">Login</h3>
        </div>
        <div class="card-body">
            <form action="action.php">

                <ul>
                    <label id="p1">username</label>
                    <input type="text" name="username">
                </ul>
                <ul>
                    <label id="p2">password</label>
                    <input type="text" name="password">
                </ul>
                <button class="btn" type="submit">sign in</button>
            </form>
        </div>
    </div>
</body>

</html>