<!DOCTYPE html>

<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="logo-navbar">
            <a href="./index.html">
                <img src="../../Imagens/Logo/logoJoa.png" alt="" />
            </a>
        </div>
        <nav>
            <ul class="navbar">
                <li><a href="../../indexProd.html">SNEARKERS</a></li>
                <li><a href="#drops">DROPS</a></li>
                <li><a href="#">MARCAS</a></li>
            </ul>
        </nav>
        <div class="header-icon">
            <div class="divpesquisa">
                <input type="text" placeholder="   Pesquisar" class="pesquisa" />
            </div>
            <img src="../../Imagens/Icons/PesquisaWhite.png" alt="" />
            <img src="../../Imagens/Icons/shoppingbagWhite.png" alt="" />
            <a href="../user/user.php"><img src="../../Imagens/Icons/userWhite.png" alt="" /></a>
        </div>
    </header>
    <main>
        <div class="vazio">
            <!-- <img src="../../Imagens/Background/fundoLogin.png" alt=""> -->
        </div>
        <div class="efeito">
            <form class="conteudo" action="#" method="POST">
                <div class="titulos">
                    <h1>CRIE SUA CONTA</h1>
                    <p>E fique por dentro das novidades</p>
                </div>
                <div class="campos">
                    <input type="text" name="nome" placeholder="Digite seu nome" required>
                    <input type="text" name="email" placeholder="Digite seu email" required>
                    <input type="text" name="senha" placeholder="Digite seu senha" required>
                </div>
                <div class="enviar">
                    <button id="btn-enviar" type="submit">CRIAR</button>
                </div>
                <div class="login">
                    <p>Já possui conta?</p>
                    <a href="../login/login.php">Faça login</a>
                </div>
            </form>
        </div>

    </main>
</body>

</html>

<?php

    $nome = $_POST['nome'];
    print_r("$nome ola");

?>