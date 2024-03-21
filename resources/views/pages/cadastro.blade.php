<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
</head>
<body>
    <header>
        <h1>Peencha os campos abaixo:</h1>
    </header>
    <div id="form">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <section class="pt1">
                <h2 for="name">Nome:</h2>
            <div class="input">
                <input id="name" name="name" placeholder="..." type="text">
            </div>
            </section>

            <section class="pt2">
                <h3 for="cpf">CPF:</h3>
            <div class="input">
                <input id="cpf" name="cpf" placeholder="..." type="text">
            </div>
            </section>

            <section class="pt3">
                <h4 for="email">Email:</h4>
            <div class="input">
                <input id="email" name="email"  placeholder="..." type="text">
            </div>
            </section>

            <section class="pt4">
                <h5 for="senha">Senha:</h5>
            <div class="input">
                <input id="password" name="password" placeholder="..." type="password">
            </div>
            </section>
            <button class="card" type="submit">
                Registrar-se
            </button>
        </form>
    </div>
</body>
</html>
