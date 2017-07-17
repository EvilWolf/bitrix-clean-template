<?php
use Bitrix\Main\Page\Asset;
$Asset = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title><?= $APPLICATION->ShowTitle(); ?></title>
	<?= $APPLICATION->ShowHead(); ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic-ext" rel="stylesheet">

	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- PACE.js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/red/pace-theme-minimal.min.css" />

	<!-- Add you library here -->
	<? $Asset->addJs(SITE_TEMPLATE_PATH . "/js/main.js"); ?>
	<? $Asset->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap-grid.css"); ?>
	<? $Asset->addCss(SITE_TEMPLATE_PATH . "/css/main.css"); ?>

</head>
<body>
<div id="panel"><?= $APPLICATION->ShowPanel(); ?></div>