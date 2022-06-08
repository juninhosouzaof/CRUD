<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRODUTO - IMAGEM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <header>
        <h1>Cadastro de Produtos</h1>
        </header>

<nav>
    <a href="formadd.php">Incluir dados</a> | <a href="consulta.php"> Consultar dados </a> | <a href="editarproduto.php"> Editar Dados</a> | <a href="busca_del.php" >Deletar dados</a> <p>
</nav>

        <section>
            <form action ="prosutoImagem.php" method="POST">

                <table>
                    <tr>    
                        <td><label id="nome">Nome</label></td>
                        <td><label type="text" name="nomeProduto">Produto</label></td>
                    </tr>

                    <tr>    
                        <td><label id="image">image</label></td>
                        <td><label type="file" name="imagem">Produto</label></td>
                    </tr>

                    <tr>
                        <td><button type="submit"> Cadastrar</button></td>
                    </tr>
                </table>
            </form>
        </section>
</body>
</html>