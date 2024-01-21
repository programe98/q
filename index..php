<?php
$nome = $_POST['nome'];
$sobrenome = $_post['sobrenome'];
$idade = $_post['idade'];
$masculino = $_post['masculino'];
$feminino = $_post['feminino'];
$outros = $_post['outros']
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');


$arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>idade: </b>$idade</p>
      <p><b>masculino: </b>$masculino</p>
      <p><b>feminino: </b>$femino</p>
      <p><b>outros: </b>$ouros</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";

    //Emails para quem será enviado o formulário
    $destino = "telmamariaxp373@gmail.com";
    $assunto = "Contato pelo Site";

     //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  
  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";

?>