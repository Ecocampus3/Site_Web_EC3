<?php 
ini_set("display_errors",1);error_reporting(0); 
$nom=$_POST['field1'];
$add_mail_new=$_POST['field2'];
$tel=$_POST['field3'];
$message=$_POST['field4'];
$nom_crea=$_POST['nom'];
$prenom_crea=$_POST['prenom'];
$mail_crea=$_POST['mail'];
date_default_timezone_set('Etc/UTC');
require 'repertoire_mail/PHPMailer-master/PHPMailerAutoload.php';
function send_email($add_mail,$message,$nom,$tel){

            //envoi du mail
            $headers ='From: "Portfolio"<'.$add_mail.'>'."\n";
            $headers .='Reply-To: '.'ecocampus3@utt.fr.'."\n";
            $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
            $headers .='Content-Transfer-Encoding: 8bit';
 
            $message =$nom." vous a envoye un message:\r\n".$message."\r\n"."Son adresse mail est: ".$add_mail."\r\n"."Son numéro de téléphone est: ".$tel;
 
            $mail = mail('ecocampus3@utt.fr', 'Portfolio', $message, $headers); 
 
}
function send_email_crea($add_mail,$message,$nom){

            //envoi du mail
            $headers ='From: "Portfolio"<'.$add_mail.'>'."\n";
            $headers .='Reply-To: '.'ecocampus3@utt.fr.'."\n";
            $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
            $headers .='Content-Transfer-Encoding: 8bit';
 
            $message =$nom." vous a envoye un message:\r\n".$message."\r\n"."Son adresse mail est: ".$add_mail."\r\n";
 
            $mail = mail('kvn.wernet@gmail.com', 'Portfolio', $message, $headers); 
 
}
if (!empty($_POST['connexion']))
{

} 
if (!empty($_POST['creation'])){
	send_email_crea($mail_crea,$message,$nom_crea);
}

if (!empty($_POST["mail"]))
{
		send_email($add_mail_new,$message,$nom,$tel);

}
/*if (!empty($_POST['field1']) && !empty($_POST['field2']) && !empty($_POST['field3']) && !empty($_POST['field4']) ){

        send_email($add_mail_new,$message,$nom,$tel);
}*/

include_once('view/v_connexion.php');
?>