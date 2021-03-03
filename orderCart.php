<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
  <title>My Order™ – Lafka Burger</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/orderCart.css">
</head>

<body>
  <header>
    <div class="burger-menu-wrapper">
      <?php
      include './components/menu.php';
      include './components/menu_box.php';
      ?>
      <div class="product">
        <ul class="product-categories">
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_Burger_653249.ico" alt="">
            Angus Burgers
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_Food_C206_2427852.png" alt="">
            STEAK BURGERS
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_Food_C203_2427849.png" alt="">
            EGGSY BURGERS
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_french_fries_44613.png" alt="">
            SIDES
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_cup-soft-drink-water-takeaway-fastfood-cola_4306496 (1).png" alt="" />
            DRINKS
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_Food_C228_2427887.png" alt="" />
            DESSERTS
          </li>
        </ul>
      </div>
    </div>
    <!-- </Replicate> -->
    <div class="burger-content-wrapper">
      <div class="hero-content">
        <h5 class="hero-content_breadcrumb">
          HOME / MY ORDER
        </h5>
        <h1 class="hero-content_title">MY ORDER</h1>
      </div>
    </div>
  </header>
  <Section id="order-cart">
    <!-- <div style="margin: 10rem auto; text-align: center">
      <p style="color: #777; font-size: 1.8rem; margin-bottom: 3rem"> Your cart is Currently Empty</p>
      <button class="button">RETURN TO SHOP</button>
    </div> -->
    <ul class="fav">
      <script>
        const orderCartContainer = document.querySelector('#order-cart ul.fav');
        const orderCart = JSON.parse(localStorage.getItem('order-cart'));
        for (var k = 0; k < orderCart.length; k++) {
          // Storing one of the product in a variable
          var product = orderCart[k];

          // Splitting the product price
          var price = product.price.split('.');

          orderCartContainer.insertAdjacentHTML('beforeend', `
              <li class="fav_list">
                <span class="fav_icon">
                  <i class="far fa-trash-alt"></i>
                </span>
                <span class="fav_image">
                  <img src=${product.image} />
                </span>
                <span class="fav_title">
                  ${product.name}
                </span>
                <span class="fav_price">
                  $${price[0]}.<span class="fav_price-subscript">${price[1]}</span>
                </span>
              </li>
            `)
        }
      </script>
    </ul>
    <a href="orderPlace.php" style="display: inline-block;" class="button">Proceed To Checkout</a>
  </Section>

  <?php
  include './components/footer.php';
  ?>

</body>

</html>