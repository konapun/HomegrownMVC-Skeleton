<?php /* Smarty version Smarty-3.1.16, created on 2015-09-10 16:53:01
         compiled from "views/about.html" */ ?>
<?php /*%%SmartyHeaderCode:155871627455f1b56dce1319-28932706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9be0f0cbfd29d8607f27dd1b57204b49892ba4e' => 
    array (
      0 => 'views/about.html',
      1 => 1441903958,
      2 => 'file',
    ),
    '14dafcfa1d59ed7716ddcf532902f7ae050f2cb8' => 
    array (
      0 => 'views/partials/wrapper.html',
      1 => 1441903624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155871627455f1b56dce1319-28932706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55f1b56dcfdce3_89548608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f1b56dcfdce3_89548608')) {function content_55f1b56dcfdce3_89548608($_smarty_tpl) {?><!DOCTYPE html>
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
      
	<h1>About</h1>
  <p>
    About...
  </p>

    </div>

    <footer>
      <?php echo $_smarty_tpl->getSubTemplate ("views/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </footer>

    
     
  </body>
</html>
<?php }} ?>
