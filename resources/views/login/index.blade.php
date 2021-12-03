<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Início</title>
</head>
<body>
    <div id="loginContainer">
        <span id="title">Login</span>
		<input type="text" placeholder="Email"/>
		<input type="password" placeholder="Senha"/>
        <a href="/home">
            <button id="enterAccButton" onclick="handleSignIn()">ENTRAR</button>
        </a>
        <a href="/">
            <span id="goBack">Voltar</span>
        </a>
	</div>

</body>
</html>

