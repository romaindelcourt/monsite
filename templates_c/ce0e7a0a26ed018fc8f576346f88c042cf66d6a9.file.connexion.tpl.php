<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 15:46:27
         compiled from "template/connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1078194065565479b7e58114-44725806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce0e7a0a26ed018fc8f576346f88c042cf66d6a9' => 
    array (
      0 => 'template/connexion.tpl',
      1 => 1448379982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1078194065565479b7e58114-44725806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_565479b7ea2cc6_91078781',
  'variables' => 
  array (
    'connexion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565479b7ea2cc6_91078781')) {function content_565479b7ea2cc6_91078781($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['connexion']->value)) {?>
    <div class="alert alert-error" id="notif">
    <?php echo $_smarty_tpl->tpl_vars['connexion']->value;?>

    </div>
<?php }?>
<h1>Connexion</h1>
    <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">

        <div class="clearfix">
            <label for="email">Email </label>
            <div class="input">
                <input type="text" name="email" id="email" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="mdp">Mots de passe </label>
            <div class="input">
                <input type="password" name="mdp" id="mdp"></textarea>
            </div>
        </div>

        <div class="form-actions">
            <input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary"/>
        </div>
    </form> <?php }} ?>
