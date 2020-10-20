<?
use yii\helpers\Url;
//echo $shops;
?>

<style>
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
</style>



<section style="padding-top: 20px ">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
            <table id="customers">
                <tr>
                    <th>Maxsulot nomi</th>
                    <th>narxi</th>
                    <th>Qoshilgan sana</th>
                    <th>O'zgartirilgan asana</th>
                    <th colspan="2" >
                        <a style="color: white" href="<?=Url::to(['shop-items/usercreate']);?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> qo'shish </a>
                    </th>
                </tr>
                <? foreach ($shopitem as $key=>$item): ?>
                    <tr>
                        <td><?=$item->name ?></td>
                        <td><?=$item->price ?></td>
                        <td><?=$item->created_date ?></td>
                        <td><?=$item->updated_date ?></td>
                        <td><a href="<?=Url::to(['shop-items/userupdate','id'=>$item->id]);?>"><span class="fa fa-pencil" aria-hidden="true"> (o'zgartirish)</span></a></td>
                        <td><a href="<?=Url::to(['shop-items/delete','id'=>$item->id]);?>" title="Delete" aria-label="Delete" data-pjax="0" data-confirm="Ushbu bo`lim o`chirib tashlansinmi?" data-method="post"><span style="color: red" class="fa fa-trash" aria-hidden="true"> (o'chirish)</span></a></td>

                    </tr>
                <? endforeach;?>
            </table>

        </div>
    </div>

</section>
