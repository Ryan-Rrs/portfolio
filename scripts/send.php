<?php

    $name = addcslashes($_POST['name']);
    $email = addcslashes($_POST['email']);
    $tel = addcslashes($_POST['tel']);
    $text = addcslashes($_POST['text']);

    $to = "ryan.obmep@gmail.com";
    $about = "VIM PELO PORTIFÓLIO";

    $body = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone de Contato: "."\n\n".$text;

    $header = "From: ryan.estudos100@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$about,$body,$header)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o e-mail!")
    }
?>