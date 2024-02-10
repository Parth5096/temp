<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BigFair247</title>
  <link rel="icon" type="image/png" href="{{ asset('public/front/img/logo.png')}}" sizes="16x16">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('public/admin/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <link href="{{ asset('public/admin/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{route('home')}}" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('public/logo.png')}}" alt="" >
                  <span class="d-none d-lg-block">BigFair247</span>
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                  <form action="{{ route('login.post') }}" method="post" class="row g-3 needs-validation">
                   @csrf

                    <div class="col-12">
                      <label for="email" class="form-label">Username</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email">
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" placeholder="password">
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0" style="text-align:center"><a href="#" >Forget Password</a></p>
                    </div>
                  </form>

                </div>
              </div>

              

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('public/admin/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{ asset('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('public/admin/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{ asset('public/admin/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{ asset('public/admin/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{ asset('public/admin/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{ asset('public/admin/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{ asset('public/admin/assets/vendor/php-email-form/validate.js')}}"></script>

  <script src="{{ asset('public/admin/assets/js/main.js')}}"></script>

</body>

</html>