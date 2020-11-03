<?
use yii\helpers\Url;
//echo $shops;
$this->title = $menu->name;
$user = Yii::$app->user->identity;

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

    .padbut{
        padding-bottom: 20px;
    }
    /*.media-body:hover{*/
    .media:hover{
        /*font-size: 16px;*/
        background-color: #ecf0f5;
        color: #0a73bb;
    }
    .w3-red, .w3-hover-red:hover {
         color: white!important;
         background-color: #00c054!important;
    }
    .card-header-b {
            bottom: 0px;
        }

    #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    .section-t8{
        padding-top: 2rem;
    }
    .intro-single {
        padding: 2rem 0 3rem;
    }
</style>
<section>
    <div class="container">
        <div class="col-md-12">
            <div class="row section-t3">
                <div class="col-sm-12">
                    <div class="title-box-d">
                        <h3 class="title-d">Contact Agent</h3>
                    </div>
                </div>
            </div>
            <? if ($shops->status == 0): ?>
            <div class="alert alert-info" role="alert">Xurmatli foydalanuvchi! Admin sizning do'koningiz va maxsulotlaringizni faol qilmagunicha ular tizimda ko'rinmaydi, adminga murojaat qiling! </div>
            <? endif; ?>
            <div class="row">
                <div class="padbut col-md-6 col-lg-3">
                    <img src="/themes/assets/img/agent-4.jpg" alt="" class="img-fluid">
                </div>
                <div class="padbut col-md-6 col-lg-3">
                    <div class="property-agent">
                        <h4 class="title-agent"><?=$shops->name?></h4>
                        <p class="color-text-a">
                            <?=$shops->text?>
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between">
                                <strong>Phone:</strong>
                                <span class="color-text-a"><?=$shops->tel?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Telegram:</strong>
                                <span class="color-text-a"><?=$shops->telegram?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Locatsiya:</strong>
                                <span class="color-text-a"><?=$shops->location?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>video:</strong>
                                <span class="color-text-a"><?=$shops->youtube_link?></span>
                            </li>
                        </ul>
                            <a  href="<?=Url::to(['shopupdate','id'=>$shops->id]);?>">
                                <button class="w3-button w3-xlarge w3-circle w3-red w3-card-4">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </button>
                            </a>
                    </div>
                </div>
                <div class="padbut col-md-6 col-lg-3">
                    <img src="/themes/assets/img/agent-5.jpg" alt="" class="img-fluid">
                </div>
                <div class="padbut col-md-6 col-lg-3">
                    <div class="property-agent">
                        <h4 class="title-agent"><?=$user->username?></h4>
                        <p class="color-text-a">
                            <?=$shops->text?>
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between">
                                <strong>Phone:</strong>
                                <span class="color-text-a"><?=$user->email?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Telegram:</strong>
                                <span class="color-text-a"><?=$shops->telegram?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>Locatsiya:</strong>
                                <span class="color-text-a"><?=$shops->location?></span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <strong>video:</strong>
                                <span class="color-text-a"><?=$shops->youtube_link?></span>
                            </li>
                        </ul>
                        <a  href="<?=Url::to(['userupdate','id'=>$user->id]);?>">
                            <button class="w3-button w3-xlarge w3-circle w3-red w3-card-4">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Our Amazing Posts</h1>
                    <span class="color-text-a">Maxsulot qo'shish
                            <a  href="<?=Url::to(['create']);?>"><button class="w3-button w3-xlarge w3-circle w3-red w3-card-4">+</button> </a>
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="news-grid grid">
    <div style="padding: 0px 50px" class="">
        <div class="row">
            <div class="col-md-3">
                <div class="media">
                    <img style="border-radius: 50px" src="/themes/assets/img/mini-testimonial-2.jpg" class="align-self-start mr-3" alt="...">
                    <a href="">
                    <div class="media-body">
                        <h5 class="mt-0">Top-aligned media</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante .</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                <? foreach ($shopitem as $key=>$item): ?>
                    <div class="col-md-3 col-lg-3 col-sm-6">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="/themes/assets/img/post-1.jpg" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="<?=Url::to(['update','id'=>$item->id])?>" style="background-color: #0a73bb" class="category-b"><span style="color: white" class="fa fa-pencil" aria-hidden="true"> (o'zgartirish)</span></a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.html"><?=$item->name ?>
                                                <br></a>
                                            <span class="date-b"><?=($item->updated_date)?$item->updated_date:$item->created_date ?></span>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <!--                                <a href="--><?//=Url::to(['delete','id'=>$item->id])?><!--" style="background-color: white" class="category-b"><span style="color: red" class="fa fa-trash" aria-hidden="true"> </span></a>-->
                                        <a href="<?=Url::to(['delete','id'=>$item->id]);?>"style="background-color: white" class="category-b title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Ushbu bo`lim o`chirib tashlansinmi?" data-method="post"><span style="color: red" class="fa fa-trash" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach;?>
                </div>
            </div>

        </div>
    </div>
</section>




<!--<section style="padding-top: 20px ">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6"></div>-->
<!--            <div class="col-md-6"></div>-->
<!--            <table id="customers">-->
<!--                <tr>-->
<!--                    <th>Maxsulot nomi</th>-->
<!--                    <th>narxi</th>-->
<!--                    <th>Qoshilgan sana</th>-->
<!--                    <th>O'zgartirilgan asana</th>-->
<!--                    <th colspan="2" >-->
<!--                        <a style="color: white" href="--><?//=Url::to(['shop-items/usercreate']);?><!--"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> qo'shish </a>-->
<!--                    </th>-->
<!--                </tr>-->
<!--                --><?// foreach ($shopitem as $key=>$item): ?>
<!--                    <tr>-->
<!--                        <td>--><?//=$item->name ?><!--</td>-->
<!--                        <td>--><?//=$item->price ?><!--</td>-->
<!--                        <td>--><?//=$item->created_date ?><!--</td>-->
<!--                        <td>--><?//=$item->updated_date ?><!--</td>-->
<!--                        <td><a href="--><?//=Url::to(['shop-items/userupdate','id'=>$item->id]);?><!--"><span class="fa fa-pencil" aria-hidden="true"> (o'zgartirish)</span></a></td>-->
<!--                        <td><a href="--><?//=Url::to(['shop-items/delete','id'=>$item->id]);?><!--" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Ushbu bo`lim o`chirib tashlansinmi?" data-method="post"><span style="color: red" class="fa fa-trash" aria-hidden="true"> (o'chirish)</span></a></td>-->
<!---->
<!--                    </tr>-->
<!--                --><?// endforeach;?>
<!--            </table>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</section>-->

