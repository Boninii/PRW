<?php
    include('conexao.php');   
    
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda WHERE id_agenda ='.$id_agenda;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar a Agenda</title>
    </head>
    <body>
        <form method="post" action="altera_agenda_exe.php">
            <h2>Alteração na Agenda</h2>
            <div>
                Nome: <input type="text" name="nome" maxlength="50" value="<?php echo $row['nome'] ?>">
            </div>
            <div>
                Apelido: <input type="text" name="apelido" maxlength="50" value="<?php echo $row['apelido'] ?>">
            </div>
            <div>
                Endereço: <input type="text" name="endereco" maxlength="50" value="<?php echo $row['endereco'] ?>">
            </div>
            <div>
                Bairro: <input type="text" name="bairro" maxlength="50" value="<?php echo $row['bairro'] ?>">
            </div>
            <div>
                Cidade: <input type="text" name="cidade" maxlength="50" value="<?php echo $row['cidade'] ?>">
            </div>
            <div>
                Estado: <input type="text" name="estado" maxlength="50" value="<?php echo $row['estado'] ?>">
            </div>
            <div>
                Telefone: <input type="text" name="telefone" maxlength="30" value="<?php echo $row['telefone'] ?>">
            </div>
            <div>
                Celular: <input type="text" name="celular" maxlength="30" value="<?php echo $row['celular'] ?>">
            </div>
            <div>
                E-mail: <input type="email" name="email" maxlength="50" value="<?php echo $row['email'] ?>">
            </div>
            <input type="submit" value="Enviar!">
            <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
        </form>
    </body>
</html>
