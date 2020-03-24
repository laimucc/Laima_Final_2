<div class="overall">
<div class="container">
<h2>Some posts</h2>
<ul>
    <?php
        foreach ($posts as $post) {
            echo '<li><a href="?page=post&id=' . $post->id . '">' . $post->title . '</a></li>';
        }
    ?>
</ul>
</div>
</div>