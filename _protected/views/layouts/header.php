<?
use app\models\Viloyats;
use app\models\TumansShahars;
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\User;

$menu = Viloyats::find()->all();
$id = Yii::$app->user->identity->id;
$u = User::find()->where(['id'=>$id])->one();
$shop = $u->shop;
//$k = $this->user->shop;

//var_dump($u->shop); die();
?>

<style>

    .intro {
        height: 40vh;
    }
    .intro .carousel-item-a {
        height: 40vh;
    }
</style>
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
            <i class="icofont-phone"></i> +1 5589 55488 55
        </div>
        <div class="social-links float-right">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
    </div>
</section>

<!-- ======= Property Search Section ======= -->
<!--<div class="click-closed"></div>-->
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
        <form class="form-a">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="form-group">
                        <label for="Type">Keyword</label>
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="Type">Type</label>
                        <select class="form-control form-control-lg form-control-a" id="Type">
                            <option>All Type</option>
                            <option>For Rent</option>
                            <option>For Sale</option>
                            <option>Open House</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="city">City</label>
                        <select class="form-control form-control-lg form-control-a" id="city">
                            <option>All City</option>
                            <option>Alabama</option>
                            <option>Arizona</option>
                            <option>California</option>
                            <option>Colorado</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="bedrooms">Bedrooms</label>
                        <select class="form-control form-control-lg form-control-a" id="bedrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="garages">Garages</label>
                        <select class="form-control form-control-lg form-control-a" id="garages">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="bathrooms">Bathrooms</label>
                        <select class="form-control form-control-lg form-control-a" id="bathrooms">
                            <option>Any</option>
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="price">Min Price</label>
                        <select class="form-control form-control-lg form-control-a" id="price">
                            <option>Unlimite</option>
                            <option>$50,000</option>
                            <option>$100,000</option>
                            <option>$150,000</option>
                            <option>$200,000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-b">Search Property</button>
                </div>
            </div>
        </form>
    </div>
</div><!-- End Property Search Section -->>

<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="<?=Url::home()?>">Estate<span class="color-b">Agency</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <? foreach ($menu  as $key=>$m):?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?=$m->name?>
                    </a>
                    <?$child = TumansShahars::find()->where(['viloyat_id'=>$m->id])->all()?>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <? foreach ($child as $ch){?>
                        <a class="dropdown-item" href="<?=Url::to(['site/index', 'slug' => $ch['slug']])?>"><?=$ch->name?></a>
                        <?}?>
                    </div>
                </li>
                <? endforeach;?>
                <? if (Yii::$app->user->can('admin')){ ?>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="<?=Url::to(['/admin/'])?>">Admin</a>
                </li>
                <?}?>

                <? if (Yii::$app->user->isGuest) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['/site/signup'])?>">Registr</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=Url::to(['/site/login'])?>">Login</a>
                    </li>
                <?} else{?>
                    <li class="nav-item">

                        <a class="nav-link" href="<?=(!empty($shop))?Url::to(['/boshqaruv/index']):Url::to(['/boshqaruv/shopcreate'])?>">Boshqaruv</a>
<!--                           <a class="nav-link" target="_blank" href="--><?//=Url::to(['boshqaruv/shopcreate'])?><!--">Boshqaruv</a>-->

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-method="post" href="<?=Url::to(['/site/logout'])?>">logout</a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        --><?// $options = ['class' => 'nav-link']; ?>
<!--                            --><?//=Html::a('logout', ['/site/logout'], ['data' => ['method' => 'post']])?>
<!--                    </li>-->
                <?}?>
            </ul>
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
    </div>
</nav><!-- End Header/Navbar -->

<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(/themes/assets/img/slide-1.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Doral, Florida
                                        <br> 78345</p>
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">204 </span> Mount
                                        <br> Olive Road Two</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(/themes/assets/img/slide-2.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Doral, Florida
                                        <br> 78345</p>
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">204 </span> Rino
                                        <br> Venda Road Five</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item-a intro-item bg-image" style="background-image: url(/themes/assets/img/slide-3.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Doral, Florida
                                        <br> 78345</p>
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">204 </span> Alira
                                        <br> Roan Road One</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Intro Section -->