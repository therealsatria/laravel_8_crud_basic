<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
        height: 100%;
        }

        body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        }

        .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->

  </head>
  <body class="text-center">

<main class="form-signin">
  <form action="{{ url(''); }}/registeruser" method="post">
    @csrf
    <img class="mb-4" src="https://image.flaticon.com/icons/png/512/4696/4696754.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Form Register</h1>
    <label for="inputEmail" class="visually-hidden">Name</label>
    <input type="text" id="inputEmail" name="name" class="form-control" placeholder="Name" required autofocus>
    <label for="inputEmail" class="visually-hidden">Email address</label>
    <input type="email" id="inputEmail" name="id" class="form-control" placeholder="Email address" required>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    <p class="mt-5 mb-3 text-muted">@ Satria Nugraha</p>
  </form>
</main>



  </body>
</html>
