<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-05 20:43:16
         compiled from "/opt/workbench/PlanB/app/views/smarty/test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8518739455487e0ad57a09-81829122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8b6a720135867a148906cc7b1bf954fd013aaf1' => 
    array (
      0 => '/opt/workbench/PlanB/app/views/smarty/test.tpl',
      1 => 1430829794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8518739455487e0ad57a09-81829122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55487e0ad6e6c1_13379019',
  'variables' => 
  array (
    'data' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55487e0ad6e6c1_13379019')) {function content_55487e0ad6e6c1_13379019($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_edu_worker')) include '/opt/workbench/PlanB/app/smarty_plugin/function.get_edu_worker.php';
?>




<?php echo smarty_function_get_edu_worker(array('start'=>31,'end'=>40,'assign'=>'data'),$_smarty_tpl);?>

<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	<li>我叫<a href="javascript:alert('我的id是:<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a></li>
<?php } ?>
<?php }} ?>
