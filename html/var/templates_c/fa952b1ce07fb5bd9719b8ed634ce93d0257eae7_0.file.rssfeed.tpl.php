<?php
/* Smarty version 3.1.47, created on 2022-12-16 11:17:20
  from '/var/www/html/modules/dashboard/applets/News/tpl/rssfeed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_639c7df0af1059_15110577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa952b1ce07fb5bd9719b8ed634ce93d0257eae7' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/News/tpl/rssfeed.tpl',
      1 => 1637330690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639c7df0af1059_15110577 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" media="screen" type="text/css" href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/News/tpl/css/styles.css" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEWS_LIST']->value, 'NEWS_ITEM');
$_smarty_tpl->tpl_vars['NEWS_ITEM']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['NEWS_ITEM']->value) {
$_smarty_tpl->tpl_vars['NEWS_ITEM']->do_else = false;
?>
<div class="neo-applet-news-row">
    <span class="neo-applet-news-row-date"><?php echo $_smarty_tpl->tpl_vars['NEWS_ITEM']->value['date_format'];?>
</span>
    <a href="https://twitter.com/share?original_referer=<?php echo rawurlencode($_smarty_tpl->tpl_vars['WEBSITE']->value);?>
&related=&source=tweetbutton&text=<?php echo rawurlencode($_smarty_tpl->tpl_vars['NEWS_ITEM']->value['title']);?>
&url=<?php echo rawurlencode($_smarty_tpl->tpl_vars['NEWS_ITEM']->value['link']);?>
&via=issabelGui"  target="_blank">
        <i class="fa fa-twitter" style="color:#4099FF;"></i>
    </a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['NEWS_ITEM']->value['link'];?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['NEWS_ITEM']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
</div>
<?php
}
if ($_smarty_tpl->tpl_vars['NEWS_ITEM']->do_else) {
?>
<div class="neo-applet-news-row"><?php echo $_smarty_tpl->tpl_vars['NO_NEWS']->value;?>
</div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
