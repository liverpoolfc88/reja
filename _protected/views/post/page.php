<!-- ======= Intro Single ======= -->
<section style="padding-top: 0px" class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single"><?=$shop->name?></h1>
                    <span class="color-text-a">Grid News</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            News Grid
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section><!-- End Intro Single-->
<!-- =======  Blog Grid ======= -->
<section class="news-grid grid">
    <div class="container">
        <div class="row">
            <?  foreach ($shop_item as $key=>$value):?>
            <div class="col-md-4">
                <div class="card-box-b card-shadow news-box">
                    <div class="img-box-b">
                        <img src="/themes/assets/img/post-1.jpg" alt="" class="img-b img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-header-b">
                            <div class="card-category-b">
                                <a href="#" class="category-b"><?=$value->name?></a>
                            </div>
                            <div class="card-title-b">
                                <h2 class="title-2">
                                    <a href="blog-single.html"><?=$value->short?>
                                        <br></a>
                                </h2>
                            </div>
                            <div class="card-date">
                                <span class="fa fa-eye">  (<?=$value->views?>)</span><br>
                                <span class="fa fa-calendar date-b"> (<?=($value->updated_date)?$value->updated_date:$value->created_date?>)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <? endforeach; ?>
        </div>
    </div>
</section>