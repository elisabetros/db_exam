<?php
$sTitle = ' | Your cart';
$sCurrentPage = 'cart';
require_once(__DIR__ . '/components/header.php');
?>

<main>
  <div class="cartTotal">
    <section id="cartItems">
      <template id="cartItemTemplate">
        <div id="" class="cartDiv">
          <img class="img_cart" src="" />
          <div class="cart_desc">
            <input class="title_cart" name="coffeeName">

            <input class="type_cart_grind" name="coffeeGrind"></p>

            <div class="price_number">
              <input class="price_cart" name="coffeePrice">
              <p class="quantity"></p>
            </div>

            <div class="remove button">Remove item</div>
          </div>
        </div>
      </template>

    </section>

    <div class="total">
      <p class="">Your cart</p>
      <section id="totalItemsSection">
        <template id="totalItemsTemplate">
          <div id="" class="totalDiv">
            <!-- <p class="totalItemsName"></p> -->
          </div>
        </template>
      </section>

      <div id="totalsum"></div>
      <button class="buy">Go to Payment</button>
    </div>
  </div>
</main>

<?php
$sScriptPath = 'cart.js';
require_once(__DIR__ . '/components/footer.php');
