<?php
$sTitle = ' | Front page';
$sCurrentPage = 'frontpage';
require_once(__DIR__ . '/components/header.php');
?>

<main class="frontpage">

    <section class="section-one grid grid-almost-two mb-large">
        <div class="grid container-header align-items-center pv-large pl-xlarge pr-medium">
            <div class="logo bg-contain align-self-bottom mb-small">
                <h1>Welcome</h1>
            </div>
            <p class="align-self-top mt-small mb-medium">
                Enhance your everyday coffee experience with a coffee subscription tailored to your taste or discover a world of coffee and let us surprise you!
            </p>
            <a href="subscribe.php" class="button">Learn more</a>
        </div>
        <div class="container masonry">
            <div class="grid image-container bg-light-brown">
                <div class="image bg-contain img1"></div>
            </div>
            <div class="grid image-container bg-brown">
                <div class="image bg-contain img2"></div>
            </div>
            <div class="grid image-container bg-medium-light-brown">
                <div class="image bg-contain img3"></div>
            </div>
            <div class="grid image-container bg-dark-brown">
                <div class="image bg-contain img4"></div>
            </div>
        </div>
    </section>

    <section class="section-two grid mb-large">
        <h2 class="mb-small">What you get</h2>
        <h3>We make sure you get everything you wish for and more </h3>
        <div class="grid grid-two-thirds-reversed container ph-xlarge">
            <div class="image bg-contain"></div>
            <div class="list grid align-items-center">
                <ul>
                    <li>
                        <h5>Coffee</h5>
                        <p>YOUR HANDPICKED SELECTION OF QUALITY COFFEE</p>
                    </li>
                    <li>
                        <h5>Tips</h5>
                        <p>TASTING NOTES AND BREWING TIPS</p>
                    </li>
                    <li>
                        <h5>Experience</h5>
                        <p>COFFEE TAILORMADE TO YOUR TASTE - EVERYDAY SINGLE DAY</p>
                    </li>
                </ul>
                <a href="subscribe.php" class="button">Subscribe now</a>
            </div>
        </div>
    </section>

    <section class="section-three grid mb-large">
        <h2 class="mb-small">How it works</h2>
        <h3>Enhancing your everyday coffee experience has never been easier</h3>
        <div class="grid grid-three container">
            <div class="step one bg-light-brown">
                <div class="step-no absolute">
                    <h4 class="color-white relative">Step</h4>
                    <div class="no relative">1</div>
                </div>
                <div class="image bg-contain"></div>
                <div class="description">
                    <h5 class="color-white">Select a coffee you like or take a test to get an advice from us</h5>
                </div>
            </div>
            <div class="step two bg-medium-light-brown">
                <div class="step-no absolute">
                    <h4 class="color-white relative">Step</h4>
                    <div class="no relative">2</div>
                </div>
                <div class="image bg-contain"></div>
                <div class="description">
                    <h5 class="color-white">Choose amount you need and delivery method </h5>
                </div>
            </div>
            <div class="step three bg-dark-brown">
                <div class="step-no absolute">
                    <h4 class="color-white relative">Step</h4>
                    <div class="no relative">3</div>
                </div>
                <div class="image bg-contain"></div>
                <div class="description">
                    <h5 class="color-white">Get it delivered and enjoy your coffee!</h5>
                </div>
            </div>
        </div>
        <a href="subscribe.php" class="button margin-auto mt-medium">Get started</a>
    </section>

    <section class="section-four grid mb-large">
        <h2 class="mb-small">Why choose The Proper Pour</h2>
        <h3>Get ready to have all your expectations met</h3>
        <div class="grid grid-three container ph-xlarge">
            <div class="list one">
                <ul>
                    <li>
                        <h5>No binding</h5>
                        <p>You can stop your subscription anytime</p>
                    </li>
                    <li>
                        <h5>Tailormade taste</h5>
                        <p>Take our test and get matched with the perfect coffee based on your taste</p>
                    </li>
                </ul>
            </div>

            <div class="image bg-contain relative"></div>

            <div class="list one">
                <ul>
                    <li>
                        <h5>Coffee discount</h5>
                        <p>Our subscribers have 10% discount for all coffee in our webshop</p>
                    </li>
                    <li>
                        <h5>Free delivery</h5>
                        <p>Delivery is always included in the price</p>
                    </li>
                </ul>
            </div>
        </div>
        <a href="subscribe.php" class="button margin-auto mt-large">Subscribe today</a>
    </section>

    <section class="section-five grid mb-large">
        <h2 class="mb-small">Enhance your experience</h2>
        <h3>Tips and tricks to make your best cup of coffee</h3>
        <div class="grid grid-four container masonry">
            <div class="flipcontainer item one grid" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                    <div class="front bg-dark-brown">
                        <div class="image bg-contain"></div>
                        <h5 class="color-white ph-medium relative">How to choose coffee</h5>
                    </div>
                    <div class="back p-medium ">
                        <h3>Sometimes it can be hard to choose a coffee you will like, check out main simple tips!</h3>

                        <div>If you prefer coffee with a smooth taste without bitterness, then look for dry, light coloured coffee beans, which are roasted for a shorter time.
                            If you like a strong, bold cofee, buy beans,that roasted longer and are dark and shiny in appearance.

                        </div>
                        <div>Light roasted coffee beans contain the highest level of caffeine, then medium and then dark roasted. Coffee beans that are used to make Espresso are usually in the medium roast and if you are looking for increase your caffeine intake, you are better going for light or medium roasted beans. </div>
                        <div>Freshness is important, so check the roast date on the label before buying coffee! If you don’t have a coffee grinder in your house, go for the whole bean bag and ask the supermarket or café to grind them for you.</div>

                    </div>
                </div>
            </div>

            <div class="flipcontainer item two grid" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                    <div class="front bg-light-brown">
                        <div class="image bg-contain"></div>
                        <h5 class="color-white ph-medium relative">How to brew coffee</h5>
                    </div>
                    <div class="back p-medium">Make sure that your tools — from bean grinders and filters to coffee makers— are thoroughly cleaned after each use.
                        Rinse with clear, hot water (or wipe down thoroughly), and dry with an absorbent towel. It’s important to check that no grounds have been left to collect and that there’s no build-up of coffee oil (caffeol), which can make future cups of coffee taste bitter and rancid.
                        Great coffee starts with great beans. The quality and flavor of your coffee is not only determined by your favorite brewing process, but also by the type of coffee you select.
                        Purchase coffee as soon as possible after it’s roasted. Fresh-roasted coffee is essential to a quality cup, so buy your coffee in small amounts (ideally every one to two weeks).
                        If you buy whole bean coffee, always grind your beans as close to the brew time as possible for maximum freshness. A burr or mill grinder is best because the coffee is ground to a consistent size.
                        The size of the grind is hugely important to the taste of your coffee. If your coffee tastes bitter, it may be over-extracted, or ground too fine. On the other hand, if your coffee tastes flat, it may be under-extracted, meaning your grind is too coarse.
                        The water you use is very important to the quality of your coffee. Use filtered or bottled water if your tap water is not good or has a strong odor or taste, such as chlorine.
                        If you’re using tap water, let it run a few seconds before filling your coffee pot, and be sure to use cold water. Avoid distilled or softened water.
                        The amount of time that the water is in contact with the coffee grounds is another important flavor factor.
                        In a drip system, the contact time should be approximately 5 minutes. If you are making your coffee using a French Press, the contact time should be 2-4 minutes. Espresso has an especially brief brew time — the coffee is in contact with the water for only 20-30 seconds. Cold brew, on the other hand, should steep overnight (about 12 hours).
                    </div>
                </div>
            </div>
            <div class="flipcontainer item three grid" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                    <div class="front bg-medium-light-brown">
                        <div class="image bg-contain"></div>
                        <h5 class="color-white ph-medium relative">Christmas coffee</h5>
                    </div>
                    <div class="back p-medium">With Christmas around the corner, remember to add it also to your coffee!
                        What about some cinnamon, ground cardamom, cloves, nutmeg or whipped cream and marshmallows? Check out other recipes from our friends from BestRecipies.com/chrismasCoffee!
                    </div>
                </div>
            </div>
            <div class="flipcontainer item four grid" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                    <div class="front bg-light-brown">
                        <div class="image bg-contain relative"></div>
                        <h5 class="color-white ph-medium relative">4 Tips for Serving Good Coffee for a Crowd</h5>
                    </div>
                    <div class="back p-medium"><strong>Buy good beans</strong>
                        Just because you’re serving a crowd does not mean that you should spare. Make sure your guests are happy about what they are drinking
                        <strong>Choose a method that works for a crowd</strong>
                        You will be very tired, using your espresso or AeroPress, serving for the crowd! We recommend you buy a large French press, to be sure that you can serve many cups at a time.
                        <strong>Keep it warm</strong>
                        If you have guests for coffee, you do not want to run from kitchen to table but want to enjoy it. We recommend you invest in a good thermos if you like long weekend brunches at your home.
                        <strong>Have the proper additions at hands</strong>
                        Be sure that milk, sugar and water are on the table, some of your guests may even be vegans, remember almond milk!
                    </div>
                </div>
            </div>
            <div class="flipcontainer item five grid" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                    <div class="front bg-medium-light-brown">
                        <div class="image bg-contain"></div>
                        <h5 class="color-white ph-medium relative">Best coffee equipment</h5>
                    </div>
                    <div class="back p-medium">Some info</div>
                </div>
            </div>

            <div class="flipcontainer item six grid" ontouchstart="this.classList.toggle('hover');">
                <div class="flipper">
                    <div class="front bg-dark-brown">
                        <div class="image bg-contain"></div>
                        <h5 class="color-white ph-medium relative">Sustainability in coffee drinking</h5>
                    </div>
                    <div class="back p-medium">Some info</div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
$sScriptPath = 'script.js';
require_once(__DIR__ . '/components/footer.php');
