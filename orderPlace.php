<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
  <title>Order Place™ – Lafka Burger</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/orderPlace.css">
</head>

<body>
  <header>
    <?php
    include './components/menu.php';
    include './components/menu_box.php';
    ?>
    <div class="hero-content">
      <h5 class="hero-content_breadcrumb">
        HOME / ORDER PLACE
      </h5>
      <h1 class="hero-content_title">ORDER PLACE</h1>
    </div>
  </header>
  <section id="burger-order-place" style="margin: 3rem 0 10rem">
    <div style="margin: 7rem 0 8rem">
      <h2 class="primary-heading" style="color: #333">
        wanna eat <strong>Burger™</strong> ?… hell <strong>yeah!</strong>
      </h2>
      <h4 class="secondary-heading" style="color: #333">
        we’d love to eat them anyway, each & every day
      </h4>
    </div>
    <div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="d-flex">
          <div class="form-input">
            <label>
              <span class="fname">First Name <span class="required">*</span></span>
              <input type="text" name="fname">
            </label>
            <label>
              <span class="lname">Last Name <span class="required">*</span></span>
              <input type="text" name="lname">
            </label>
            <label>
              <span>House No <span class="required">*</span></span>
              <input type="text" name="houseNo" placeholder="House No" required>
            </label>
            <label>
              <span>Road No <span class="required">*</span></span>
              <input type="text" name="roadNo" placeholder="Road No">
            </label>
            <label>
              <span>Area <span class="required">*</span></span>
              <input type="text" name="area">
            </label>
            <label>
              <span>Division <span class="required">*</span></span>
              <select name="division">
                <option value="select">Select a Division...</option>
                <option value="DHA">Dhaka</option>
                <option value="SYL">Sylhet</option>
                <option value="CTG">Chittagong</option>
                <option value="RAJ">Rajshahi</option>
                <option value="GAZ">Gazipur</option>
                <option value="TNG">Tangail</option>
              </select>
            </label>
            <label>
              <span>Phone <span class="required">*</span></span>
              <input type="tel" name="phone">
            </label>
            <label>
              <span>Email Address <span class="required">*</span></span>
              <input type="email" name="email">
            </label>
          </div>
          <div class="Yorder">
            <table>
              <thead>
                <tr>
                  <th colspan="2">Your order</th>
                </tr>
              </thead>

              <tbody id="order-prdoucts">
                <script>
                  const carts = Array.from(JSON.parse(localStorage.getItem('order-cart')));
                  const tableBody = document.querySelector('tbody#order-prdoucts');
                  console.log(carts)
                  for (let k = 0; k < carts.length; k++) {
                    const cart = carts[k]
                    tableBody.insertAdjacentHTML('beforeend', `
                      <tr>
                        <td>${cart.name}</td>
                        <td>$${cart.price}</td>
                      </tr>
                    `)
                  }
                </script>
              </tbody>
              <tfoot>
                <tr id="total-price-wrapper">
                  <td>Subtotal</td>
                  <td style="display: none;"><input type="text" name="price" value=""/></td>
                  <td id="total-price">
                    <script>
                      const total = document.querySelector('#total-price');
                      const totalInput = document.querySelector('#total-price-wrapper input');
                      let sum = 0;
                      for (let j = 0; j < carts.length; j++) {
                        sum += parseFloat(carts[j].price)
                      }
                      total.innerText = `$${sum}`;
                      console.log(totalInput)
                      totalInput.value = sum;
                    </script>
                  </td>
                </tr>
                <tr>
                  <td>Shipping</td>
                  <td>Free shipping</td>
                </tr>
              </tfoot>
            </table><br>
            <div>
              <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
            </div>
            <p>
              Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
            </p>
            <div>
              <input type="radio" name="dbt" value="cd"> Cash on Delivery
            </div>
            <div>
              <input type="radio" name="dbt" value="paypal"> Paypal <span>
                <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
              </span>
            </div>
            <input name="submit" type="submit" id="contact-submit" data-submit="...Sending" value="Place Order">
          </div>
        </div>
      </form>
    </div>
    <?php
    if (isset($_POST["submit"])) {
      $fName = $_POST["fname"];
      $lName = $_POST["lname"];
      $houseNo = $_POST["houseNo"];
      $roadNo = $_POST["roadNo"];
      $area = $_POST["area"];
      $division = $_POST["division"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];
      $price = $_POST["price"];
      $payment_type = $_POST["dbt"];

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "id14803795_lafka_burger";

      //   //! Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      echo 'Hello';
      $sql = "INSERT INTO orders (first_name, last_name, house, road, area, division, phone, email, price, payment_type) VALUES ('$fName','$lName','$houseNo','$roadNo', '$area', '$division', '$phone', '$email', $price, '$payment_type')";
      if ($conn->query($sql) === TRUE) {
        header("Location: http://www.example.com/another-page.php");
      } else {
        echo "Error creating table: " . $conn->error;
      }
    }
    ?>

  </Section>

  <?php
  include './components/footer.php';
  ?>

</body>

</html>