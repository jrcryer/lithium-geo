<?= $this->view()->render(
        array('element' => 'header'),
        array('back' => '/', 'title' => 'Regions')
    );
?>
<section data-role="content">
    <ul data-role="listview" data-inset="true">
        <?php foreach($regions as $region) { ?>
        <li>
            <?= $this->html->link($region->name, "../stores/region/{$region->name}"); ?>
            <span class="ui-li-count"><?php echo $region->count; ?> showrooms</span>
        </li>
        <?php } ?>
    </ul>
</section>
<?= $this->view()->render(
    array('element' => 'footer')
); ?>