<?php
/* Smarty version 3.1.31, created on 2025-05-15 19:38:55
  from "module_file_tpl:CmsJobManager;defaultadmin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_682626af2e88f0_91669052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9b102d05511755619a1836df95d6ed7dce2a8f1' => 
    array (
      0 => 'module_file_tpl:CmsJobManager;defaultadmin.tpl',
      1 => 1747324489,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682626af2e88f0_91669052 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\smarty\\plugins\\function.cycle.php';
if (!is_callable('smarty_modifier_relative_time')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\modifier.relative_time.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\smarty\\plugins\\modifier.date_format.php';
echo '<script'; ?>
 type="text/javascript">
$(document).ready(function(){
  $('#simple1').click(function(ev){
     ev.preventDefault();
     cms_confirm('woot it works');
  });
});
<?php echo '</script'; ?>
>

<div class="information"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_background_jobs');?>
</div>

<?php if (!count($_smarty_tpl->tpl_vars['jobs']->value)) {?>
  <div style="text-align: center;">
    <div class="information"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('info_no_jobs');?>
</div>
  </div>
<?php } else { ?>
  <table class="pagetable">
    <thead>
      <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('name');?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('module');?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('created');?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('start');?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('frequency');?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('until');?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('errors');?>
</th>
		<th class="pageicon"></th>
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jobs']->value, 'job');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['job']->value) {
?>
      <tr class="<?php echo smarty_function_cycle(array('values'=>'row1,row2'),$_smarty_tpl);?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['job']->value->name;?>
</td>
		<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['job']->value->module)===null||$tmp==='' ? '' : $tmp);?>
</td>
		<td><?php echo smarty_modifier_relative_time($_smarty_tpl->tpl_vars['job']->value->created);?>
</td>
		<td>
		   <?php if ($_smarty_tpl->tpl_vars['job']->value->start < time()-$_smarty_tpl->tpl_vars['async_freq']->value) {?><span style="color: red;">
			   <?php } elseif ($_smarty_tpl->tpl_vars['job']->value->start < time()+$_smarty_tpl->tpl_vars['async_freq']->value) {?><span style="color: green;">
		   <?php } else { ?><span>
		   <?php }?>
			 <?php echo smarty_modifier_relative_time($_smarty_tpl->tpl_vars['job']->value->start);?>

		   </span>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['recur_list']->value[$_smarty_tpl->tpl_vars['job']->value->frequency];?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['job']->value->until) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job']->value->until,'%x %X');
}?></td>
		<td><?php if ($_smarty_tpl->tpl_vars['job']->value->errors > 0) {?><span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['job']->value->errors;?>
</span><?php }?></td>
		<td></td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    </tbody>
  </table>
<?php }?>


<?php }
}
