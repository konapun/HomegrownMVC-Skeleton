<?php /* Smarty version Smarty-3.1.16, created on 2015-09-10 16:55:01
         compiled from "views/error.html" */ ?>
<?php /*%%SmartyHeaderCode:79077305455f1aa8dca8fb2-24910169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33237d268e903588691b91cf61c143562d616b1e' => 
    array (
      0 => 'views/error.html',
      1 => 1441892567,
      2 => 'file',
    ),
    '14dafcfa1d59ed7716ddcf532902f7ae050f2cb8' => 
    array (
      0 => 'views/partials/wrapper.html',
      1 => 1441904073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79077305455f1aa8dca8fb2-24910169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55f1aa8dd056e6_17347074',
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f1aa8dd056e6_17347074')) {function content_55f1aa8dd056e6_17347074($_smarty_tpl) {?><!DOCTYPE html>
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
      
<div class="center">
	<h2 class="error">Error <?php echo $_smarty_tpl->tpl_vars['error_msg']->value;?>
</h2>
	<div class="error-body">
		<?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_body']->value)===null||$tmp==='' ? '' : $tmp);?>

	</div>
</div>

    </div>

    <footer class="footer">
      <?php echo $_smarty_tpl->getSubTemplate ("views/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </footer>

    
     
  </body>
</html>
<?php }} ?>
