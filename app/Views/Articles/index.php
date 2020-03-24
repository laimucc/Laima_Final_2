<div class="overall">
<div class="container">
<h2>All articles</h2>

<div class="container-fluid">

<?php
foreach ($articles as $article) {
    $texts = $article->text;
    echo '<div class="container">
    <div class="row d-flex justify-content-start">
        <div class="col-2"><a href="?page=article&id=' . $article->id .'"><img src="' . $article->img . '" id="animalImg"></a>
        </div>
        <div class="col-10" id="articlesText">
            <a href="?page=article&id=' . $article->id . '">' . $article->title. '</a></br>' . substr($texts, 0, 1000) . '<a href="?page=article&id=' . $article->id .'"> ...continue reading></a>' . '
        </div>
    <div>
    </div>'; 
}
?>
</div>
</div>

</div>
</div>



<?php
// foreach ($articles as $article) {
//     echo '<li><a href="?page=article&id=' . $article->id . '">' . $article->title . '</a></li>';
// }
?>
