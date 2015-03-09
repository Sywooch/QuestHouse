<div class="container">
    <h1 class="page-title">Gallery 2 Columns</h1>
</div>




<div class="container">
    <div id="popup-gallery">
        <div class="row row-col-gap">


            <?php foreach($quest_model as $key): ?>
                <?php /*print_r($key)*/?>
                <div class="col-md-6">
                    <a class="hover-img popup-gallery-image" href="/QuestHouse/backend/web/images/quest-images/tets Quest/<?=$key['quest_logo'].'"' ?> data-effect="mfp-zoom-out">
                        <img src="/QuestHouse/backend/web/images/quest-images/tets Quest/<?=$key['quest_logo'].'"' ?> alt="Image Alternative text" title="Gaviota en el Top" />
                        <i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                        <div style="top: 10%; left: 10%; position: absolute; color: red;"><?=$key['quest_description']?></div>
                        <div style="top: 10%; left: 50%; position: absolute; color: red;"><?=$key['quest_logo']?></div>
                        <div style="top: 70%; left: 40%; position: absolute;">
                            <img src="img/logo-white.png" alt="Image Alternative text" title="Gaviota en el Top" />
                        </div>
                    </a>
                </div>
            <?php endforeach ?>



            <!--<div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Sydney Harbour" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Street" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/400x300.png" data-effect="mfp-zoom-out">
                    <img src="img/400x300.png" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="lack of blue depresses me" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="waipio valley" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="the best mode of transport here in maldives" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Viva Las Vegas" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="El inevitable paso del tiempo" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="new york at an angle" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>
            <div class="col-md-6">
                <a class="hover-img popup-gallery-image" href="img/800x600.png" data-effect="mfp-zoom-out">
                    <img src="img/800x600.png" alt="Image Alternative text" title="196_365" /><i class="fa fa-plus round box-icon-small hover-icon i round"></i>
                </a>
            </div>-->
        </div>
    </div>
</div>