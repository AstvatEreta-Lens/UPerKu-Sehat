<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="wrapper">
            <div class="login-cont">


                <form action="" method="post">
                    @csrf
                    <div class="logo">
                        <img src="/img/logouperku1.png" alt="">
                        <!-- <span><h2>White Gate</h2></span> -->
                    </div>
                    <!-- <h3>Login</h3> -->
                    <div class="input-cont">
                        <div class="cont-email">
                            <span class="icon">
                                <ion-icon name="mail"></ion-icon>
                            </span>
                            <input type="email" name="email" value="{{old('email')}}">
                            <label for="email">Email</label>
                        </div>
                       
                    </div>
                    <div class="input-cont">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" name="password" value="{{old('password')}}">
                        <label for="password">Password</label>
                    </div>
                    <div class="remember-forget">
                        <label for="remember-forget"><input type="checkbox" name="forget">Remember me</label>
                        <a href="#">Forgot Password</a>
                    </div>
                    
                    <button type="submit">Login</button>

                    @if($errors -> any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $item)
                          
                                <li>{{$item}}</li>
                     
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- <div class="register">
                        <p>Don't have an account?<a href=""> Register</a></p>
                    </div> -->
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>