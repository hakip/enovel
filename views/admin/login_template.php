<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Login</title>
    <script type="text/javascript" src="../views/scripts/admin/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../views/styles/admin/sweet-alert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="padding-top: 25vh;">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
              <form method="POST" action="">
                  <div class="form-label-group pb-3">
                      <input type="email" name="email"  class="form-control" placeholder="Email address" required autofocus>
                  </div>

                  <div class="form-label-group pb-5">
                      <input type="password" name= "password" class="form-control" placeholder="Password" required>
                  </div>
                  <button class="btn btn-lg btn-outline-danger btn-block text-uppercase" type="submit">Login</button>
              </form>
            </div>
        </div>
    </div>
</body>

</html>