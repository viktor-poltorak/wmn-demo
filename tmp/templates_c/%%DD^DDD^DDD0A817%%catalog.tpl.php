<?php /* Smarty version 2.6.18, created on 2012-04-03 20:11:46
         compiled from inc/catalog.tpl */ ?>
<div class="catalog">
	<h1>Каталог товаров</h1>
	<div class="catalog-accord">
		<img src="/images/catalog-top.png" alt="" id="catalog-corners" />
		<div class="catalog-content">
			<a href="javascript:" class="by-category" id="by-category">По категориям товаров</a>
			<a href="javascript:" class="by-manufacturer" id="by-manufacturer">По производителям</a>
			<div id="by-category-content" class="catalog-list">
				<ul>
					<?php $_from = $this->_tpl_vars['side_categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
					<li>
                        <a <?php if ($this->_tpl_vars['curCategory'] == $this->_tpl_vars['cat']->category_id): ?>class="cur"<?php endif; ?> href="/catalog/category/id/<?php echo $this->_tpl_vars['cat']->category_id; ?>
" onclick="javascript:void(0);"><?php echo $this->_tpl_vars['cat']->name; ?>
</a>
                    </li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<div id="by-manufacturer-content" class="catalog-list">
				<ul>
					<?php $_from = $this->_tpl_vars['producers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['prod']):
?>
					<li>
                        <a <?php if ($this->_tpl_vars['prodId'] == $this->_tpl_vars['prod']->category_id): ?>class="cur"<?php endif; ?> href="/catalog/manufacturer/id/<?php echo $this->_tpl_vars['prod']->category_id; ?>
"><?php echo $this->_tpl_vars['prod']->name; ?>
</a>
                    </li>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		</div>
		<img src="/images/catalog-bottom.png" alt="" />
	</div>
</div>
<?php if ($this->_tpl_vars['curCategory']): ?>
<script>
    <?php echo '
    //Customer kill yourself
    $(function () {
        $(\'#by-category\').click();
    });
    
    '; ?>

</script>
<?php endif; ?>