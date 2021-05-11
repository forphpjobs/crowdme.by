<?php
include_once "views/layout/header.php";
?>
<main class="crowded_contacts">
<section class="news">
    <div class="container">
        <h1>Новости</h1>

            <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12  add_news">
                    <?php foreach ($result as $item): ?>
                    <div class="news_promotion offset">
                        <a href="news/<?php echo $item['id']?>" class="news_promotion_h4"><h4> <?php echo $item['name']?></h4></a>
                        <div class="news_text"><?php echo $item['opisanie']?></div>
                        <div class="news_wrapper">
                            <a href="news/<?php echo $item['id']?>" class="news_promotion_a">Далее</a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>

    </div>
</section>
</main>






<?php
include_once "views/layout/footer.php";
?>
