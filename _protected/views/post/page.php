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
                                <a href=""   data-toggle="modal" data-target="#<?=$value->slug?>" class="category-b"><?=$value->name?></a>
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

                <div class="modal fade" id="<?=$value->slug?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-lg modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><?=$value->name?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>


<!--     Button trigger modal -->
<!--    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
<!--        Launch demo modal-->
<!--    </button>-->

    <!-- Modal -->


</section>
<!---->
<!--<script>-->
<!--    var value = 'salom';-->
<!--    document.getElementById("myModalLabel").innerHTML = value;-->
<!---->
<!--    function myFunction(value) {-->
<!--        alert(value);-->
<!--    }-->
<!--</script>-->