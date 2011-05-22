<?php

echo $this->view()->render(
        array('element' => 'header'),
        array('back' => '/', 'title' => 'Map')
);
?>
<section data-role="content">
    <div id="map_canvas"></div>
    <?= $this->html->script('/js/stores.map'); ?>
</section>
<?php

echo $this->view()->render(
        array('element' => 'footer')
);
?>
