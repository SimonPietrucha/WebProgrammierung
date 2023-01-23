<?php 
      require("templates/header.php");
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">


<!-- I need a container to host my contact form, also this container will act
	as a css grid with two sections -->
	<div class="contact-section">
		<!-- In the first section we will have the contact-info -->
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

		<!-- In the second section we will have our contact form -->
		<form name="contact-form" action="" method="post" autocomplete="off">
			<!-- Every input field will have his own container. -->
			<div class="block">
				<i class="fas fa-user"></i>
				<input type="text" name="firstname" placeholder="Vorname">
			</div>

			<div class="block">
				<i class="fas fa-envelope"></i>
				<input type="text" name="email" placeholder="E-Mail">
			</div>

            <!-- In home.css Zeile 283-292 und 534-537 auskommentieren!! -->
			
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

	<script src="kontakt.js"></script><!-- link to the javascript file -->


<?php
    require("templates/tail.php");
  ?>
