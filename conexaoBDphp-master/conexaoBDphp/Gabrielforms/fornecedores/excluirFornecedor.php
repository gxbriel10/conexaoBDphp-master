<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>EXCLUIR FORNECEDOR</title>
    <style>
        @media screen and (max-width: 1337px) {
    .form-img {
        display: none;
    }

    .container {
        width: 50%;
    }

    .form {
        width: 100%;
    }
}

@media screen and (max-width: 1064px) {
    .container {
        width: 90%;
        height: auto;
    }

    .input-group {
        flex-direction: column;
        overflow-y: scroll;
        flex-wrap: nowrap;
        max-height: 10rem;
        padding-right: 5rem;
    }

    .gender-inputs {
        margin-top: 2rem;
    }

    .gender-group{
        flex-direction: column;
    }

    .gender-input {
        margin-top: 0.5rem;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="form-img">
            <img src="../assets/img/undraw_throw_away_re_x60k.svg" >
        </div>
        <div class="form">

                <div class="form-header">
                    <div class="title">
                        <h1>EXCLUIR FORNECEDOR</h1>
                    </div>
                    <div class="login-button">
                        <button onclick="javascript:location.href ='consultaFornecedor.php';"><a href="#">VOLTAR</a></button>
                    </div>
                </div>
                <div class="input-group">
                <?php


                    $cod = $_GET['id'];
                    
                    include_once('../conexao.php');
                    
                        $select = $connection->prepare("SELECT * FROM tb_fornecedor where cd_fornecedor=$cod");
                        $select->execute();
                    
                        while($row = $select->fetch()) 
                        {
                            echo "<p>";
                            echo "<br><b>CÓDIGO: </b>".$row['cd_fornecedor'];
                            echo "<br><b>NOME: </b>".$row['nm_primeiro'];
                            echo "<br><b>SOBRENOME: </b>".$row['nm_sobrenome'];
                            echo "<br><b>CNPJ: </b>".$row['nr_cnpj'];
                            echo "<br><b>EMPRESA: </b>".$row['nm_empresa'];
                            echo "<br><b>TIPO PRODUTO: </b>".$row['tp_produto'];
                            echo "<br><b>CEP: </b>".$row['nr_cep'];
                            echo "<br><b>ENDEREÇO: </b>".$row['nr_endereco'];
                            echo "<br><b>PAÍS: </b>".$row['nm_pais'];
                            echo "<br><b>CELULAR: </b>".$row['nr_celular'];
                            echo "<br><b>EMAIL: </b>".$row['nm_email'];
                            echo "<br><b>GÊNERO: </b>".$row['id_genero'];
                            echo "</p>";
                ?>
                    <div class="login-button">
                    <button onclick="window.location.href='confirmarExcluirFornecedor.php?id=<?php echo $row['cd_fornecedor'];?>'">
                        Excluir
                    </button>
                    
                    </div>

                <?php
                        }
                ?>
                </div>


        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>