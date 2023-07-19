<?php
/*$emaildestinatario=$_POST['para'];
$assunto= $_POST['assunto'];
$mensagemHTML=$_POST['msg'];
$headers=$_POST['nome'];
$emailsender=$_POST['email'];*/

    // Dados de envio e da mensagem
     
    $nome_remetente =$_POST['nome'];   
    $assunto = $_POST['assunto'];
    $email_remetente = $_POST['email'];
    $email_destinatario = $_POST['para'];
    $fone = $_POST['fone'];
    // Conteudo do e-mail (você poderá usar HTML)
    $mensagem = $_POST['msg'];
    $mensagem = $mensagem."<br>".$fone;
   
    // Cabeçalho do e-mail. Não é necessário alterar geralmente...
    $cabecalho =    "MIME-Version: 1.0\r\n";
    $cabecalho .=   "Content-type: text/html; charset=iso-8859-1"."\r\n";
    $cabecalho .=   "From: \"{$nome_remetente}\" <{$email_remetente}>\n";
    // Dispara e-mail e retorna status para variável
    $status_envio = mail ($email_destinatario, $assunto, nl2br($mensagem), $cabecalho);
   // echo $email_destinatario, $assunto, $mensagem, $cabecalho;
    // Se mensagem foi enviada pelo servidor…
    if ($status_envio)
    {
        echo "Mensagem enviada! entraremos em contato em breve";
        sleep(5);
      //  header("Location: index.php");
        header("Location:index.php",10);
        
    }
    // Se mensagem não foi enviada pelo servidor…
    else
    {
        echo "Mensagem não enviada!";
        // sleep(5);
      header("Location:index.php",10);
    }












/*if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );

echo $emaildestinatario,"<br>";
echo $assunto,"<br>";
echo $mensagemHTML,"<br>";
echo $headers,"<br>";
echo $emailsender,"<br>";
header ("Location: index.php");
}*/
?>
