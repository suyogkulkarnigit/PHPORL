  <section>
      <div class="footer-container">
          <div class="address-info-footer">
              <div class="social-media-links">
                  <h3>Social Media</h3>
                  <a href="https://www.instagram.com/suyoggggg/" target="_blank">
                      <img src="https://img.icons8.com/ios/40/000000/instagram-new.png" />
                  </a>
                  <a href="mailto:kulkarnisuyog3@gmail.com" target="_blank">
                      <img src="https://img.icons8.com/ios/40/000000/gmail-new.png" />
                  </a>
                  <a href="https://github.com/suyog3235" target="_blank">
                      <img src="https://img.icons8.com/ios-filled/40/000000/github.png" />
                  </a>
                  <h4>Click On the Icons Above to get our social media accounts.</h4>
              </div>
          </div>
          <div class="contact-footer">
              <div class="contact-footer-margin">
                  <h3>want to contact ?</h3>
                  <a href="/orl/contactus.php" target="_blank">
                      <img src="https://img.icons8.com/ios/50/000000/apple-mail.png" /></a>
                  <h4>Click On the Icon Above To Get Our Contact Information.</h4>
              </div>
          </div>
          <div class="footer-location">
              <div class="footer-location-margin">
                  <h3>Where we based ?</h3>
                  <a href="https://www.google.com/maps/place/Akurdi,+Pimpri-Chinchwad,+Maharashtra/@18.6440377,73.7627474,14z/data=!3m1!4b1!4m5!3m4!1s0x3bc2b9c02954e8cb:0x525d708de1d526f2!8m2!3d18.6504839!4d73.7785786" target="_blank">
                      <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/50/000000/external-location-contact-us-flatart-icons-outline-flatarticons.png" /></a>
                  <h4 style="font-size: 20px; font-weight: 700">
                      Akurdi, Pune 411033
                  </h4>
              </div>
          </div>
      </div>
      <div class="all-rigths-reserved-footer" style="width: 100%; ">
          <span>
              <img src="https://img.icons8.com/material-outlined/20/000000/copyright.png" /></span>
          <h3 style="color: black; padding: 1%;letter-spacing: 1px;">
              All Rights Reserved 2021-2022- Suyog kulkarni
          </h3>
      </div>
  </section>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script type="text/javascript">
      function sendEmail() {
          var name = $("#name");
          var email = $("#email");
          var subject = $("#subject");
          var body = $("#body");

          if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
              $.ajax({
                  url: 'PHPmailer/send-mail.php',
                  method: 'POST',
                  dataType: 'json',
                  data: {
                      name: name.val(),
                      email: email.val(),
                      subject: subject.val(),
                      body: body.val()
                  },
                  success: function(response) {
                      if (response.status == "success") {
                          alert('Email Has Been Sent!');
                          $('#myform')[0].reset();

                      } else {
                          alert('Please Try Again!');
                          console.log(response);
                      }
                  }
              });
          }
      }

      function isNotEmpty(caller) {
          if (caller.val() == "") {
              caller.css('border', '1px solid red');
              return false;
          } else
              caller.css('border', '');

          return true;
      }
  </script>


  </body>

  </html>