<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Burger™ – Lafka Burger</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./image/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/about.css">
</head>

<body>
  <header>
    <?php
    include './components/menu.php';
    include './components/menu_box.php';
    ?>

    <div class="hero-content">
      <h5 class="hero-content_breadcrumb">
        HOME / ABOUT BURGERS
      </h5>
      <h1 class="hero-content_title">ABOUT BURGERS</h1>
      <p class="hero-content_text">
        Serving up lovingly crafted from scratch Pizza, Pasta, Sandwiches, Salads and
        much more, made to order and delivered fast to our North Side neighbors for lunch, dinner and late night.
      </p>
    </div>
  </header>


  <!-------------------------------------------------------------Burger Quality---------------------------------------------------------------------------->


  <section id="about_quality">
    <div class="about_content_heading">
      <h4 class="about_category_heading">
        We only use the highest quality ingredients.
        <br>
        The result is a taste you can swear by.
      </h4>
      <p class="about_burger-content">
        Spicy jalapeno bacon ipsum dolor amet jowl brisket
        burgdoggen, meatball bresaola bacon boudin tri-tip pig pork fatback pork chop prosciutto short ribs pork
        belly.
        Ham boudin rump strip steak, porchetta drumstick picanha spare ribs sausage. Tongue ham hock turkey kevin ham
        short loin tenderloin beef ribs shank turducken chicken.
        Shankle ham boudin porchetta, corned beef ribeye strip steak pork chop.</p>
    </div>
    <div class="about_burger_image">
      <img src="./image/sandwich-board.png" alt="">
    </div>
    </div>
  </section>


  <!----------------------------------------------------------------Food Description--------------------------------------------------------------->

  <section id="about_signature">
    <div class="about_content_heading">
      <div class="about_category_heading">
        <h4 style="color:#fff;font-size: 2.5rem;font-weight: 200;text-align: center;">We make real food by hand, fresh
          to order.
          <br>
          It’s not the fastest way – it’s the right way.
        </h4>

        <p class="about_burger-content">
          Spicy jalapeno bacon
          ipsum dolor amet jowl brisket burgdoggen, meatball bresaola bacon boudin tri-tip pig pork fatback pork chop
          prosciutto short ribs pork belly. Ham boudin rump strip steak, porchetta drumstick picanha spare ribs sausage.
        </p>
      </div>
      <div style="text-align:center;">
        <img src="./image/burgers/signature-white-130x60.png" alt="">
      </div>
    </div>
  </section>



  <!---------------------------------------------------------------------Awards--------------------------------------------------------------------------->



  <section style="margin-bottom: 8rem;">
    <div class="awards">
      <div class="awards_heading">
        <h2 style="color:black;font-size:4.5em;font-weight: 200;padding:8rem 0rem 0rem 0rem;text-align: center;">Press &
          Awards
        </h2>
        <p class="about_burger-content">
          Spicy
          jalapeno bacon ipsum dolor amet jowl brisket burgdoggen, meatball bresaola bacon boudin tri-tip pig pork
          fatback pork chop prosciutto short ribs pork belly. Ham boudin rump strip steak, porchetta drumstick.</p>
      </div>
    </div>

    <div class="blog_heading">
      <div class="blog_category_heading">
        <div class="category_fries" style="text-align:center;">
          <img src="./image/awards-red-600x164.jpg" alt="" id="award_image">
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------Footer---------------------------------------------------------------------->

  <?php
  include './components/footer.php';
  ?>
</body>

</html>