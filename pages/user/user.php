<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: ../login/login.html');
    };
    if(isset($_POST['sair']))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: ../login/login.html');
    }

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
    <link rel="stylesheet" href="./style.css">
</head>


<body>
    <header>
        <div class="logo-navbar">
            <a href="../../index.html">
                <p>logo</p>
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
            <img src="../../Imagens/Icons/PesquisaBlack.png" alt="" />
            <img src="../../Imagens/Icons/shoppingbagBlack.png" alt="" />
            <a href="../user/user.php"><img src="../../Imagens/Icons/userBlack.png" alt="" /></a>
        </div>
    </header>
    <main>
        <div class="menu">
            <div class="itens" id="itens">
                <h1 id="endereco" class="selecionar active">Meu endereço</h1>
                <h1 id="pedidos" class="selecionar">Meus pedidos</h1>
            </div>

        </div>
        <div class="endereco">
            <h1>Meu endereço</h1>
            <form class="conteudo" action="#" method="post">
                <div class="line-one">
                    <h3>Primeiro nome</h3>
                    <input type="text" name="first-name">
                    <h3>sobrenome</h3>
                    <input type="text" name="sobrenome">
                </div>
                <div class="line-two">
                    <h3>Numero de telefone</h3>
                    <input type="text" name="ddd-telefone">
                    <input type="text" name="telefone">
                </div>
                <div class="line-three">
                    <h3>endereço</h3>
                    <input type="text" name="endereco">
                </div>
                <div class="line-four">
                    <h3>Estado</h3>
                    <input type="text" name="estado" placeholder="Digite o estado">
                    <h3>Cidade</h3>
                    <input type="text" name="cidade" placeholder="Digite a cidade">
                </div>
                <div class="line-five">
                    <h3>Informaçoes adicionais</h3>
                    <input type="text" name="adicional">
                </div>
                <div class="btn">
                    <input name="sair" value="sair" type="submit">
                </div>
            </form>
        </div>
    </main>
    <script src="./app.js"></script>
</body>

</html>