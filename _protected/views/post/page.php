<?
$this->title = $shop->name;
?>
<!-- ======= Intro Single ======= -->

<section style="padding-top: 45px" class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single"><?= $shop->name ?></h1>
                    <a href="#manzil" class="btn btn-danger">Manzil</a>
                    <span class="color-text-a"><a href="" target="_blank">
                            <p id="demo"></p></a> </span>
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
            <? foreach ($shop_item as $key => $value): ?>
                <div class="col-md-3">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img style="" src="/<?= $value->photo ?>" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="" id="<?= $value->id ?>" data-toggle="modal"
                                       data-target="#<?= $value->slug ?>"
                                       class="viewcount category-b"><?= $value->name ?></a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html"><?= $value->short ?>
<!--                                            <br>-->
                                        </a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="fa fa-eye <?= $value->id ?>">  (<?= $value->views ?>)</span><br>
                                    <span class="fa fa-calendar date-b"> (<?= ($value->updated_date) ? $value->updated_date : $value->created_date ?>)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="height: 90%" class="modal fade" id="<?= $value->slug ?>" tabindex="-1" role="dialog"
                     aria-labelledby="myModalLabel">
                    <div class="modal-lg modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><?= $value->name ?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <span><?= $value->slug ?></span>
                                <div style="text-align: center">
                                    <img style="width: 70%" src="/<?= $value->photo ?>">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                    </div>
                                    <div class="col-md-6">
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
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


</section>
<hr>
<!-- ======= Contact Single ======= -->
<section id="manzil" class="contact">
    <div class="container">
        <div class="row">
            <div style="padding-top: 15px" class="col-sm-12 section-t8">
                <div class="row">
                    <div class="col-md-7">
                        <!--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.-->
                        <!--                        75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+-->
                        <!--                        Square!5e0!3m2!1ses-419!2sve!4v1510329142834" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.1171251254464!2d72.05768831565557!3d40.71543804534154!2m
                        3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzU1LjYiTiA3MsKwMDMnMzUuNiJF!5e0!3m2!1sru!2s!4v160636908774
                        5!5m2!1sru!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-md-5 section-md-t3">
                        <div class="icon-box section-b2">
                            <div class="icon-box-icon">
                                <span class="ion-ios-paper-plane"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Say Hello</h4>
                                </div>
                                <div class="icon-box-content">
                                    <p class="mb-1">Email.
                                        <span class="color-a">contact@example.com</span>
                                    </p>
                                    <p class="mb-1">Phone.
                                        <span class="color-a">+54 356 945234</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box section-b2">
                            <div class="icon-box-icon">
                                <span class="ion-ios-pin"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Find us in</h4>
                                </div>
                                <div class="icon-box-content">
                                    <p class="mb-1">
                                        Manhattan, Nueva York 10036,
                                        <br> EE. UU.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="icon-box-icon">
                                <span class="ion-ios-redo"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Social networks</h4>
                                </div>
                                <div class="icon-box-content">
                                    <div class="socials-footer">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="link-one">
                                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Single-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(function () {
        $(function () {
            var link = window.location.href;
            var id = <?=$shop->id?>;
            $.ajax({
                method: "POST",
                data: {
                    'link': link,
                    'url_id': id
                },
                dataType: 'json',
                url: '/boshqaruv/manzil',
                success: function (data) {
                    console.log(data);
                },
                error: function (e) {
                    console.log(e);
                }.bind(this),
            });
        });
    });


</script>

