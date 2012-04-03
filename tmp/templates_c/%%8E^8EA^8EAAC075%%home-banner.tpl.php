<?php /* Smarty version 2.6.18, created on 2012-04-03 20:11:46
         compiled from default/inc/home-banner.tpl */ ?>
<?php if ($this->_tpl_vars['settings']->useFlashMainBanner == 0): ?> 
    <script>
        <?php if ($this->_tpl_vars['banners']): ?>
        var bannerData = <?php echo $this->_tpl_vars['banners']; ?>
;
        <?php else: ?>
        var bannerData = <?php echo '{}'; ?>
;
        <?php endif; ?>

        <?php echo '

        $(function () {
            $(\'#home-banners\').agile_carousel({
                carousel_data: bannerData,
                carousel_outer_height: 210,
                carousel_height: 210,
                slide_height: 210,
                carousel_outer_width: 919,
                slide_width: 919,
                transition_type: "fade",
                timer: 4000
            });
        });
        '; ?>

    </script>
<?php endif; ?>

<div class="home-banner">
    <table>
        <tr>
            <td><img src="/images/banner-top-left.png" alt="" /></td>
            <td class="banner-top-bg"></td>
            <td><img src="/images/banner-top-right.png" alt="" /></td>
        </tr>
        <tr>
            <td class="banner-left-bg"></td>
            <td class="banner-content">
                <div class="banner-image" id="home-banners">
                    <?php if ($this->_tpl_vars['settings']->useFlashMainBanner == 1 && $this->_tpl_vars['banners']): ?>                        
                        <object width="912" height="206" 
                                codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" 
                                classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
                            <param value="/upload/<?php echo $this->_tpl_vars['banners']->file; ?>
" name="movie">
                            <param value="high" name="quality" >
                            <param value="transparent" name="wmode" >
                            <embed wmode="transparent" width="912" height="206"
                                type="application/x-shockwave-flash" 
                                pluginspage="http://www.macromedia.com/go/getflashplayer" 
                                quality="high" src="/upload/<?php echo $this->_tpl_vars['banners']->file; ?>
">
                        </object>
                    <?php endif; ?>
                </div>
                <div class="carousel-holder">
                    <a href="javascript:" id="carousel-prev"><img src="/images/button-prev.png" alt="" /></a>
                    <div class="carousel" id="carousel">
                        <ul class="scrolls">
                            <?php $_from = $this->_tpl_vars['categoriesScroll']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
                            <li class="carousel-item">
                                <div class="carousel-image">
                                    <a href="/catalog/category/id/<?php echo $this->_tpl_vars['cat']->category_id; ?>
">
                                        <?php if ($this->_tpl_vars['cat']->image != ''): ?>
                                        <img src="/images/categories/<?php echo $this->_tpl_vars['cat']->image; ?>
" alt="<?php echo $this->_tpl_vars['cat']->name; ?>
" />
                                        <?php else: ?>
                                        <img src="/images/default100.gif" alt="<?php echo $this->_tpl_vars['cat']->name; ?>
" />
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="carousel-title">
                                    <a href="/catalog/category/id/<?php echo $this->_tpl_vars['cat']->category_id; ?>
"><?php echo $this->_tpl_vars['cat']->name; ?>
</a>
                                </div>
                            </li>
                            <?php endforeach; endif; unset($_from); ?>
                        </ul>
                    </div>
                    <a href="javascript:" id="carousel-next"><img src="/images/button-next.png" alt="" /></a>
                </div>
            </td>
            <td class="banner-right-bg"></td>
        </tr>
        <tr>
            <td><img src="/images/banner-bottom-left.png" alt="" /></td>
            <td class="banner-bottom-bg"></td>
            <td><img src="/images/banner-bottom-right.png" alt="" /></td>
        </tr>
    </table>
</div>