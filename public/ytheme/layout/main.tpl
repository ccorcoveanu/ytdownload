<!DOCTYPE html>
<html lang="en">
<head>
    {block name='head'}
        {include file='partials/head.tpl'}
    {/block}
    {block name='styles'}
        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="/ytheme/assets/libs/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/ytheme/assets/libs/css/material-kit.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/ytheme/assets/build/style.min.css"/>
    {/block}
</head>
<body class="{$page.body_classes|default:''}">
    {block name='header'}
        {include file='partials/header.tpl'}
    {/block}
    <main class="main">
        {block name='content'}<h1>Hello there! You reached the default content</h1>{/block}
    </main>
    {block name='footer'}
        {include file='partials/footer.tpl'}
    {/block}
    {block name='scripts'}
        <script defer src="/ytheme/assets/libs/js/jquery.min.js" type="text/javascript"></script>
        <script defer src="/ytheme/assets/libs/js/bootstrap.min.js" type="text/javascript"></script>
        <script defer src="/ytheme/assets/libs/js/material.min.js"></script>
        <script defer src="/ytheme/assets/libs/js/material-kit.js" type="text/javascript"></script>
        <script defer src="/ytheme/assets/libs/js/bootstrap.notify.js" type="text/javascript"></script>
        <script defer src="/ytheme/assets/build/app.js"></script>
    {/block}
</body>
</html>