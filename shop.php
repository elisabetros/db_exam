<?php
$sTitle = ' | Shop';
$sCurrentPage = 'shop';

require_once(__DIR__ . '/connection.php');
$sql = "SELECT tProduct.nProductID, tProduct.cName as cProductName, tProduct.nCoffeeTypeID as nProductCoffeeTypeID, tProduct.nPrice, tProduct.nStock, tCoffeeType.nCoffeeTypeID, tCoffeeType.cName FROM tProduct INNER JOIN tCoffeeType on tProduct.nCoffeeTypeID = tCoffeeType.nCoffeeTypeID";
$statement = $connection->prepare($sql);

require_once(__DIR__ . '/components/header.php');

?>
<main class="shop">

    <section class="section-one grid mb-small">
        <div class="container-banner mv-medium pv-medium ph-xlarge bg-dark-brown">
            <div class="content-container grid grid-almost-two">
                <div class="grid container-header align-items-center color-white">
                    <div class="align-self-bottom mb-small">
                        <h1>COFFEE FOR EVERY OCCASION</h1>
                    </div>
                    <p class="align-self-top mt-small mb-medium">
                        Choose From Our Wide Collection of Quality Coffee
                    </p>
                </div>
                <div class="grid image bg-contain relative">
                </div>
            </div>
        </div>
    </section>

    <section class="section-two grid mb-large">

        <h2>Shop</h2>

        <form id="formSearch" class="justify-self-right p-medium" action="">
            <label for="txtSearch" class="mh-small align-self-bottom">Search</label>
            <input id="txtSearch" type="text" name="search" placeholder="Type here to search for products" maxlength="50" minlength="3">
        </form>

        <div class="products grid grid-two-thirds-bigger mr-medium">

            <div class="filter color-white relative">
                <h3 class="color-black ph-medium pb-medium">Filters</h3>

                <button class="accordion price bg-medium-light-brown color-white">Price</button>
                <div class="panel filter-price bg-white color-black">
                    <div class="options">
                        <!-- <label for="option1">
                            <input type="checkbox" name="option1" value="0-50" class="mr-small mb-small">
                            < 50 DKK </label> <br>
                                <label for="option2" class="m-small">
                                    <input type="checkbox" name="option2" value="51-100" class="mr-small mb-small"> 51-100 DKK
                                </label><br>
                                <label for="option3" class="m-small">
                                    <input type="checkbox" name="option3" value="101-150" class="mr-small mb-small"> more than 100 DKK
                                </label><br> -->
                        <input type="range" min="0" max="150" id="rangePrice" value="150" step="10"><span id="priceValue"></span>

                    </div>
                </div>

                <button class="accordion origin bg-medium-light-brown color-white">Origin</button>
                <div class="panel filter-origin bg-white color-black">
                    <div class="options" id="coffeeTypesdiv">
                        <label for="option1">
                            <input type="checkbox" value="Colombia" class="mr-small"> Colombia
                        </label><br>
                        <label for="option1">
                            <input type="checkbox" value="Ethiopia" class="mr-small"> Ethiopia
                        </label><br>
                        <label for="option2">
                            <input type="checkbox" value="Sumatra" class="mr-small"> Sumatra
                        </label><br>
                        <label for="option3">
                            <input type="checkbox" value="Brazil" class="mr-small"> Brazil
                        </label><br>
                        <label for="option4">
                            <input type="checkbox" value="Nicaragua" class="mr-small"> Nicaragua
                        </label><br>
                        <label for="option5">
                            <input type="checkbox" value="Blend" class="mr-small"> Blend
                        </label><br>
                    </div>
                </div>
            </div>

            <div class="products-container grid grid-three">
                <?php
                if ($statement->execute()) {

                    $products = $statement->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($products as $row) {

                        $imgUrl = $row['cProductName'];
                        $result = strtolower(str_replace(" ", "-", $imgUrl));

                        echo '
            <a href="singleProduct.php?id=' . $row['nProductID'] . '">
            <div class="product" id="product-' . $row['nProductID'] . '">
            <div class="image bg-contain" style="background-image: url(img/products/' . $result . '.png)"></div>
            <div class="description m-small">
                <h3 class="productName mt-small text-left">' . $row['cProductName'] . '</h3>
                <h4 class="productName mt-small text-left">Origin: ' . $row['cName'] . '</h4>
                <p class="productPrice mt-small">' . $row['nPrice'] . ' DKK</p>
            </div>
            </div>
            </a>
            ';
                    }
                }
                ?>
            </div>

        </div>
        <template>
            <a href="">
                <div class="product mb-medium">
                    <div class="image bg-contain">
                        <div class="description m-small">
                            <h3 class="productName mt-small text-left"></h3>
                            <h4 class="productName mt-small text-left"></h4>
                            <p class="productPrice mt-small"></p>
                        </div>
                    </div>
                </div>
            </a>
        </template>
    </section>

</main>

<?php
$sScriptPath = 'js/filter.js';
require_once(__DIR__ . '/components/footer.php');
