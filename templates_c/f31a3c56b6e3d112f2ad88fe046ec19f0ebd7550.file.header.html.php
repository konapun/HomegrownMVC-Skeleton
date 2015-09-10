<?php /* Smarty version Smarty-3.1.16, created on 2015-09-10 16:53:36
         compiled from "views/includes/header.html" */ ?>
<?php /*%%SmartyHeaderCode:192962441355f1aa8dd07536-30217022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31a3c56b6e3d112f2ad88fe046ec19f0ebd7550' => 
    array (
      0 => 'views/includes/header.html',
      1 => 1441904008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192962441355f1aa8dd07536-30217022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55f1aa8dd078a7_77435825',
  'variables' => 
  array (
    'homeActive' => 0,
    'aboutActive' => 0,
    'contactActive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f1aa8dd078a7_77435825')) {function content_55f1aa8dd078a7_77435825($_smarty_tpl) {?><nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">HomegrownMVC Skeleton</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['homeActive']->value)===null||$tmp==='' ? '' : $tmp);?>
"><a href="/">Home</a></li>
        <li class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['aboutActive']->value)===null||$tmp==='' ? '' : $tmp);?>
"><a href="/about">About</a></li>
        <li class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['contactActive']->value)===null||$tmp==='' ? '' : $tmp);?>
"><a href="/contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php }} ?>
