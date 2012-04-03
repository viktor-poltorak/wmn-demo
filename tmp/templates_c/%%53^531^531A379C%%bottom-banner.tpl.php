<?php /* Smarty version 2.6.18, created on 2012-04-03 20:11:46
         compiled from inc/bottom-banner.tpl */ ?>
<?php if ($this->_tpl_vars['settings']->bottomBanner != ''): ?>
    <?php if ($this->_tpl_vars['bottomBannerFlash']): ?>
        <object width="710" height="174" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
            <param value="/upload/<?php echo $this->_tpl_vars['settings']->bottomBanner; ?>
" name="movie">
            <param value="high" name="quality" >
	    <param value="transparent" name="wmode" >
            <embed wmode="transparent" width="710" height="174" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="/upload/<?php echo $this->_tpl_vars['settings']->bottomBanner; ?>
">
        </object>
    <?php else: ?>
        <img src="/upload/<?php echo $this->_tpl_vars['settings']->bottomBanner; ?>
" alt="" />
    <?php endif; ?>
<?php endif; ?>