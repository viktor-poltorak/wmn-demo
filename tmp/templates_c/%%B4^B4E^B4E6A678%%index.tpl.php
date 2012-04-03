<?php /* Smarty version 2.6.18, created on 2012-04-03 19:50:15
         compiled from settings/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'settings/index.tpl', 8, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'settings/inc/tabs.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="manager-content">
	<div class="manager-header">
		<img src="/images/admin/icons/settings.png" alt="" />
		<span>Настройки</span>
	</div>
	<?php $_from = $this->_tpl_vars['settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
	<div class="manager-list<?php echo smarty_function_cycle(array('values' => ', gray-bg'), $this);?>
">
		<div class="manager-list-image">
			<img src="/images/admin/star.png" alt="" />
		</div>
		<div class="manager-list-content">
			<a href="/manager/settings/edit/id/<?php echo $this->_tpl_vars['item']->setting_id; ?>
/"><?php echo $this->_tpl_vars['item']->name; ?>
</a>&nbsp;&nbsp;&nbsp;
			<span class="manager-list-meta"><?php echo $this->_tpl_vars['item']->value; ?>
</span>
			<span class="manager-list-meta"><?php echo $this->_tpl_vars['item']->comment; ?>
</span>
		</div>
		<div class="manager-list-controls">
			<a href="/manager/settings/edit/id/<?php echo $this->_tpl_vars['item']->setting_id; ?>
">
				<img src="/images/admin/edit.png" alt="Редактировать" />
			</a>
			<?php if ($this->_tpl_vars['item']->lock == 0): ?>
			<a href="/manager/settings/delete/id/<?php echo $this->_tpl_vars['item']->setting_id; ?>
">
				<img src="/images/admin/delete.png" alt="Удалить" />
			</a>
			<?php endif; ?>
		</div>
	</div>
	<?php endforeach; else: ?>
	<div class="manager-list">
		<div class="manager-list-image">
			<img src="/images/admin/star-off.png" alt="" />
		</div>
		<div class="manager-list-content">
			Никаких настроек нет.
		</div>
	</div>
	<?php endif; unset($_from); ?>
</div>