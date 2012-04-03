<?php /* Smarty version 2.6.18, created on 2012-04-03 20:11:46
         compiled from default/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'default/index.tpl', 25, false),array('modifier', 'mb_strlen', 'default/index.tpl', 26, false),)), $this); ?>
<ul class="tabs">
	<li id="latest_tab" class="selected"><a href="javascript:void(0)">Новинки</a></li>
	<li id="stock_tab"><a href="javascript:void(0)">Акции</a></li>
	<li id="featured_tab"><a href="javascript:void(0)">Рекомендуем</a></li>
</ul>
<div class="page main">
	<div class="hp-catalog" id="latest">
		<div class="hp-catalog-cont">
			<?php $_from = $this->_tpl_vars['latest']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['latest'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['latest']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['prod']):
        $this->_foreach['latest']['iteration']++;
?>
			<div class="hp-catalog-item">
				<div class="hp-catalog-item-image">
                    <?php if ($this->_tpl_vars['prod']->image): ?>
                    <a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">
                        <img src="/images/products/<?php echo $this->_tpl_vars['prod']->image; ?>
" alt="<?php echo $this->_tpl_vars['prod']->img_alt; ?>
"/>
                    </a>
                    <?php else: ?>
                    <a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">
                        <img src="/images/default135.gif" alt="<?php echo $this->_tpl_vars['prod']->img_alt; ?>
" />
                    </a>
                    <?php endif; ?>
				</div>
				<div class="hp-catalog-item-content">
					<h1><a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
"><?php echo $this->_tpl_vars['prod']->title; ?>
</a></h1>
					<p>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->description)) ? $this->_run_mod_handler('truncate', true, $_tmp, 125, "...") : smarty_modifier_truncate($_tmp, 125, "...")); ?>

                        <?php if (mb_strlen($this->_tpl_vars['prod']->description) > 125): ?>
                            <a class="next-link" href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">далее</a>
                        <?php endif; ?>
                    </p>
					<div class="details">
                        <?php if ($this->_tpl_vars['prod']->color): ?>
						<strong>Цвет:</strong><?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->color)) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->consumption): ?>
						<strong>Расход:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->consumption)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->storage_time): ?>
						<strong>Cрок хранения:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->storage_time)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
 мес<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->durability): ?>
						<strong>Долговечность:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->durability)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>

                        <?php endif; ?>
					</div>
				</div>
			</div>
			<?php if ($this->_foreach['latest']['iteration'] % 2 == 0): ?><div class="divider"></div><?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
	<div class="hp-catalog" id="stock" style="display: none;">
		<div class="hp-catalog-cont">
			<?php $_from = $this->_tpl_vars['stock']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['stock'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['stock']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['prod']):
        $this->_foreach['stock']['iteration']++;
?>
			<div class="hp-catalog-item">
				<div class="hp-catalog-item-image">
					<?php if ($this->_tpl_vars['prod']->image): ?>
                    <a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">
                        <img src="/images/products/<?php echo $this->_tpl_vars['prod']->image; ?>
" alt="<?php echo $this->_tpl_vars['prod']->img_alt; ?>
"/>
                    </a>
                    <?php else: ?>
                    <a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">
                        <img src="/images/default135.gif" alt="<?php echo $this->_tpl_vars['prod']->img_alt; ?>
" />
                    </a>
                    <?php endif; ?>
				</div>
				<div class="hp-catalog-item-content">
					<h1><a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
"><?php echo $this->_tpl_vars['prod']->title; ?>
</a></h1>
					<p>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->description)) ? $this->_run_mod_handler('truncate', true, $_tmp, 125, "...") : smarty_modifier_truncate($_tmp, 125, "...")); ?>

                        <?php if (mb_strlen($this->_tpl_vars['prod']->description) > 125): ?>
                            <a class="next-link" href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">далее</a>
                        <?php endif; ?>
                    </p>
					<div class="details">
                        <?php if ($this->_tpl_vars['prod']->color): ?>
						<strong>Цвет:</strong><?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->color)) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->consumption): ?>
						<strong>Расход:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->consumption)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->storage_time): ?>
						<strong>Cрок хранения:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->storage_time)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
 мес<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->durability): ?>
						<strong>Долговечность:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->durability)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>

                        <?php endif; ?>
					</div>
				</div>
			</div>
			<?php if ($this->_foreach['stock']['iteration'] % 2 == 0): ?><div class="divider"></div><?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
	<div class="hp-catalog" id="featured" style="display: none;">
		<div class="hp-catalog-cont">
			<?php $_from = $this->_tpl_vars['featured']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['featured'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['featured']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['prod']):
        $this->_foreach['featured']['iteration']++;
?>
			<div class="hp-catalog-item">
				<div class="hp-catalog-item-image">
					<?php if ($this->_tpl_vars['prod']->image): ?>
                    <a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">
                        <img src="/images/products/<?php echo $this->_tpl_vars['prod']->image; ?>
" alt="<?php echo $this->_tpl_vars['prod']->img_alt; ?>
"/>
                    </a>
                    <?php else: ?>
                    <a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">
                        <img src="/images/default135.gif" alt="<?php echo $this->_tpl_vars['prod']->img_alt; ?>
" />
                    </a>
                    <?php endif; ?>
				</div>
				<div class="hp-catalog-item-content">
					<h1><a href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
"><?php echo $this->_tpl_vars['prod']->title; ?>
</a></h1>
					<p>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->description)) ? $this->_run_mod_handler('truncate', true, $_tmp, 125, "...") : smarty_modifier_truncate($_tmp, 125, "...")); ?>

                        <?php if (mb_strlen($this->_tpl_vars['prod']->description) > 125): ?>
                            <a class="next-link" href="/catalog/product/id/<?php echo $this->_tpl_vars['prod']->product_id; ?>
">далее</a>
                        <?php endif; ?>
                    </p>
					<div class="details">
                        <?php if ($this->_tpl_vars['prod']->color): ?>
						<strong>Цвет:</strong><?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->color)) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->consumption): ?>
						<strong>Расход:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->consumption)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->storage_time): ?>
						<strong>Cрок хранения:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->storage_time)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>
 мес<br />
                        <?php endif; ?>
                        <?php if ($this->_tpl_vars['prod']->durability): ?>
						<strong>Долговечность:</strong> <?php echo ((is_array($_tmp=$this->_tpl_vars['prod']->durability)) ? $this->_run_mod_handler('truncate', true, $_tmp, 40) : smarty_modifier_truncate($_tmp, 40)); ?>

                        <?php endif; ?>
					</div>
				</div>
			</div>
			<?php if ($this->_foreach['featured']['iteration'] % 2 == 0): ?><div class="divider"></div><?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		</div>
	</div>
</div>
<div class="page-corners"><div></div></div>
<div class="banner">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'inc/bottom-banner.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>