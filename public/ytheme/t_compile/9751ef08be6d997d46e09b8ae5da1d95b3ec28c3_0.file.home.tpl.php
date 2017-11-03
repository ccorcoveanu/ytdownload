<?php
/* Smarty version 3.1.31, created on 2017-09-08 13:40:07
  from "/var/www/default/public/ytheme/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59b29db784a229_74013026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9751ef08be6d997d46e09b8ae5da1d95b3ec28c3' => 
    array (
      0 => '/var/www/default/public/ytheme/home.tpl',
      1 => 1504878005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/loader.tpl' => 1,
    'file:partials/video-actions.tpl' => 1,
  ),
),false)) {
function content_59b29db784a229_74013026 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14612500959b29db7829f41_79333530', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout/main.tpl');
}
/* {block 'content'} */
class Block_14612500959b29db7829f41_79333530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14612500959b29db7829f41_79333530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper wrapper--main">
        <div class="hero__container hero__container--filter" style="">

        </div>

    </div>

    <div class="wrapper--app">
        <div class="wrapper--app__header">
            <div class="icon__container">

            </div>
            <div class="actual-icon__container">
                <a href="javascript:;" class="withripple js-search__button">
                    <i class="material-icons" class="js-open" data-action="search">fingerprint</i>
                </a>

            </div>

            <form class="searchbox" method="get" action="">
                <input type="text" class="searchbox__textfield js-searchbox__textfield" name="url" placeholder="Take a shot with a Youtube playlist" autocomplete="off" autofocus/>
            </form>
        </div>
        <div class="wrapper--app__content">
            <?php $_smarty_tpl->_subTemplateRender('file:partials/loader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="shared-content__container container"></div>
            <?php $_smarty_tpl->_subTemplateRender('file:partials/video-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="youtube-items__container container">

            </div>

        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['playlist_route']) {?><iframe style="display: none" src="yt-dl/<?php echo $_smarty_tpl->tpl_vars['page']->value['playlist_route'];?>
"></iframe><?php }
}
}
/* {/block 'content'} */
}
