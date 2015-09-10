<?php /* Smarty version Smarty-3.1.16, created on 2015-09-10 16:53:37
         compiled from "views/contact.html" */ ?>
<?php /*%%SmartyHeaderCode:77522204155f1b570ec51d6-58909843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52a5dc8db82b2790bd0f52a46b0d1ea9b205d745' => 
    array (
      0 => 'views/contact.html',
      1 => 1441903992,
      2 => 'file',
    ),
    '14dafcfa1d59ed7716ddcf532902f7ae050f2cb8' => 
    array (
      0 => 'views/partials/wrapper.html',
      1 => 1441903624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77522204155f1b570ec51d6-58909843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55f1b570eeac33_59970626',
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f1b570eeac33_59970626')) {function content_55f1b570eeac33_59970626($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['TITLE']->value)===null||$tmp==='' ? 'HomegrownMVC Skeleton' : $tmp);?>
</title>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/styles.css">
    
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/app.js"></script>
    
  </head>
  <body>
    <header>
      <?php echo $_smarty_tpl->getSubTemplate ("views/includes/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </header>

    
    <div class="container">
      
	<h1>Contact</h1>
  <p>
    Contact...
  </p>

    </div>

    <footer>
      <?php echo $_smarty_tpl->getSubTemplate ("views/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </footer>

    
     
  </body>
</html>
<?php }} ?>
