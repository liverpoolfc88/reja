<?
use app\models\Shops;

$shop = Shops::find()->where(['not',['telegram'=>'']])->all();
//var_dump($shop);die();
?>
<style>
    .media:hover{
        /*font-size: 16px;*/
        background-color: #ecf0f5;
        padding: 10px 10px 0px 10px;
        /*color: #0a73bb;*/
    }
</style>
<div class="col-md-12 col-lg-3">
    <div style="padding-top: 30px" class="intro-single">
        <div class="title-single-box">
            <h1 class="title-single">Telegram kanallar!</h1>
            <p><span class="color-text-a">Reklama uchun</span></p>
            <span>+998979933632</span>
        </div>
    </div>
<!--    <div class="media">-->
<!--        <img style="border-radius: 50px" src="/themes/assets/img/mini-testimonial-2.jpg" class="align-self-start mr-3" alt="...">-->
<!--        <a href="">-->
<!--            <div class="media-body">-->
<!--                <h5 class="mt-0">Top-aligned media</h5>-->
<!--                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante .</p>-->
<!--            </div>-->
<!--        </a>-->
<!--    </div>-->
<?foreach ($shop as $k =>$val): ?>
    <div class="media">
        <img style="border-radius: 50px; height: 50px; width: 50px" src="/<?=$val->photo?>" class=" align-self-start mr-3" alt="...">
        <a href="https://t.me/MedcezirStoreMale">
            <div class="media-body">
                <h5 class="mt-0"><?=$val->name?></h5>
                <p><?=$val->telegram?></p>
            </div>
        </a>
    </div>
 <? endforeach;?>

</div>