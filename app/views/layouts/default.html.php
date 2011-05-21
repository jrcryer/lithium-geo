<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2010, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Store locator<?php echo $this->title(); ?></title>
	<?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.css" />
        <?php echo $this->html->style(array('debug', 'main')); ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a4.1/jquery.mobile-1.0a4.1.min.js"></script>
        <?php echo $this->scripts(); ?>
</head>
<body class="app">
    <div data-role="page">
        <header data-role="header">
            <h1>Store locator</h1>
        </header>
        <section data-role="content">
            <?php $this->content() ?>
        </section>
        <footer data-role="footer">
            <h4>Store &copy;</h4>
        </footer>
    </div>
    <?php echo $this->content(); ?>
</body>
</html>