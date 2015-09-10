<?php /* Smarty version Smarty-3.1.16, created on 2015-09-10 16:55:01
         compiled from "views/home.html" */ ?>
<?php /*%%SmartyHeaderCode:171686390755f1ab498bd3d3-95418458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40238c1b3017c10fb3d6ec98a563c330fe5e3a46' => 
    array (
      0 => 'views/home.html',
      1 => 1441903980,
      2 => 'file',
    ),
    '14dafcfa1d59ed7716ddcf532902f7ae050f2cb8' => 
    array (
      0 => 'views/partials/wrapper.html',
      1 => 1441904073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171686390755f1ab498bd3d3-95418458',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55f1ab498f68a5_90293344',
  'variables' => 
  array (
    'TITLE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f1ab498f68a5_90293344')) {function content_55f1ab498f68a5_90293344($_smarty_tpl) {?><!DOCTYPE html>
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
      
	<h1>Home</h1>
  <p>
    Home...
  </p>

    </div>

    <footer class="footer">
      <?php echo $_smarty_tpl->getSubTemplate ("views/includes/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </footer>

    
     
  </body>
</html>
<?php }} ?>
