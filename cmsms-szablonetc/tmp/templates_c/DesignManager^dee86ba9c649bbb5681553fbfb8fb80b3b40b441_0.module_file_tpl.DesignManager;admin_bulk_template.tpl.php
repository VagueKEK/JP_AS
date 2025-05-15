<?php
/* Smarty version 3.1.31, created on 2025-05-15 18:09:23
  from "module_file_tpl:DesignManager;admin_bulk_template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_682611b39fa450_48317633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dee86ba9c649bbb5681553fbfb8fb80b3b40b441' => 
    array (
      0 => 'module_file_tpl:DesignManager;admin_bulk_template.tpl',
      1 => 1747324489,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682611b39fa450_48317633 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_form_start')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.form_start.php';
if (!is_callable('smarty_function_form_end')) require_once 'C:\\xampp\\htdocs\\cmsms\\lib\\plugins\\function.form_end.php';
?>
<h3><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang($_smarty_tpl->tpl_vars['bulk_op']->value);?>
</h3>

<?php if (isset($_smarty_tpl->tpl_vars['templates']->value)) {?>
<table class="pagetable">
  <thead>
   <tr>
     <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_id');?>
</th>
     <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_name');?>
</th>
     <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_type');?>
</th>
     <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_owner');?>
</th>
     <th><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('prompt_modified');?>
</th>
   </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'tpl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tpl']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_id();?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_name();?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_type_id();?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['tpl']->value->get_owner_id();?>
</td>
      <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tpl']->value->get_modified(),'%x %X');?>
</td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </tbody>
</table>
<?php }?>

<?php echo smarty_function_form_start(array('allparms'=>$_smarty_tpl->tpl_vars['allparms']->value),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['bulk_op']->value == 'bulk_action_delete') {?>
  <div class="pagewarning"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('warn_bulk_delete_templates');?>
</div>
  <div class="pageoverflow">
    <p class="pagetext"></p>
    <p class="pageinput">
      <input id="check1" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
check1" value="1"/>&nbsp;<label for="check1"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_bulk_template_1');?>
</label><br/>
      <input id="check2" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
check2" value="1"/>&nbsp;<label for="check2"><?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('confirm_bulk_template_2');?>
</label>
    </p>
  </div>
<?php }?>

<div class="pageoverflow">
  <p class="pagetext"></p>
  <p class="pageinput">
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
submit" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('submit');?>
"/>
    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['actionid']->value;?>
cancel" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value->Lang('cancel');?>
"/>
  </p>
</div>
<?php echo smarty_function_form_end(array(),$_smarty_tpl);
}
}
