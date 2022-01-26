<?php include("./partials/navbar.php");

?>

<!-- contact us page content -->
<section>
  <div class="contact-us-page-content">
    <div class="contact-us-page-content-one">
      <div class="contact-us-page-content-one-div1">
        <h2>FOR ANY CONCERN</h2>
        <p>
          Contact us through various mode of communication We are always
          here for you, ready to serve, and an approach away.
        </p>
      </div>
      <div class="contact-us-page-content-one-div2">
        <img src="https://img.icons8.com/external-tulpahn-outline-color-tulpahn/400/000000/external-customer-service-online-shopping-tulpahn-outline-color-tulpahn.png" />
      </div>
    </div>
    <div class="contact-us-page-contact-form">
      <h2>
        Contact Form <br /><span>Fil this form to send us message or your concern's.</span>
      </h2>

      <form id="myform" name="myform" method="POST">
        <label>Name</label>
        <input type="text" name="name" id="name" required placeholder="eg. suyog kulkarni" />
        <label>E-mail</label>
        <input type="email" name="email" id="email" required placeholder="eg.example@gmail.com" />
        <label>Subject</label>
        <input type="text" name="subject" id="subject" required placeholder="eg. regarding website" />
        <label>Message</label>
        <textarea name="body" id="body" cols="30" rows="5" required placeholder="eg. Hey loved your work. This website is amazing!!!!!"></textarea>
        <button type="submit">Send</button>
      </form>
    </div>
    <div class="contact-us-page-content-two">
      <p>
        Looking for something else? Talk to our developer today about our
        service, tutorials, website or anything else, our developer is ready
        to answer all of your questions.
      </p>
      <div class="contact-us-page-content-two-div1">
        <h2>PING HIM HERE</h2>
        <a href="mailto:kulkarnisuyog3@gmail.com" target="_blank">HERE !!!</a>
      </div>
    </div>
  </div>
</section>

<?php include("./partials/contact-footer.php");

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['body'];
  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

  //SMTP Settings
  $mail->isSMTP();
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPAuth = true;
  $mail->Username = "contactusforhelp37@gmail.com";
  $mail->Password = '94239064612';
  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  //Email Settings
  $mail->isHTML(true);
  $mail->setFrom("$email", "$name");
  $mail->addReplyTo("$email");
  $mail->addAddress("contactusforhelp37@gmail.com");
  $mail->Subject = $subject;
  $mail->Body = $body;
  $mail->Mailedby = $email;

  if ($mail->send()) {
    echo "<script>alert('Message successfully sent.');</script>";
  } else {
    echo "<script>alert('failed to send the message.');</script>" . $mail->ErrorInfo;
  }
  exit();
}
?>