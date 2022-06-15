<?php
    if(empty($_POST['chkBox'])){
        $_POST['chkBox'] = "Você não gosta do número um!";
    }
    if(empty($_POST['chkBox2'])){
        $_POST['chkBox2'] = "Você não gosta do número dois!";
    }
    if(empty($_POST['optBox'])){
        $_POST['optBox'] = "Nenhuma opção selecionada!";;
    }

    $text = $_POST['linha'];
    $textArea = $_POST['rolagem'];
    $optChk = $_POST['chkBOX1'];
    $optChk2 = $_POST['chkBOX2'];
    $optOpt = $_POST['optBox'];
    $selLegal = $_POST['selLegal'];

    if(empty($text)){
        $text = "Nada foi colocado aqui!";
    }
    if(empty($textArea)){
        $textArea = "Nada foi colocado aqui!";
    }
    if($selLegal == "Selecionar..."){
        $selLegal = "Você não selecionou nenhuma opção";
    }

    echo "Texto de uma linha que você colocou: ". $text. "<br>";
    echo "Texto que você colocou na caixa de texto: ". $textArea. "<br>";
    echo "Número: ". $optChk. "<br>";
    echo "Número: ". $optChk2. "<br>";  
    echo "Opção que você selecionou (homem, mulher ou sigma): ". $optOpt. "<br>"; 
    echo "Última paradinha de selecionar: ". $selLegal. "<br>"; 
?>