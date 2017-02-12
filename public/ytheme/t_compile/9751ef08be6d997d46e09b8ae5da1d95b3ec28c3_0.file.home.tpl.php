<?php
/* Smarty version 3.1.31, created on 2017-02-12 16:12:09
  from "/var/www/default/public/ytheme/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58a08959130d17_65019776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9751ef08be6d997d46e09b8ae5da1d95b3ec28c3' => 
    array (
      0 => '/var/www/default/public/ytheme/home.tpl',
      1 => 1486915928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lists/youtube_items.tpl' => 1,
  ),
),false)) {
function content_58a08959130d17_65019776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92781822458a08959127989_83207906', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout/main.tpl');
}
/* {block 'content'} */
class Block_92781822458a08959127989_83207906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_92781822458a08959127989_83207906',
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
            <div class="youtube-items__container container">
                <?php $_smarty_tpl->_subTemplateRender('file:lists/youtube_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
