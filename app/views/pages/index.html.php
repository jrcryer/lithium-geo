<?php echo $this->view()->render(
    array('element' => 'header'),
    array('back' => false, 'title' => 'Find a showroom')
); ?>
<section data-role="content">
    <ul data-role="listview" data-inset="true">
        <li><?php echo $this->html->link('Search', '/stores/search') ?></li>
    </ul>
    <ul data-role="listview" data-inset="true">
        <li><?php echo $this->html->link('Near you', '/stores/nearme') ?></li>

    </ul>
    <ul data-role="listview" data-inset="true">
        <li><?php echo $this->html->link('Map', '/stores/map') ?></li>
    </ul>
    <ul data-role="listview" data-inset="true">
        <li><?php echo $this->html->link('Browse by region', '/stores/regions') ?></li>
    </ul>
</section>
<?php echo $this->view()->render(
    array('element' => 'footer')
); ?>