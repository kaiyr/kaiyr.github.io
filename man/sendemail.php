<?php
if(!empty($_POST)){
      require_once('phpmailer/PHPMailerAutoload.php');
      $mail = new PHPMailer;
      $mail->CharSet = 'utf-8';

      $fio = $_POST['name'];
      $date = $_POST['mail'];
      $phone = $_POST['phone'];
      //$address = $_POST['address'];
      //$nation = $_POST['nation'];
      //$familyStatus = $_POST['familyStatus'];
      //$education = $_POST['education'];
      //$expirience = $_POST['expirience'];
      //$languages = $_POST['languages'];
      //$skills = $_POST['skills'];
      //$qualities = $_POST['qualities'];
      //$goal = $_POST['goal'];
      //$post = $_POST['post'];
      if(is_null($_POST['fastSearch']) == true) 
      {
          $fastSearch = "false";
      }
      else{
        $fastSearch = "true";
      }

      if($_POST['VIPSearch'] == true) 
      {
          $VIPSearch = "true";
      }
      else
      {
          $VIPSearch = "false";
      }

      $mail->SMTPDebug = 0;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
	  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	  $mail->SMTPAuth = true;                               // Enable SMTP authentication
	  $mail->Username = 'ekebedu@gmail.com';                 // SMTP username
	  $mail->Password = 'ekeb2020';                           // SMTP password
	  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	  $mail->Port = 587;                                    // TCP port to connect to
    
      $mail->setFrom('ekebedu@gmail.com');
	  $mail->addAddress('ekebedu@gmail.com');     // Add a recipient
	  //$mail->addAddress('ellen@example.com');               // Name is optional
 	  //$mail->addReplyTo('info@example.com', 'Information');
	  //$mail->addCC('cc@example.com');
	  //$mail->addBCC('bcc@example.com');

	  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	  $mail->addAttachment($_FIlES['file']['tmp_name'], $_FIlES['file']['name']);    // Optional name
	  $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = 'Документы для Колледжа';
	  $mail->Body    = 'ФИО: ' .$name. '<br>Дата рождения: ' .$mail. '<br>Номер телефона: ' .$phone;
	  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>

if(!empty($_POST)){
      require_once('phpmailer/PHPMailerAutoload.php');
      $mail = new PHPMailer;
      $mail->CharSet = 'utf-8';

      $fio = $_POST['name'];
      $date = $_POST['mail'];
      $phone = $_POST['phone'];
      //$address = $_POST['address'];
      //$nation = $_POST['nation'];
      //$familyStatus = $_POST['familyStatus'];
      //$education = $_POST['education'];
      //$expirience = $_POST['expirience'];
      //$languages = $_POST['languages'];
      //$skills = $_POST['skills'];
      //$qualities = $_POST['qualities'];
      //$goal = $_POST['goal'];
      //$post = $_POST['post'];
      if(is_null($_POST['fastSearch']) == true) 
      {
          $fastSearch = "false";
      }
      else{
        $fastSearch = "true";
      }

      if($_POST['VIPSearch'] == true) 
      {
          $VIPSearch = "true";
      }
      else
      {
          $VIPSearch = "false";
      }

      $mail->SMTPDebug = 0;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';                                               // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'ekebedu@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
      $mail->Password = 'ekeb2020'; // Ваш пароль от почты с которой будут отправляться письма
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров
    
      $mail->SMTPSecure = false;
      $mail->SMTPAutoTLS = false;
    
      $mail->setFrom('ekebedu@gmail.com'); // от кого будет уходить письмо?
      $mail->addAddress('ekebedu@gmail.com');     // Кому будет уходить письмо 
      //$mail->addAddress('ellen@example.com');               // Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');
      //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      $mail->addAttachment($_FIlES['file']['tmp_name'], $_FIlES['file']['name']);    // Optional name
      $mail->isHTML(true);                     // Set email format to HTML

      $mail->Subject = 'Документы для Колледжа';
      $mail->Body    = 'ФИО: ' .$name. '<br>Дата рождения: ' .$mail. '<br>Номер телефона: ' .$phone;
      $mail->AltBody = '';

      if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}

}