<div class="container">
    <h2><?= $article->title; ?></h2>
    <div class="row">
        <div class="col-6">
            <img src="<?php echo $article->img; ?>">
        </div>
        <div class="col-6">
            <p><?php echo $article->text; ?></p>

        </div>


    </div>

</div>




<!-- <div class="container-fluid" class="article" id="article">
    <div class="row">
        <div class="col-4">
            <?php ?>
        </div>
        <div class="col-8">
            <p>
                <?php 
                echo $article->text; 
                ?>
            </p>
        </div>
    </div>
</div> -->



<div class="container">
    <p><a href="?page=articles">Go back</p>
</div>
