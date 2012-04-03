<?php /* Smarty version 2.6.18, created on 2012-04-03 19:50:15
         compiled from settings/inc/tabs.tpl */ ?>
<ul class="manager-tabs">
	<li <?php if ($this->_tpl_vars['tab'] == 'index'): ?> class="tab-selected" <?php endif; ?>><a href="/manager/settings/">Все опции</a></li>
	<li <?php if ($this->_tpl_vars['tab'] == 'add'): ?> class="tab-selected"<?php endif; ?>><a href="/manager/settings/add/">Добавить опцию</a></li>
</ul>