<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <div class="card">
            <div class="card-body">
              <div class="header">
                <img src="gambar/logo jateng.png" class="rounded mx-auto d-block" alt="..." />
              </div>
              <form action="/registeruser" method="post">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control my-4 py-2" id="" name="name" placeholder="name" />
                  </div>
                <div class="mb-3">
                    <input type="text" class="form-control my-4 py-2" id="" name="username" placeholder="Username" />
                  </div>
                <div class="mb-3">
                  <input type="password" class="form-control my-4 py-2" id="" name="password" placeholder="Password" />
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary btn-block" style="width: 500px">Register</button>
                </div>
              </form>
              <!-- <p class="mb-0"> 
                <a href="/login" class="nav-link mt-3" style="color: blue">Silahkan Login Jika Sudah memiliki Akun</a>
              </p> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>