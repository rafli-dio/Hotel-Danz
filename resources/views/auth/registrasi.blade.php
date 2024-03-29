<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hotel Danz | Registrasi</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link href="{{asset('/assets/admin-assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/admin/assets/css/components.css')}}" rel="stylesheet">
  <style>

    @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&family=Poppins:ital,wght@0,500;0,700;1,400&display=swap');

    .logo h1{
        font-family: 'Poppins';
        font-size: 20px;
        letter-spacing: 2px;
        color: #1038E9;
    }   

.logo span {
    color: #223279;
}
</style>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
            <div class="logo">
            <h1>Hotel<span>Danz</span></h1>
            </div>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registrasi Akun</h4></div>

              <div class="card-body">
                <form action="{{route('save-guest')}}" method="POST">
                  @csrf
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username" autofocus>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control" name="password">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-12" style="display:none;">
                      <label for="role" class="d-block">Role</label>
                      <input id="role" type="text" class="form-control" name="role" value="guest">
                    </div>
                  </div>

                  <div class="form-divider">
                    Data Diri
                  </div>
                  <div class="row">
                  <div class="form-group col-12">
                      <label for="long_name">Nama Panjang</label>
                      <input id="long_name" type="text" class="form-control" name="long_name" autofocus>
                    </div>
                  <div class="form-group col-12">
                      <label for="no_handphone">No Handphone</label>
                      <input id="no_handphone" type="text" class="form-control" name="no_handphone" autofocus>
                  </div>
                    <div class="form-group col-6">
                      <label>Jenis Kelamin</label>
                      <select class="form-control selectric" name="gender" id="gender">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label for="age">Umur</label>
                      <input id="age" type="number" class="form-control" name="age" autofocus>
                    </div>
                  </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- <div class="simple-footer">
              Copyright &copy; Stisla 2018
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="{{asset('/node_modules/jquery-pwstrength/jquery.pwstrength.min.js')}}"></script>
  <script src="{{asset('/node_modules/selectric/public/jquery.selectric.min.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{asset('/assets/admin-assets/js/scripts.js')}}"></script>
  <script src="{{asset('/assets/admin-assets/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('/assets/js/page/auth-register.js')}}"></script>
</body>
</html>
