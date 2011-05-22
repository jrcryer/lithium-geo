<?php
    echo $this->view()->render(
        array('element' => 'header'),
        array('back' => '/', 'title' => $store->title)
    );
?>
<section data-role="content">
    
</section>
<?php echo $this->view()->render(
    array('element' => 'footer')
); ?>