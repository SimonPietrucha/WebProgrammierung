<?php 
      require("templates/header.php");
?>

    <!-- OFFER SECTION -->
    <!-- <link rel="stylesheet" href="kontakt.css"> -->
    <!-- <section class="container section-3"> -->


    <!-- <div class="form-container">
        <form class="form" id="form1" onsubmit="sendEmail(); reset(); return false;">
            <div id="form-div">
        
                <p class="name">
                    <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
                </p>
                
                <p class="email">
                    <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                </p>
                
                <p class="text">
                    <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
                </p>
                
                
                <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                </div>
            </div>    
        </form>
    </div> -->

    <div class="form-container">
        <form class="form" id="form1" onsubmit="sendEmail(); reset(); return false;">
            <div id="form-div">
        
                <p class="name">
                    <input type="text" id="name" placeholder="Dein Name" required>
                </p>
                
                <p class="email">
                    <input type="email" id="email" placeholder="Email Adresse" required>
                </p>
                
                <p class="text">
                <textarea id="message" rows="4" placeholder="Wie können wir dir helfen?"></textarea>
                </p>
                
                
                <div class="submit">
                    <input type="submit" value="SEND" id="button-blue"/>
                    <div class="ease"></div>
                </div>
            </div>    
        </form>
    </div>

    <!-- <div class="container">
        <form>
            <h3>Kontakt</h3>
            <input type="text" id="name" placeholder="Dein Name" required>
            <input type="email" id="email" placeholder="Email Adresse" required>
            <input type="text" id="phone" placeholder="Telefon-Nummer" required>
            <textarea id="message" rows="4" placeholder="Wie können wir dir helfen?"></textarea>
            <button type="submit">Senden</button>
        </form>
    </div> -->

    <script https://smtpjs.com/v3/smtp.js></script>
    <script>
        function sendEmail(){
            Email.send({
                Host : "smtp.elasticemail.com",
                Username : "username",
                Password : "password",
                To : 'them@website.com',
                From : "you@isp.com",
                Subject : "This is the subject",
                Body : "And this is the body"
            }).then(
            message => alert(message)
            );
        }
    </script>


<?php
    require("templates/tail.php");
  ?>