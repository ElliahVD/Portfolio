<?php include_once 'partials/header.php' ?>

<div id="page-top">
        <!--HOME -->
        <?php include_once 'partials/home.php' ?>

        <!-- ABOUT -->
        <?php include_once 'partials/about.php' ?>

        <!-- SKILLS -->
        <?php include_once 'partials/skills.php' ?>

        <!--PORTFOLIO -->
        <section class="portfolio section" id="portfolio">
            <h2 class="section-title">Portfolio</h2>

            <div class="portfolio__container bd-grid">
                <div class="portfolio__img">
                    <img src="assets/1.jpg" alt=""/>

                    <div class="portfolio__link">
                        <a href="figma_project.php" class="portfolio__link-name" lng-tag="first"></a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="assets/2.jpg" alt=""/>

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name" lng-tag="more"></a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="assets/3.jpg" alt=""/>
                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name" lng-tag="more"></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <?php include_once 'partials/contact.php' ?>
</div>
        <!-- FOOTER -->
        <?php include_once 'partials/footer.php' ?>


