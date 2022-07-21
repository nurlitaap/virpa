<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <title>Website VIRPA</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<body>
    <!-- header -->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="/contact"><i class="fas fa-phone"></i></li>
                <li><a href="/contact"><i class="fab fa-whatsapp"></i></li>
                <li><a href="/contact"><i class="fas fa-envelope-open-text"></i></li>
                <li><a href="/contact"><i class="fab fa-instagram"></i></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="/">VIRPA</a></h1>
            <ul>
                <li><a href="/">HOME</li>
                <li><a href="/about">ABOUT</li>
                <li><a href="/service">SERVICE</li>
                <li><a href="/contact">CONTACT</li>
                <li class="active"><a href="/login">LOGIN</li>
                </a>
            </ul>
        </div>
    </header>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    a {
        text-decoration: none;
    }
    body {
        background: white;
        background-repeat: no-repeat;
        
        }
    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }
    #forgot-pass {
        color: black;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }
    #card {
        background: #7DCFF6;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }
    #card-content {
        padding: 12px 44px;
    }
    #card-title {
        font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }
    #signup {
        color: black;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 16px;
        text-align: center;
    }
    #submit-btn {
        background: white;
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px white;
        cursor: pointer;
        color:black;
        font-family: "Raleway SemiBold", sans-serif;
        font-size: 15px;
        height: 42.3px;
        margin: auto;
        margin-top: 70px;
        transition: 0.25s;
        width: 100%;
    }
    #submit-btn:hover {
        box-shadow: 0px 1px 18px white;
    }
    .form {
        align-items: center;
        display: flex;
        flex-direction: column;
    }
    .form-border {
        background: -webkit-linear-gradient(right, #7DCFF6, #7DCFF6);
        height: 5px;
        width: 100%;
    }
    .form-content {
        background: white;
        border: none;
        outline: none;
        padding-top: 14px;
        margin-top: 10px;
    }
    .underline-title {
        background: -webkit-linear-gradient(right, black, black);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;
    }
    input{
        width: 100%;

    }
  </style>
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
      </div>
      
      @if (session()->has('error'))
        <p class="text-danger">{{ session('error') }}</p>
      @endif

      <form action="/login2" method="POST">
        @csrf
        <label for="username" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input id="username" class="form-content" type="username" name="username"  required />
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="#">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <button id="submit-btn" type="submit">Login</button>
      </form>
    </div>
  </div>
</body>

</html>