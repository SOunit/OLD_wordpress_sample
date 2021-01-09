<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- word press の管理画面で設定した内容を反映するコード -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>