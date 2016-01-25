   <?php
   ini_set("SMTP", "hotelbahosi.com");
   ini_set("smtp", "25");
//print($_SERVER['REQUEST_METHOD']);
   if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email_to = "inquiry@hotelbahosi.com";
    $name = $_POST['username'];
    $email_from = $_POST['useremail'];
    $email_subject ="Inquiry of Hotel Bahosi";
    $message = $_POST['usermessage'];
    $email_message = "Form details below.\n\n";
    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($email_subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
            //print($headers);
    if(@mail($email_to, $email_subject, $email_message, $headers))
        $successful = 'Thank you for your enquiry. We will contact you shortly.';
            //print($successful);
}
?>

<style type="text/css">
    #element_to_pop_up
    {
        min-width: 400px;
        max-width: 500px;
        background-color:rgba(255, 255, 255, 0.8);
        padding:1em;
        border-radius: 2px;
    }
    span.b-close
    {
        border-radius:6px;
        background-color: #9e2925;
        color: #fff;
        text-align: center;
        cursor: pointer;
        position: absolute;
        font-size: 1.2em;
        right: 1px;
        top:1px;
        width: 28px;
    }
    .b-close:hover {
        background-color: #fff;
        color:#9e2925;
        font-weight:bold;
    }
</style>

<div id="element_to_pop_up"><span class="b-close pull-right">X</span>

  <form role="form" method="post" action="">
    <div class="form-group">
      <label for="exampleInputName">Name</label>
      <input type="text" class="form-control" id="exampleInputName" name="username" placeholder="Enter Name">
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1">Email </label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="useremail" placeholder="Enter email">
  </div>
  <div class="form-group">
      <label for="exampleInputPassword1">Message</label>
      <textarea class="form-control" rows="4" name="usermessage" placeholder="Your Message"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>			
