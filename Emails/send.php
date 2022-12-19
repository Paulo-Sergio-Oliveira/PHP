<?php
extract($_POST);
$dados = "$nome - $email - $telefone - $escolhas - $msg";
echo $dados;
$assunto = 'Teste de envio de E-mail via PHP';
if(mail('paulo.oliveira144@aluno.ce.gov.br',$assunto,$dados)){
    echo 'E-mail enviado';
}else{
    echo 'Erro ao enviar E-mail!';
}
?>