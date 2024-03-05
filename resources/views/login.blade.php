<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="container py-5">
        <div class="w-50 px-3 py-3 mx-auto">
            <center>
                <h1>Login</h1>
                <form action="/login" method="post">
                @csrf
                <table>
                    <tr>
                        <th><label for="email" class="form-label">Email</label></th>
                        <th><input type="text" name="email" id=""></th>
                    </tr>
                    <tr>
                        <th><label for="password" class="form-label">Password</label></th>
                        <th><input type="password" name="password" id=""></th>
                    </tr>
                    <tr>
                        <td>
                            <button name="submit" type="submit">Login</button>
                        </td>
                    </tr>
                </table>
                </form>
            </center>
        </div>
    </div>
</body>
</html>