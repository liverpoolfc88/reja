<?
use yii\helpers\Url;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu tree" data-widget="tree"><li class="header"><span><span>Menu Yii2</span></span></li>

<!--            <li><a href="--><?//=Url::to(['/admin/shop-items/userindex'])?><!--"><i class="fa fa-pencil-square-o"></i>  <span>Maxsulot</span></a></li>-->



            <li class="treeview"><a href="#"><i class="fa fa-pencil"></i>  <span>Admin</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li><a href="<?=Url::to(['/admin/viloyats/index'])?>"><i class="fa fa-file-code-o"></i>  <span>Viloyat</span></a></li>
                    <li><a href="<?=Url::to(['/admin/tumans-shahars/index'])?>"><i class="fa fa-file-code-o"></i>  <span>Tuman&Shahar</span></a></li>
                    <li><a href="<?=Url::to(['/admin/shops/index'])?>"><i class="fa fa-file-code-o"></i>  <span>Shops</span></a></li>
                    <li><a href="<?=Url::to(['/admin/shop-items/index'])?>"><i class="fa fa-file-code-o"></i>  <span>Shops-Items</span></a></li>
                    <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>  <span>Level One</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>  <span>Level Two</span></a></li>
                            <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i>  <span>Level Two</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i>  <span>Level Three</span></a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i>  <span>Level Three</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=""><a href="<?=Url::to(['/admin/shop-items/userindex'])?>"><i class="fa fa-pencil-square-o"></i>  <span>Useradmin</span></a>

            </li>
        </ul>

    </section>

</aside>
