<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 14:15:57
         compiled from "template/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17487843815654711ddf1287-02028096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '235541ce9162c1e9232a451836a37fb553481383' => 
    array (
      0 => 'template/article.tpl',
      1 => 1448373093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17487843815654711ddf1287-02028096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5654711e17fde6_99200246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654711e17fde6_99200246')) {function content_5654711e17fde6_99200246($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['msg_error']->value)) {?>
    <div class="alert alert-error" id="notif">
    <?php echo $_smarty_tpl->tpl_vars['msg_error']->value;?>

    </div>
<?php }?>
<form action="article.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
        <div class="clearfix">
            <label for="titre">Titre: </label>
            <div class="input">
                <input type="text" name="titre" id="titre" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="texte">Texte: </label>
            <div class="textarea">
                <textarea name="texte" id="texte"></textarea>
            </div>
        </div>
        <div class="clearfix">
            <label for="image">Image: </label>
            <div class="input">
                <input type="file" name="image" id="image"/>
            </div>
        </div>
        <br/>
        <div class="clearfix">
            <label for="publie">Publie: </label>
            <div class="input">
                <input type="checkbox" name="publie" id="publie" value="1"/>
            </div>
        </div>
        <br/>
        <div class="form-actions">
            <input type="submit" name="envoyer" value="envoyer" class="btn btn-large btn-primary"/>
        </div>
    </form> <?php }} ?>
