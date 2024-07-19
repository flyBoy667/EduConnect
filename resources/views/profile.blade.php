<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
@auth
    <h1>Bienvenue sur votre profil</h1>
    <p>Vous êtes connecté en tant que {{ \Illuminate\Support\Facades\Auth::user()->email }}.</p>
@else
    <p>Vous devez être connecté pour accéder à cette page.</p>
@endauth
<p>Utilisateur authentifié : {{ \Illuminate\Support\Facades\Auth::check() ? 'Oui' : 'Non' }}</p>
<p>Utilisateur
    : {{ \Illuminate\Support\Facades\Auth::user() ? \Illuminate\Support\Facades\Auth::user()->prenom : 'Aucun' }}</p>
</body>
</html>
