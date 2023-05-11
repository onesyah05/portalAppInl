<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            background-color: aliceblue;
            font-family: sans-serif;
        }
        .card {
            border-radius: 5%;
            margin-top: 50%;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <!-- <div class="card-header">
              <h1 class="text-center mb-0">Login</h1>
            </div> -->
            <div class="card-body">
                <h1 class="text-center mb-0">
                    <img src="logo_favicon.png" width="100px" alt="" srcset=""><br>
                    Portal App
                </h1>
                <br>
              <form action="login" method="POST" >
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
