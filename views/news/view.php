<?php
include_once "views/layout/header.php";
?>
<main class="crowded_contacts">
<section class="news">
    <div class="container">
              <div class="row">
                <div class="col-sm-12 col-sm-12 col-xs-12">
                    <div class="news_promotion">
                        <h4> <?php echo $result['name']?></h4>
                        <p><?php echo $result['text']?></p>
                    </div>
                </div>
            </div>

    </div>

    <div class="container">

        <?php if(isset($result2)  and !empty($result2)):?>
        <?php foreach ($result2 as  $item):?>
        <div class="row">
            <div class="col-sm-12 col-sm-12 col-xs-12">
                <div class="news_promotion comments">
                    <h4> <?php echo $item['name']?></h4>
                    <p><?php echo $item['text']?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <?php endif;?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="news_add_comment">
                    <?php
                    include_once "views/layout/addcomment.php";
                    ?>
                </div>
            </div>
        </div>

</section>
</main>

<?php
include_once "views/layout/footer.php";
?>
