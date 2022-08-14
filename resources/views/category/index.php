<?php foreach ($categoriesList as $key => $category): ?>
    <?php if ($key != 0): ?>
        <a href="<?=route('newslist.index', ['cat_id' => $key])?>"><?=$category?></a><br>
    <?php endif; ?>
<?php endforeach; ?>
    <br>
    <a href="<?=route('newslist.index', ['cat_id' => 0, ])?>"><?=$categoriesList[0]?></a><br>
