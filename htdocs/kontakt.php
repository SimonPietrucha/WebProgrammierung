<?php 
      require("templates/header.php");
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


<!--Container zum Kontaktformular; 2 Sektionen (auch für CSS) -->
	<div class="contact-section">
		<div class="contact-info">
			<h3>Stelle uns eine Frage</h3>
			<p class="text">
                Vielen Dank für Ihr Interesse an unserem Unternehmen. Wir freuen uns darauf, von Ihnen zu hören. Bitte füllen Sie das Formular aus, um uns Ihre Anfrage zukommen zu lassen.
			</p>
			<p class="text">
                Stellen Sie sicher, dass alle erforderlichen Felder ausgefüllt sind, damit wir Ihre Anfrage schnell und effektiv bearbeiten können.
			</p>
			<img src="https://t4.ftcdn.net/jpg/02/98/41/23/240_F_298412362_ZNN72WoRPzM2xvGXkEv1A9hdqgBGdB62.jpg" alt="">
		</div>

		<form name="contact-form" action="" method="post" autocomplete="off">
			<!-- Jedes Eingabefeld hat seinen eigenen Container -->
			<div class="block">
				<i class="fas fa-user"></i>
				<input type="text" name="firstname" placeholder="Vorname">
			</div>
			<div class="block">
				<i class="fas fa-envelope"></i>
				<input type="text" name="email" placeholder="E-Mail">
			</div>
			<div class="block">
				<i class="fas fa-comment-alt"></i>
				<textarea name="message" placeholder="Schreibe deine Nachricht"></textarea>
			</div>

			<button type="submit">Senden <i class="fas fa-paper-plane"></i></button>

			<p class="please-wait"></p>
			<p class="error"></p>
			<p class="success"></p>
		</form>
	</div>

	<script src="kontakt.js"></script>


<?php
    require("templates/tail.php");
  ?>
