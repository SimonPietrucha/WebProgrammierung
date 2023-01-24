<?php
	// Check ob Anfrage vorliegt
	if(isset($_POST['message'])){
		/* JSON String dekodieren zu einem PHP Objekt */
		$data = json_decode($_POST['message']);

		/* Erneuter Check nach leeren Feldern; Front-End Check ist unzureichend */
		foreach ($data as $value) {
			if(empty(trim($value))){
				/* bei leerem Feld Nachricht an js Datei senden */
				echo "Error: All fields are required";
				exit();
			}
		}

		$firstname =  $data->name; 
		$email =  $data->email;
		$message = $data->message;
		/* Email Validation-Check */
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			/* wenn Email falsch ist, server Antwort mit Error Nachricht */
			echo "Error: Please enter a valid email";
			exit();
		}

		/* Ab diesem Punkt: Daten sicher korrekt */
		
		// Empfänger Adresse
		$to = "MartinSimonWP@gmail.com";
		
		/* subject hinzufügen */
		$subject = $firstname . " has a question for you";
		/* Setzen von Basic header */
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		/* from header; Sender Adresse setzen */
		$headers .= 'From: '. $email . "\r\n";
		$send = mail($to,$subject,$message, $headers);
		/* mail() Funktion erfolgreich? */
		if(!$send){
			echo "Εrror: Message not send. Please try again";
		}else{
			echo "Message was send successfully";
		}
	}
