<?php
    include('conexao.php');   
    
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario WHERE id_usuario ='.$id_usuario;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Teste - Aula</title>
    </head>
    <body>
        <form method="post" action="cadastro_usuario.php">
            <h2>Alteração de Usuário</h2>
            <div>
                Nome: <input type="text" name="textNome" maxlength="50" value="<?php echo $row['nome_usuario'] ?>">
            </div>
            <div>
                E-mail: <input type="email" name="email" maxlength="50" value="<?php echo $row['email_usuario'] ?>">
            </div>
            <div>
                Telefone: <input type="number" name="fone" maxlength="30" value="<?php echo $row['telefone_usuario'] ?>">
            </div>
            <input type="submit" value="Salvar!">
        </form>
    </body>
</html>
