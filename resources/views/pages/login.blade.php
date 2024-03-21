<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <header>
        <h1>Peencha os campos abaixo:</h1>
    </header>
    <div id="form">
        <form action="">

            <section class="pt1">
                <h2 for="username">Nome:</h2>
            <div class="input">
                <input id="username" name="username" placeholder="..." type="text">
            </div>
            </section>

            <section class="pt2">
                <h4 for="email">Email:</h4>
            <div class="input">
                <input id="email" name="email"  placeholder="..." type="text">
            </div>
            </section>

            <section class="pt3">
                <h5 for="senha">Senha:</h5>
            <div class="input">
                <input id="password" name="password" placeholder="..." type="password">
            </div>
            </section>

        </form>
    </div>
    <article>
        <button class="card">
            <a href="/erro"><p>Entrar agora</p></a>
        </button>
    </article>
</body>
</html>
