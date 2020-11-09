<?

use yii\helpers\Url;
use app\models\TumansShahars;
    $this->title = $menu->name;

//    var_dump($model); die();

?>



<!-- ======= Property Grid ======= -->
<section class="property-grid grid">
    <div style="padding: 0px 50px">
        <div class="row">
            <?=Yii::$app->controller->renderPartial("//layouts/left_telegram_list")?>
            <div class="col-md-12 col-lg-9">
                <div style="padding-top: 30px" class="intro-single">
                    <div class="title-single-box">
                        <h1 class="title-single"><?=$menu->name?> </h1>
                        <span class="color-text-a">do`konlari</span>
                    </div>
                </div>
                <div class="row">
                    <? foreach ($model as $key=>$value): ?>
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img style="height: 250px" src="/<?=$value->photo?>" alt="" class="img-a img-fluid">
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
        </div>
    </div>
</section>