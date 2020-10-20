<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2><?=$shop->name?></h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <ul id="portfolio-flters">-->
<!--                    <li data-filter="*" class="filter-active">All</li>-->
<!--                    <li data-filter=".filter-app">App</li>-->
<!--                    <li data-filter=".filter-card">Card</li>-->
<!--                    <li data-filter=".filter-web">Web</li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->

        <div class="row portfolio-container">

            <?
            foreach ($shop_item as $key=>$value):
//                var_dump($shop_item); die();
            ?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="/themes/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?=$value->name?></h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="/themes/assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-eye"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <? endforeach; ?>



        </div>

    </div>
</section><!-- End Our Portfolio Section -->