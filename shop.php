<?php
$sTitle = ' | Shop';
$sCurrentPage = 'shop';

require_once(__DIR__ . '/connection.php');
$sql = "SELECT tproduct.nProductID, tproduct.cName AS cProductName, tproduct.nCoffeeTypeID AS nProductCoffeeTypeID, 
        tproduct.nPrice, tproduct.nStock, tproduct.bActive, 
        tcoffeetype.nCoffeeTypeID, tcoffeetype.cName 
        FROM tproduct INNER JOIN tcoffeetype ON tproduct.nCoffeeTypeID = tcoffeetype.nCoffeeTypeID WHERE tproduct.bActive != 0";

$statement = $connection->prepare($sql);

require_once(__DIR__ . '/components/header.php');

?>

<main class="shop">
    <section class="section-one grid mb-small">
        <div class="container-banner mb-medium p-small ph-xlarge bg-dark-brown">
            <div class="content-container grid grid-two relative">
                <div class="container-header align-items-center color-white">
                    <h1>COFFEE FOR EVERY OCCASION</h1>
                    <p class="banner-message mt-small">
                        Choose from our wide collection of quality coffee
                    </p>
                </div>
                <div class="image bg-contain absolute"></div>
            </div>
        </div>
        </div>

        <section class=" grid mb-large">


            <form id="formSearch" class="grid justify-self-right pv-medium mr-medium">
                <label for="txtSearch" class="mh-small align-self-bottom">
                <input id="txtSearch" type="text" name="search" placeholder="Type here to search for products or country of origins" maxlength="50" minlength="1" autocomplete="off"></label>
                <button id="searchBtn" class="button">Search</button>

            </form>
            <div class="text-right mr-large pb-small" id="forSearch">
            <h4 class="span1"></h4>Search results for <h4 class="span2"></h4>
            </div>
            <div id="results" class="pv-small grid align-items-center">
                
            </div>

            <div class="products grid grid-two-thirds-bigger mr-medium">

                <div class="filter color-white relative">
                    <div class="filter-container">
                        <button class="accordion price bg-medium-light-brown color-white">Price</button>
                        <div class="panel filter-price bg-white color-black">
                            <div class="options">
                                <label for="price">
                                    <input name="price" type="range" min="0" max="150" id="rangePrice" value="150" step="10"><span id="priceValue"></span>
                            </div>
                        </div>

                        <button class="accordion origin bg-medium-light-brown color-white">Origin</button>
                        <div class="panel filter-origin bg-white color-black">
                            <div class="options" id="coffeeTypesdiv">

                                <label for="typeOption1" class="checkbox grid">
                                    <input type="checkbox" value="Colombia" class="align-self-center" name="typeOption1">
                                    <span>Colombia</span>
                                </label><br>
                                <label for="typeOption2" class="checkbox grid">
                                    <input type="checkbox" value="Ethiopia" class="align-self-center" id="typeOption2"> <span>Ethiopia</span>
                                </label><br>
                                <label for="typeOption3" class="checkbox grid">
                                    <input type="checkbox" value="Sumatra" class="align-self-center" id="typeOption3">
                                    <span>Sumatra</span>
                                </label><br>
                                <label for="typeOption4" class="checkbox grid">
                                    <input type="checkbox" value="Brazil" class="align-self-center" id="typeOption4">
                                    <span>Brazil</span>
                                </label><br>
                                <label for="typeOption5" class="checkbox grid">
                                    <input type="checkbox" value="Nicaragua" class="align-self-center" id="typeOption5">
                                    <span>Nicaragua</span>
                                </label><br>
                                <label for="typeOption6" class="checkbox grid">
                                    <input type="checkbox" value="Blend" class="align-self-center" id="typeOption6">
                                    <span>Blend</span>
                                </label><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="products-container grid grid-three">
                    <?php
                    if ($statement->execute()) {

                        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
                        $connection = null;

                        foreach ($products as $product) {

                            $imgUrl = $product['cProductName'];
                            $result = strtolower(str_replace(" ", "-", $imgUrl));

                            echo '
            <a href="singleProduct?id=' . $product['nProductID'] . '">
                <div class="product relative" id="product-' . $product['nProductID'] . '">
                    <div class="image bg-contain" style="background-image: url(img/products/' . $result . '.png)"></div>
                    <div class="description m-small">
                        <h3 class="productName mt-small text-left">' . $product['cProductName'] . '</h3>
                        <p class="productCoffeeType mt-small text-left">' . $product['cName'] . '</p>
                    <h4 class="absolute productPrice mt-small">' . $product['nPrice'] . ' DKK</h4>
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
                    <div class="product relative">
                        <div class="image bg-contain"></div>
                        <div class="description m-small">
                            <h3 class="productName mt-small text-left"></h3>
                            <p class="productCoffeeType mt-small text-left"></p>
                            <h4 class="productPrice mt-small absolute"></h4>
                        </div>

                    </div>
                </a>
            </template>
        </section>

</main>

<?php

$connection = null;

$sScriptPath = 'filter.js';
require_once(__DIR__ . '/components/footer.php');
