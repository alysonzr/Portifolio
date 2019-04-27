<?php

if(isset($_POST['email']) && !empty($_POST['email']){
	$nome = addslashes($_POST['name']);
	$email = addslashes($_POST['email']);
	$mensagem = addslashes($_POST['mensagem']);
	
		
	$to = "alyson.zancanaro@hotmail.com";
	$subjet = "Contato Portifolio";
	$body = "Nome: ".$nome. "\r\n".
			"Email: ".$email. "\r\n".
			"Mensagem: ".$mensagem;
	
	$header = "From:alyson.zancanaro@hotmail.com"."\r\n"."Reply-To".$email."\e\n"."X=Mailer:PHP/".phpversion();
	
	if(mail($to,$subjet,$body,$header)){
		$echo("Email enviado com sucesso!");
			
	}else{
		$echo("Email nao pode ser enviado");
	}
				
}
 ?>