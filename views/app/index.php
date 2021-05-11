<?php
include_once "views/layout/header.php";
?>
<main class="crowded_contacts">
<section class="apps">
    <div class="container">
       <h1>Приложения</h1>
        <?php foreach ($result as $item): ?>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-xs-12">
                <div class="apps_promotion">
                    <a href="app/<?php echo $item['id']?>" class="apps_promotion_h4"><h4> <?php echo $item['name']?></h4></a>
                    <div class="apps_text"><?php echo $item['opisanie']?></div>
                    <div class="apps_wrapper">
                        <a href="app/<?php echo $item['id']?>" class="apps_promotion_a">Далее</a>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>
</main>






<?php
include_once "views/layout/footer.php";
?>
