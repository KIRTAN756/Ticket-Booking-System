<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form method="post" action="/reg">
        @csrf
        <table class="table">
            <tbody>
                <tr>
                    <td align="center"><h2>Register</h2></td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                          <label for="">Username</label>
                          <input type="text"
                            class="form-control" name="uname" placeholder="Kirtan" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password"
                            class="form-control" name="pwd" placeholder="Password" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="/"><h3>Login</h3></a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
  </body>
</html>
