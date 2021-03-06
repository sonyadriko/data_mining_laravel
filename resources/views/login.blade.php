<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="css/css-login.css" rel="stylesheet">


</head>
<body>
   <div class="container">

    <br><br><br><br><br><br><br><br><br>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-10">

                <div class="card o-hidden border-0 shadow-lg my-5">

  <div class="card-body p-5">

     <div class="row">
      <div class="col-lg-12">

  <div class="grid">

    <h1 style="color: #4e73df; margin-bottom: 0px;">Welcome back</h1>
    <h6 style="margin-top: 0px; color: #7491E6;;">Welcome back! Please enter you details.</h6>

    <form action="/login" method="POST" class="form login" style="margin-top: 30px;">
    @csrf 

      <div class="form__field">
        <label for="login__username" style="margin-bottom: -0.5px;"><svg class="icon">
            <use xlink:href="#icon-user"></use>
          </svg><span class="hidden">Username</span></label>
        <input id="login__username" type="text" name="username" class="form__input @error('email') is-invalid @enderror" placeholder="Enter your username" required autofocus value="{{ old('email') }}">
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}  
          </div>
        @enderror
      </div>

      <div class="form__field">
        <label for="login__password" style="margin-bottom: -0.5px;"><svg class="icon">
            <use xlink:href="#icon-lock"></use>
          </svg><span class="hidden">Password</span></label>
        <input id="login__password" type="password" name="password" class="form__input" placeholder="Enter your password" required>
      </div>

      <div class="form__field">
        <input type="submit" value="Sign In" name="login">
      </div>

    </form>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


  <svg xmlns="http://www.w3.org/2000/svg" class="icons">
    <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
      <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
    </symbol>
    <symbol id="icon-lock" viewBox="0 0 1792 1792">
      <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
    </symbol>
    <symbol id="icon-user" viewBox="0 0 1792 1792">
      <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
    </symbol>
  </svg>

</body>

</body>

</html>