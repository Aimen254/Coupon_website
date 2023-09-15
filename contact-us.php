<?php
include "include/header.php";
include "include/connection.php";

?>
<br>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
     <title>Send Email</title>
    </head>
    <body>
<div id="contact-us">
    <div class="container"style="background-color: white; border:1px solid black; ">
        <h1>Contact Us</h1>
        <div class="content-box">
          <div class="box-holder">
            <div class="blog">
              <div class="text-box">
            <form action="send.php" class="submit-form contact_form" id="cntctfrm_contact_form" form-type="contact_form" method="post" accept-charset="utf-8">
                                                                 <input type="hidden" name="_token" value="62bf15ff70862b439b2632b311b7e940" />
                <div class="response-box"></div>
                <!-- <div><label for="name">Name:</label></div>
                <div><input class="text" type="text" size="40" name="name" id="name"></div> -->

                <div><label for="email">Email Address:</label></div>
                <div><input class="text" type="text" size="40" name="email" id="email"></div>
                
                <div><label for="subject">Subject: <span class="required">*</span></label></div>
                <div><input class="text" type="text" size="40" name="subject" id="subject"></div>

                <div><label for="message">Message: <span class="required">*</span></label></div>
                <div><textarea name="message" id="message"></textarea></div>
                
                <div><input type="submit" name="submit" class="btn-submit1" value="Submit"></div>
            </form>        </div>
            </div>
          </div>
        </div>
    </div>
</div>
    </body>
    </html>

<?php
include("include/footer.php");?>