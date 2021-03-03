<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
  <title>Favourite Burgers™ – Lafka Burger</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/favouriteBurgers.css">
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
          HOME / FAVORITE PRODUCTS
        </h5>
        <h1 class="hero-content_title">FAVORITE PRODUCTS</h1>
      </div>
    </div>
  </header>


<!-------------------------------------------------------------------Favourite Products---------------------------------------------------------------------------->


  <Section id="favourites">
    <!-- <div style="margin: 10rem auto; text-align: center">
      <p style="color: #777; font-size: 1.8rem; margin-bottom: 3rem">No products added to the wishlist</p>
      <button class="button">RETURN TO SHOP</button>
    </div> -->

    <div>
      <p class="para-title">
        <span><i class="fas fa-pen" style="transform: translateY(6px);"></i></span>
        My Favourites on Lafka Burgers
      </p>
      <ul class="fav">
        <script>
          const favouriteBurgerContainer = document.querySelector('#favourites ul.fav');
          const favourites = JSON.parse(localStorage.getItem('favourites'));
          for (var j = 0; j < favourites.length; j++) {
            // Storing one of the product in a variable
            var product = favourites[j];

            // Splitting the product price
            var price = product.price.split('.');

            favouriteBurgerContainer.insertAdjacentHTML('beforeend', `
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
                <span class="fav_stockInfo">
                  In Stock
                </span>
                <span class="fav_button">
                  <button class="button">ADD TO CART</button>
                </span>
              </li>
            `)
          }
        </script>
        <!-- <li class="fav_block">
          <img class="fav_block-image" src="./image/burgers/burger11-430x430.jpg" />
          <h5 class="fav_block-title">
            Western Bacon Angus Burger
          </h5>
          <span class="fav_icon-block">
            <i class="far fa-trash-alt"></i>
          </span>
          <span class="fav_image">
          </span>
          <div class="fav_details">
            <h6>Price:</h6>
            <span class="fav_price">
              $12.<span class="fav_price-subscript">49</span>
            </span>
          </div>
          <div class="fav_details">
            <h6>Stock:</h6>
            <span class="fav_stockInfo">
              In Stock
            </span>
          </div>
          <span class="fav_button-block">
            <button class="button">ADD TO CART</button>
          </span>
        </li>
        <li class="fav_block">
          <img class="fav_block-image" src="./image/burgers/burger11-430x430.jpg" />
          <h5 class="fav_block-title">
            Western Bacon Angus Burger
          </h5>
          <span class="fav_icon-block">
            <i class="far fa-trash-alt"></i>
          </span>
          <span class="fav_image">
          </span>
          <div class="fav_details">
            <h6>Price:</h6>
            <span class="fav_price">
              $12.<span class="fav_price-subscript">49</span>
            </span>
          </div>
          <div class="fav_details">
            <h6>Stock:</h6>
            <span class="fav_stockInfo">
              In Stock
            </span>
          </div>
          <span class="fav_button-block">
            <button class="button">ADD TO CART</button>
          </span>
        </li> -->
      </ul>
    </div>
  </Section>
  <!---------------------------------------------------------------------Footer--------------------------------------------------------------->
  <footer class="footer">
    <div class="footer_image">
      <img src="./image/flame-burgers-logo.png" class="footer_image-burger" alt="">
    </div>
    <div class="footer_ending">
      <div class="footer_icon-wrapper">
        <span class="footer_icon">
          <a href="https://lafka.althemist.com/sushi/#">
            <i class="fab fa-facebook-f" style="font-size:2.5rem;color: #fff;"></i>
          </a>
        </span>
        <span class="footer_icon">
          <a href="https://lafka.althemist.com/sushi/#">
            <i class="fab fa-twitter" style="font-size:2.5rem;color: #fff;padding:0px 2px 0px 5px;"></i>
          </a>
        </span>
        <span class="footer_icon">
          <a href="https://lafka.althemist.com/sushi/#">
            <i class="fab fa-youtube" style="font-size:2.5rem;color: #fff;padding:0px 2px 0px 5px;"></i>
          </a>
        </span>
        <span class="footer_icon">
          <a href="https://lafka.althemist.com/sushi/#">
            <i class="fab fa-instagram" style="font-size:2.5rem;color: #fff;padding:0px 2px 0px 5px;"></i>
          </a>
        </span>

      </div>
      <h5 class="footer_terms">
        Lafka theme by theAlThemist | © 2019 All rights reserved!
      </h5>
    </div>
  </footer>
</body>

</html>