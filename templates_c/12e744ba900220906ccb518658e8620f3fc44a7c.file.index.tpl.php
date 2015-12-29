<?php /* Smarty version Smarty-3.1.15, created on 2015-11-24 15:27:56
         compiled from "template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24412427056546d5faaa160-12769312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e744ba900220906ccb518658e8620f3fc44a7c' => 
    array (
      0 => 'template/index.tpl',
      1 => 1448378594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24412427056546d5faaa160-12769312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56546d5fb265d3_15185838',
  'variables' => 
  array (
    'tableauArticleSmarty' => 0,
    'tableau' => 0,
    'nbpage' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56546d5fb265d3_15185838')) {function content_56546d5fb265d3_15185838($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['tableau'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tableau']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tableauArticleSmarty']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tableau']->key => $_smarty_tpl->tpl_vars['tableau']->value) {
$_smarty_tpl->tpl_vars['tableau']->_loop = true;
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['tableau']->value['texte'];?>
</p>
    <img src="img/<?php echo $_smarty_tpl->tpl_vars['tableau']->value['id'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['tableau']->value['titre'];?>
" width="200px"/>
    <p><?php echo $_smarty_tpl->tpl_vars['tableau']->value['date_fr'];?>
</p>
    
<?php } ?>

<div class="pagination">
    <ul>
        <li><a>Page : </a></li>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['nbpage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nbpage']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>           
        <li><a href="index.php?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>         
        <?php }} ?>
    </ul>
</div>
<?php }} ?>
