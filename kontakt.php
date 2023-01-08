<?php 
      require("templates/header.php");
?>


    <!-- OFFER SECTION -->
    <!-- <link rel="stylesheet" href="kontakt.css"> -->
    <div class="form-container">
        <form class="form" id="form1">
            <!-- form fields go here -->
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
    </div>

<?php
    require("templates/tail.php");
  ?>
