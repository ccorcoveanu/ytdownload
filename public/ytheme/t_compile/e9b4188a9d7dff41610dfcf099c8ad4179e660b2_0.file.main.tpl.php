<?php
/* Smarty version 3.1.31, created on 2017-02-05 14:27:49
  from "/var/www/default/public/ytheme/layout/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58973665afe7e3_24040635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b4188a9d7dff41610dfcf099c8ad4179e660b2' => 
    array (
      0 => '/var/www/default/public/ytheme/layout/main.tpl',
      1 => 1486304868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_58973665afe7e3_24040635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132840012258973665ac44d6_51813764', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53265474158973665ad4293_58480833', 'styles');
?>

</head>
<body class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['body_classes'])===null||$tmp==='' ? '' : $tmp);?>
">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57564904258973665af52a9_89126208', 'header');
?>

    <main class="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44101498058973665af8016_34343499', 'content');
?>

    </main>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45067063458973665af9ad5_14582037', 'footer');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34479753558973665afc458_17069680', 'scripts');
?>

</body>
</html><?php }
/* {block 'head'} */
class Block_132840012258973665ac44d6_51813764 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_132840012258973665ac44d6_51813764',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_53265474158973665ad4293_58480833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_53265474158973665ad4293_58480833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="/ytheme/assets/libs/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/ytheme/assets/libs/css/material-kit.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/ytheme/assets/build/style.min.css"/>
    <?php
}
}
/* {/block 'styles'} */
/* {block 'header'} */
class Block_57564904258973665af52a9_89126208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_57564904258973665af52a9_89126208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_44101498058973665af8016_34343499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_44101498058973665af8016_34343499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Hello there! You reached the default content</h1><?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_45067063458973665af9ad5_14582037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_45067063458973665af9ad5_14582037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php
}
}
/* {/block 'footer'} */
/* {block 'scripts'} */
class Block_34479753558973665afc458_17069680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_34479753558973665afc458_17069680',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 defer src="/ytheme/assets/libs/js/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 defer src="/ytheme/assets/libs/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 defer src="/ytheme/assets/libs/js/material.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 defer src="/ytheme/assets/libs/js/material-kit.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 defer src="/ytheme/assets/build/app.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block 'scripts'} */
}
