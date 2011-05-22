<?php
    echo $this->view()->render(
        array('element' => 'header'),
        array('back' => '/', 'title' => $region)
    );
?>
<section data-role="content">
    <ul data-role="listview" data-inset="true">
        <?php foreach($showrooms as $store) { ?>
        <li>
            <?php echo $this->html->link($store->title, "/store/{$store->title}"); ?>
        </li>
        <?php } ?>
    </ul>
</section>
<?php echo $this->view()->render(
    array('element' => 'footer')
); ?>