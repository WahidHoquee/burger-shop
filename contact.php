<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts– Lafka Burger</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./image/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/contact.css">
</head>

<body>
  <header>
    <?php
    include './components/menu.php';
    include './components/menu_box.php';
    ?>
    <div class="hero-content">
      <h5 class="hero-content_breadcrumb">
        HOME / CONTACTS
      </h5>
      <h1 class="hero-content_title">CONTACTS</h1>

    </div>
  </header>
  <Section id="burger_contact">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <h1 class="address">Head Office</h1>
          <p style="color:#888;font-size:20px;padding:5px 10px 5px 10px;">For more information regarding your shopping experience or current promotions:</p>
          <p style="color:#22272d; font-size:19px; padding:5px 10px 5px 10px; line-height: 2.5rem">House#1143, Road#34
            <br>
            Kachukhet, Dhaka - 1206
            <br>
            +8801776 - 255895
          </p>
        </div>

        <div class="col-7">
          <div class="body container">
            <form id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <div style="padding: 3rem 0;">
                <h2 class="primary-heading" style="color: #333;">
                  <strong style="color: #ca0930;">Something</strong> on your mind?
                </h2>
                <h4 class="secondary-heading" style="color: #333;">
                  Fill out the form below and <strong>Burger™</strong> will get back to you sometime soon. </p>
                </h4>
              </div>
              <fieldset>
                <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
              </fieldset>
              <fieldset>
                <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
              </fieldset>
              <fieldset>
                <input placeholder="Your Phone Number" name="phone" type="tel" tabindex="3" required>
              </fieldset>
              <fieldset>
                <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
              </fieldset>
              <fieldset>
                <input name="submit" type="submit" id="contact-submit" data-submit="...Sending" value="Submit">
              </fieldset>
            </form>
            <?php
            if (isset($_POST["submit"])) {

              $name = $_POST["name"];
              $email = $_POST["email"];
              $phone = $_POST["phone"];
              $message = $_POST["message"];

              $servername = "localhost";
              $username = "id14803795_sumona";
              $password = '8kjKCLT]v$R!H)+V';
              $dbname = "id14803795_lafka_burger";

              //! Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);

              $sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name','$email','$phone','$message')";
              if ($conn->query($sql) === TRUE) {
                echo "Table Students created successfully";
              } 
              else {
                echo "Error creating table: " . $conn->error;
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </Section>
  <!---------------------------------------------------------------------Footer--------------------------------------------------------------->
  <?php
  include './components/footer.php';
  ?>
</body>

</html>