<?php /* Smarty version 2.6.18, created on 2012-04-03 19:50:11
         compiled from settings/edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_error', 'settings/edit.tpl', 2, false),)), $this); ?>
<?php if ($this->_tpl_vars['error']): ?>
<?php echo smarty_function_sb_error(array('text' => $this->_tpl_vars['errors']), $this);?>

<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'settings/inc/tabs.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="manager-content">
	<div class="manager-header">
		<img src="/images/admin/icons/settings.png" alt="" />
		<span><?php if ($this->_tpl_vars['request']->setting_id): ?>Редактирование<?php else: ?>Добавление<?php endif; ?> опции</span>
		<div class="manager-add">
			<a href="/manager/settings">
				<img src="/images/admin/back.png" alt="" />
				<span>Вернуться к меню</span>
			</a>
		</div>
	</div>
	<form action="/manager/settings/<?php if ($this->_tpl_vars['request']->setting_id): ?>save<?php else: ?>create-item<?php endif; ?>/" method="post" class="form" enctype="multipart/form-data">
		<?php if ($this->_tpl_vars['request']->setting_id): ?>
		<input name="id" value="<?php echo $this->_tpl_vars['request']->setting_id; ?>
" type="hidden" />
		<?php endif; ?>
		<div class="form-item">
			<label>Название:</label>
			<input type="text" id="title" name="name" value="<?php echo $this->_tpl_vars['request']->name; ?>
" />
		</div>
		<div class="form-item">
			<label>Значение:</label>
			<input type="text" name="value" value="<?php echo $this->_tpl_vars['request']->value; ?>
" />
		</div>
		<div class="form-item">
			<label>Заблокировать:</label>
			<select name="lock">
				<option value="0" <?php if ($this->_tpl_vars['request']->lock == 0): ?>selected<?php endif; ?>>Нет</option>
				<option value="1" <?php if ($this->_tpl_vars['request']->lock == 1): ?>selected<?php endif; ?>>Да</option>
			</select>
		</div>
		<div>
			<input type="submit" value="Сохранить" />
		</div>
	</form>
</div>