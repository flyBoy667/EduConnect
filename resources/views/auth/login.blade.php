<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Css/Home.css') }}">
    <title>Login</title>
</head>
<body>
<div class='home'>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <div class='img-container'>
        <img src="{{ asset('Img/logo-off.png') }}" alt="Logo du site" class="logo-front">
    </div>
    <div class='box'>
        <div class='box-form'>
            <div class='box-login-tab'></div>
            <div class='box-login-title'>
                <div class='i i-login'></div>
                <h2>LOGIN</h2>
            </div>
            <div class='box-login'>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class='fieldset-body' id='login_form'>
                        <button type="button" class='b b-form i i-more' title='Mais Informações'></button>

                        <!-- Affichage des erreurs de validation -->
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <p class='field'>
                            <label for='user'>IDENTIFIANT</label>
                            <input type='text' id='login' name='login' title='Username' value="{{ old('login') }}" required>
                            <span id='valida' class='i i-warning'></span>
                        </p>
                        <p class='field'>
                            <label for='pass'>MOT DE PASSE</label>
                            <input type='password' id='pass' name='password' title='Password' required>
                            <span id='valida' class='i i-close'></span>
                        </p>
                        <input type='submit' id='do_login' value='SE CONNECTER' title='Get Started'>
                    </div>
                </form>
            </div>
        </div>
        <div class='box-info'>
            <p><button type="button" class='b b-info i i-left' title='Back to Sign In'></button>
            <h3>Need Help?</h3></p>
            <div class='line-wh'></div>
            <button class='b-support' title='Forgot Password?'> Forgot Password?</button>
            <button class='b-support' title='Contact Support'> Contact Support</button>
            <div class='line-wh'></div>
            <button class='b-cta' title='Sign up now!'> CREATE ACCOUNT</button>
        </div>
    </div>
</div>
</body>
</html>
