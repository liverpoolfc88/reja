<?

use yii\helpers\Url;
use app\models\TumansShahars;
    $this->title = $menu->name;

?>

<section style="padding-top: 20px" class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Our Amazing Properties</h1>
                    <span class="color-text-a">Grid Properties</span>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Intro Single-->

<!-- ======= Property Grid ======= -->
<section class="property-grid grid">
    <div class="container">
        <div class="row">

            <? foreach ($model as $key=>$value): ?>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="/themes/assets/img/property-1.jpg" alt="" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="<?=Url::to('/?slug='.$menu->slug.'&item_slug='.$value->slug)?>"><?= $value->name?>
<!--                                        <br /> --><?//=$value->user->username?>
                                    </a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">rent | $ 12.000</span>
                                </div>
                                <a href="<?=Url::to('/?slug='.$menu->slug.'&item_slug='.$value->slug)?>" class="link-a">
                                    <?= $value->tel?><span class="fa fa-phone"></span>
                                </a><br>
                                <a href="<?=Url::to('/?slug='.$menu->slug.'&item_slug='.$value->slug)?>" class="link-a">
                                    <?= $value->tel?><span class="fa fa-telegram"></span>
                                </a>
                            </div>
                            <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                    <li>
                                        <h4 class="card-info-title">Area</h4>
                                        <span>340m
                          <sup>2</sup>
                        </span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Beds</h4>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Baths</h4>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>