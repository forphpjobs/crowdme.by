<?php
include_once "views/layout/header.php";
?>
<main class="crowded_contacts">
<section class="app">
    <div class="container">


            <div class="app_title">
                <h4 class="app_title_text"> <?php echo $result['name']?></h4>
            </div>


        <div class="row app_opisanie">
            <div class="col-sm-12 col-md-6 ">
                <div class="app_opisanie_img <?php echo $result['css']?>">

                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="app_opisanie_text">
                    <div><?php echo $result['text']?></div>
                </div>
                <div class="app_opisanie_btn">
                    <a href="<?php echo $result['link']?>" target="_blank" class="app_opisanie_btn_link">скачать</a>
                </div>
            </div>


        </div>

    </div>
</section>
</main>






<?php
include_once "views/layout/footer.php";
?>
