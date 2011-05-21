<?php
    echo $this->view()->render(
        array('element' => 'header'),
        array('back' => '/', 'title' => 'Find a showroom')
    );
?>
<section data-role="content">
    <form method="get" action="/stores/PostCodeSearch">
        <div data-role="fieldcontain">
            <label for="search">Town or Postcode</label>
            <input type="search" name="password" id="search" value="" />
        </div>
    </form>
</section>
