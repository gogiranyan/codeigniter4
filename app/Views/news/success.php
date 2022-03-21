News item created successfully.

<?php if (!empty($info) && is_array($info)): ?>

<?php foreach ($info as $info_item): ?>

    <h3><?=esc($$info_item['name'])?></h3>

    <div class="main">
        <?=esc($news_item['account'])?>
    </div>
    <p><a href="/news/<?=esc($news_item['accont'], 'url')?>">View article</a></p>

<?php endforeach;?>
<?php else: ?>

<h3>No News</h3>

<p>Unable to find any news for you.</p>

<?php endif?>