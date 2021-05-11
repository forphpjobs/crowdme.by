<?php foreach ($result as $item): ?>
    <div class="news_promotion offset">
        <a href="news/<?php echo $item['id']?>" class="news_promotion_h4"><h4> <?php echo $item['name']?></h4></a>
        <div class="news_text"><?php echo $item['opisanie']?></div>
        <div class="news_wrapper">
            <a href="news/<?php echo $item['id']?>" class="news_promotion_a">Далее</a>
        </div>
    </div>
<?php endforeach;?>