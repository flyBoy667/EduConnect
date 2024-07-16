<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class='home'>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    {/*
    <div class='welcome'>
        <h1 class='wel'>Bienvenue sur </h1>
    </div>
    */}
    <div class='img-container'>
        <img src="" alt="Logo du site" class="logo-front"/>
    </div>
    <div class='box'>
        <div class='box-form'>
            <div class='box-login-tab'></div>
            <div class='box-login-title'>
                <div class='i i-login'></div>
                <h2>LOGIN</h2>
            </div>
            <div class='box-login'>
                <div class='fieldset-body' id='login_form'>
                    <button onClick={openLoginInfo} class='b b-form i i-more' title='Mais Informações'></button>
                    <p class='field'>
                        <label for='user'>IDENTIFIANT</label>
                        <input type='text' id='user' name='user' title='Username'/>
                        <span id='valida' class='i i-warning'></span>
                    </p>
                    <p class='field'>
                        <label for='pass'>MOT DE PASSE</label>
                        <input type='password' id='pass' name='pass' title='Password'/>
                        <span id='valida' class='i i-close'></span>
                    </p>

                    <input type='submit' id='do_login' value='SE CONNECTER' title='Get Started'/>
                </div>
            </div>
        </div>
        <div class='box-info'>
            <p>
                <button onClick={closeLoginInfo} class='b b-info i i-left' title='Back to Sign In'></button>
            <h3>Need Help?</h3>
            </p>
            <div class='line-wh'></div>
            <button class='b-support' title='Forgot Password?'> Forgot Password?</button>
            <button class='b-support' title='Contact Support'> Contact Support</button>
            <div class='line-wh'></div>
            <button class='b-cta' title='Sign up now!'> CREATE ACCOUNT</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
