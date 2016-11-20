        <section class="page-top">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <h1>About Us</h1>
                </div>
                <div class="col-md-8 col-sm-8">
                    <ul class="pull-right breadcrumb">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Pages
                            </a>
                        </li>
                        <li class="active">
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="wrapper portfolio-page">
            <div class="container">
                <div class="controls">
                    <h3>Filter Controls</h3>
                    <ul class="nav nav-pills">
                        <li class="filter active" data-filter="all">
                            <a href="#">
                                Show All
                            </a>
                        </li>
                        <li class="filter" data-filter=".category-1">
                            <a href="#">
                                Category 1
                            </a>
                        </li>
                        <li class="filter" data-filter=".category-2">
                            <a href="#">
                                Category 2
                            </a>
                        </li>
                        <li class="filter" data-filter=".category-3">
                            <a href="#">
                                Category 3
                            </a>
                        </li>
                        <li class="filter" data-filter=".category-3, .category-1">
                            <a href="#">
                                Category 1 &amp; 3
                            </a>
                        </li>
                    </ul>
                </div>
                <hr />
                <!-- GRID -->
                <ul id="Grid" class="list-unstyled">
                    <li class="col-md-6 col-xs-12 mix category-1">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="portfolio_item.html">
                                <img src="<?=URL_PUBLIC?>frontend/images/image01.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-inner">SEO</span> <span class="thumb-info-type">Website</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-xs-12 col-xs-12 mix category-2">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="portfolio_item.html">
                                <img src="<?=URL_PUBLIC?>frontend/images/image02.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-inner">Crivos</span> <span class="thumb-info-type">Brand</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-xs-12 mix category-3">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="portfolio_item.html">
                                <img src="<?=URL_PUBLIC?>frontend/images/image03.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-inner">The Fly</span> <span class="thumb-info-type">Logo</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-xs-12 mix category-3">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="portfolio_item.html">
                                <img src="<?=URL_PUBLIC?>frontend/images/image04.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-inner">The Code</span> <span class="thumb-info-type">Website</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-xs-12 mix category-1">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="portfolio_item.html">
                                <img src="<?=URL_PUBLIC?>frontend/images/image05.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-inner">The Code</span> <span class="thumb-info-type">Website</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-xs-12 mix category-3">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="portfolio_item.html">
                                <img src="<?=URL_PUBLIC?>frontend/images/image06.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-inner">SEO</span> <span class="thumb-info-type">Website</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-xs-12 mix category-2">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="portfolio_item.html">
                                <img src="<?=URL_PUBLIC?>frontend/images/image07.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-inner">Crivos</span> <span class="thumb-info-type">Brand</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                        </div>
                    </li>
                    <li class="col-md-6 col-xs-12 mix category-1">
                        <div class="portfolio-item img-thumbnail">
                            <a class="thumb-info" href="portfolio_item.html">
                                <img src="<?=URL_PUBLIC?>frontend/images/image08.jpg" class="img-responsive" alt="">
                                <span class="thumb-info-title"> <span class="thumb-info-inner">The Fly</span> <span class="thumb-info-type">Logo</span> </span>
                                <span class="image-overlay"> <i class="fa fa-mail-forward circle-icon circle-main-color"></i> </span>
                            </a>
                        </div>
                    </li>

                    <li class="gap"></li>
                    <!-- "gap" elements fill in the gaps in justified grid -->
                </ul>
            </div>
        </section>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            $('#Grid').mixItUp();
        });
    </script>