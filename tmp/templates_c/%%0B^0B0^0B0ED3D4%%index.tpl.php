<?php /* Smarty version 2.6.18, created on 2012-04-03 20:11:46
         compiled from layout/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'layout/index.tpl', 58, false),array('modifier', 'trim', 'layout/index.tpl', 58, false),)), $this); ?>
<!--

<body>
    <div class="header">
        <div class="logo">
            <a href="/"><img src="/images/logo.png" alt="" /></a>
        </div>
        <div class="header-menu">
            <div class="menu-line">
                <div class="menu">
                    <ul>
                        <li><img src="/images/menu-left.png" alt="" /></li>
                        <?php $_from = $this->_tpl_vars['mainMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                        <li<?php if ($this->_tpl_vars['item']->selected): ?> class="selected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['item']->link; ?>
"><?php echo $this->_tpl_vars['item']->name; ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                                                <li><img src="/images/menu-right.png" alt="" /></li>
                    </ul>
                </div>
                <div class="menu-highlight">
                    <img src="/images/highlited-left.png" alt="" />
                    <a href="/upload/pricelist.xls">Скачать прайс</a>
                    <img src="/images/highlited-right.png" alt="" />
                </div>
            </div>
            <div class="phone-line">
                <div class="phone">
                    (017) <strong>505-27-44</strong>, (017) <strong>280-50-82</strong>
                </div>
                <div class="phone-highlight">
                    <img src="/images/highlited-left.png" alt="" />
                    <a href="/upload/catalog.pdf">Скачать каталог</a>
                    <img src="/images/highlited-right.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <?php if ($this->_tpl_vars['tab'] == 'index'): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "default/inc/home-banner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>

        <table class="search">
            <tr>
                <td class="search-left"></td>
                <td class="search-dark">Поиск по названию</td>
                <td class="search-hint">Введите название интересующего Вас товара</td>
                <td class="search-area">
                    <form action="/search/" method="get" autocomplete="off">
                        <input type="text" name="q" id="q" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_GET['q'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp)); ?>
" />
                        <input type="image" src="/images/search-button.png" />
                    </form>
                    <div id="autocomplete" class="autocomplete"></div>
                </td>
                <td class="search-clean"><a href="javascript:" id="clear-search">очистить форму поиска</a></td>
                <td class="search-right"></td>
            </tr>
        </table>
        <div class="content-left">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/catalog.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <div class="address">
                <h1>Добро пожаловать!</h1>
                <img src="/images/address-top.png" alt="" />
                <div class="address-content">
                    <p>
                        <a href="/pages/map.htm"><img src="/images/map.png" alt="" /></a>
                        Республика <br />
                        Беларусь,<br />
                        Минский р-он,<br />
                        АХЗ ООО "Инфаст" каб. 43<br />                       
                        <strong>info@dfarb.by</strong><br />
                    </p>

                </div>
                <img src="/images/address-bottom.png" alt="" />
            </div>
        </div>
        <div class="content-right">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['template']), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>
</body>
</html>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $this->_tpl_vars['globalTitle']; ?>
</title>
        <link href="/css/styles.css" rel="stylesheet" type="text/css" />
        <script src="/js/libs/jquery.js"></script>
        <script src="/js/main.js"></script>
        <link rel="icon" href="/favicon-eve.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/favicon-eve.ico" type="image/x-icon" />
        <?php $_from = $this->_tpl_vars['siteMeta']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['meta']):
?>
        <meta content="<?php echo $this->_tpl_vars['meta']->content; ?>
" name="<?php echo $this->_tpl_vars['meta']->name; ?>
" />
        <?php endforeach; endif; unset($_from); ?>
        <?php echo $this->_tpl_vars['additionMetaTags']; ?>

    </head>
    <head>
        <meta name="description" content="Белорусский бизнес-портал, который помогает продавцу и покупателю найти друг друга, выбрать, купить и продать товары в магазинах Беларуси. " />
        <meta name="Keywords" content="купить, продать, обзоры, выбрать, магазин, документы, каталог, бизнес, рейтинг, продавец, покупатель, компания, помощь" />
        <title></title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="/images/wmn/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/netcat/require/lib/jQuery/css/ui-lightness/jquery-ui-1.8.14.custom.css" />
        <link rel="stylesheet" type="text/css" href="/netcat/require/lib/jQuery/css/treeview/jquery.treeview.css" />
        <script type="text/javascript" src="/images/wmn/js/tree.js"></script>
        <script type="text/javascript" src="/netcat/require/lib/jQuery/js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="/netcat/require/lib/jQuery/js/jquery-ui-1.8.14.custom.min.js"></script>
        <script type="text/javascript" src="/netcat/require/lib/jQuery/js/jquery.cookie.js"></script>
        <script type="text/javascript" src="/netcat/require/lib/jQuery/js/jquery.treeview.js"></script>
        <script type="text/javascript" src="/images/wmn/js/tree.js"></script>
        <script type="text/javascript" src="/images/wmn/js/binds.js"></script>
        <script type="text/javascript" src="/netcat/editors/FCKeditor/fckeditor.js"></script>
    </head>
    <body>
        <div id="shapka">
            <div id="WMN_logo">
                <a href="/"><img src="/images/wmn/WMN_logo.png" alt="WMN.by logo" /></a>
            </div>
            <div id="search">
                <span>Поиск</span>
                <form class="nc_search" action="/search/" method="GET"><input class="search_form" type="text" size="40" name="search_query" id="nc_search_query" value="" /><input class="search_form_button" type="submit" value="&nbsp;" /><div class="advancedlink"><a href="/search/?advanced=1">Расширенный поиск</a></div></form>
            </div>

            <div id="my_profil">
                <h3>Войти</h3><br/>
                <form method="post" action="/netcat/modules/auth/">
                    <input type="hidden" name="AuthPhase" value="1" />
                    <input type="hidden" name="REQUESTED_FROM" value="" />
                    <input type="hidden" name="REQUESTED_BY" value="" />
                    <input type="hidden" name="catalogue" value="1" />
                    <input type="hidden" name="sub" value="1" />
                    <input type="hidden" name="cc" value="" />
                    <?php echo '
                    <input type="text" class="input_login_pass"
                           name="AUTH_USER" value="login" 
                           onfocus="this.style.backgroundColor=\'white\';this.value=\'\';" 
                           onblur="this.style.backgroundColor=\'#f5f5f5\';if (this.value != \'\') {this.onfocus = function(){this.style.backgroundColor=\'#F0F0F0\';};} else this.value=\'login\';" />
                    <input type="password" class="input_login_pass" name="AUTH_PW" value="********"
                           onfocus="this.style.backgroundColor=\'white\';this.value=\'\';" onblur="this.style.backgroundColor=\'#f5f5f5\';if (this.value != \'\') {this.onfocus = function(){this.style.backgroundColor=\'#F0F0F0\';};} else this.value=\'********\';" />
                    <input type="submit" class="submit_button" value="&nbsp" /><br/>
                    '; ?>

                    <span style="float: right; padding-top: 10px; text-align: right;">                                                           
                        <a href="/netcat/modules/auth/password_recovery.php?cc=99">Забыли пароль?</a>&nbsp;
                        <a href="/profile/registration">Зарегистрироваться</a>
                    </span>
                </form>
            </div><!-- Профиль -->
            <table width="100%" border="0px" cellpadding="0px" cellspacing="0px" id="menu_big"><!-- Большое меню -->
                <tr>
                    <td width="20%"><a href="/companies/">Каталог предприятий и ИП<br/><span>Все предприятия и ИП Беларуси</span></a></td>
                    <td width="20%"><a href="/goodscatalogue/">Каталог товаров<br/><span>Обзоры</span></a></td>
                    <td width="20%"><a href="/servicescatalogue/">Каталог услуг<br/><span>Обзоры</span></a></td>
                    <td width="20%"><a href="/reviews/">Правовой раздел<br/><span>Решения сложных вопросов</span></a></td>
                    <td width="20%"><a href="/burcatalog/">Общение с госорганами<br/><span>Заполняем документы, подаем отчеты</span></a></td>
                </tr>
            </table><!-- Меню (Большое) -->
            <center>
                <div id="baner"></div> <!-- baner --> 
            </center>
            <table width="100%" border="0px" cellpadding="0px" cellspacing="0px" id="menu_small"><!-- Маленькое меню -->
                <tr>
                    <td width="14%"><a href="/news/">Новости</a></td>
                    <td width="14%"><a href="/forum/">Форум</a></td>
                    <td width="14%"><a href="/order/">Купить/Продать</a></td>
                    <td width="14%"><a href="/profile/registration/registration2.html?Type=2">Добавить предприятие</a></td>
                    <td width="14%"><a href="/reviews/">Аналитика</a></td>
                    <td width="14%"><a href="/consult/">Консультации</a></td>
                    <td width="14%"><a href="/feedback/">Обратная связь</a></td>
                </tr>
            </table><!-- Меню (Маленькое) -->
        </div> <!-- Шапка -->
        <div id="center">
            <table border="0px" width="100%" cellpadding="0px" cellspacing="0px"><!-- Контент -->
                <tr>
                    <td width="20%" valign="top"><!-- Левый блок -->
                        <div class="okno_reklama">
                            <h2>Как это работает</h2>
                            <p><b>Заказ товара:</b></p>
                            <div id="about_company">
                                <ul>

                                    <li> Кликаем на кнопку Купить/Продать.                                     
                                    </li>
                                    <li> Оформляем заказ, который автоматически попадает ко всем продавцам,
                                        торгующим данной группой товров.                                     
                                    </li>
                                    <li> Выбираем наиболее подходящее Вам предложение. 
                                        Его можно просмотреть в своем личном кабинете.
                                    </li>
                                </ul>
                            </div>
                            <p><b>Поиск контрагента:</b></p>
                            <div id="about_company">
                                <ul>

                                    <li>
                                        В разделе Купить/Продать формируем запрос на продажу либо покупку 
                                        того или иного товара, который автоматически попадает ко всем предприятиям 
                                        и ИП, заинтересованным в Вашем предложении.                                 
                                    </li>
                                    <li>
                                        Получаем предложения о сотрудничистве в разделе Сообщения в личном кабинете.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="okno_reklama">
                            <h2>О компании WMN.by</h2>
                            <div id="about_company">
                                <p>WMN.by – новый <strong>бизнес-портал</strong>, помогающий <strong>купить и продать товары</strong> или <strong>услуги</strong> 
                                    в магазинах Беларуси. Основанный на каталоге компаний, <strong>бизнес-портал WMN.by</strong> упрощает процесс поиска нужного предложения 
                                    и компании, его предлагающей. К услугам пользователей предоставляется постоянно пополняемый <strong>каталог обзоров</strong>, который 
                                    включает в себя <strong>обзоры товаров и обзоры услуг</strong>. Специфика материалов заключается в их объективности и независимости.</p> 
                                <p>Таким образом, Вы получаете только самую актуальную информацию о <strong>новинках товаров</strong> и услуг. <strong>Заказать, купить 
                                        и продать</strong> товары или услуги на бизнес-портале WMN.by проще простого. Нужно всего лишь заполнить соответствующую форму в разделе 
                                    купить и продать и выбрать наиболее <strong>актуальное предложение продавца</strong>.</p>				
                            </div>
                        </div>                                                                           
                    </td>
                    <td width="12px"></td><!-- Полоса, разделяющая левый и центральный блоки  -->
                    <td valign="top">
                        <!-- Центральный блок -->
                        <div class="okno_center"> 
                            <h2>Новости</h2>
                        </div>
                        <table border="0" width="100%" cellpadding="5" cellspacing="1" id="table_news"><!--#efefef-->
                            <tr height="120">
                                <td colspan="3" valign="middle">
                                    <div class="table_news_head">

                                        <a href="/news/news_16.html"><img valign="middle" src="/upload/f5d6d4abff305edceb32f56f7e463dc3.jpg" alt="preview" /></a>
                                        <span>2011-10-27 16:30:13</span><br/>
                                        <div class="table_news_head_name">
                                            <a href="/news/news_16.html">Коллизия законодательства</a>
                                        </div>
                                        <p>Постановление Совета Министров Республики Беларусь от 28.09.2011г. №1300 (далее Постановление 1300), вступившее в силу с 1 октября текущего года, продолжило устойчивую тенденцию роста тарифов на коммунальные услуги в нашей стране, внеся ряд существенных изменений в порядок расчетов населения за оказанные коммунальные услуги и действующие тарифы на них (в Постановление Совмина РБ от 25.08.1999г. №1332 далее Постановление 1332).</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td width="48%" valign="top">
                                    <div class="table_news_bottom" align="left">

                                        <a href="/news/news_15.html"><img src="/upload/be3fa4a5f2fdb838dab0e5a03a64daf3.jpg" alt="" /></a>
                                        <div class="table_news_bottom_link">
                                            <a href="/news/news_15.html">
                                                Лед тронулся, господа индивидуальные предприниматели
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td width="48%" valign="top">
                                    <div class="table_news_bottom" align="left">

                                        <a href="/news/news_14.html"><img src="/upload/1e7c6136a1fa9a7a4654cb343a799a09.jpg" alt="" /></a>
                                        <div class="table_news_bottom_link">
                                            <a href="/news/news_14.html">
                                                Отныне цель приобретения товара  не существенное условие договора
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td width="4%" valign="middle" align="center">
                                    <div class="table_news_bottom">
                                        <a href="/news/" alt="все новости" title="все новости">&#187;</a>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div class="okno_center"> <!-- Новости -->
                            <h2>Последние зарегистрированные компании</h2>

                            <div class="new_company_table">
                                <ul><li>
                                        <a href="/company/company_2590.html">
                                            <div><img src="/upload/Logo_Z.jpg" alt="logo"/></div>Образовательный центр &quot;Зачеткин&quot;</a>
                                    </li><li>
                                        <a href="/company/company_2588.html">
                                            <div><img src="/images/wmn/no_img.gif" alt="logo"/></div>ИП Кильчевский</a>
                                    </li><li>
                                        <a href="/company/company_2586.html">
                                            <div><img src="/upload/Pixel_Internet_logo1.jpg" alt="logo"/></div>ООО Пиксель Интернет</a>
                                    </li><li>
                                        <a href="/company/company_2580.html">
                                            <div><img src="/upload/Logo_O.jpg" alt="logo"/></div>O. Jen</a>
                                    </li><li>
                                        <a href="/company/company_2579.html">
                                            <div><img src="/images/wmn/no_img.gif" alt="logo"/></div>designlyn</a>
                                    </li></ul>
                            </div>
                        </div>
                        <br/>
                        <table border="0px" width="100%" cellpadding="0px" cellspacing="0px"><!-- "Правовой раздел" и "Бюрократия" -->
                            <tr>
                                <td width="49%" valign="top"><!-- Правовой раздел -->
                                    <div class="okno_center">
                                        <h2>Обзоры товаров</h2>
                                        <div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_575.html">
                                                <img src="/upload/d1dac9628c798b03408dd687b251c5a4.jpg" alt="preview" />
                                                В данной статье пойдет речь о педалях задержки звука от известной...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_569.html">
                                                <img src="/upload/8247fe23cb51bfe6c7c1d1336ab90bfe.jpg" alt="preview" />
                                                Здесь мы рассмотрим известные модели distortion-педалей от EHX
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_568.html">
                                                <img src="/upload/902e7b58ec64282170295ac0fe1fabe7.jpg" alt="preview" />
                                                Сегодня мы поговорим о известных моделях гитарных примочек overdrive от...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_567.html">
                                                <img src="/upload/7cb170a5c6abcbc17dd2585a753d22a6.jpg" alt="preview" />
                                                В этой статье мы рассмотрим известные педали от Electro-Harmonix,...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_565.html">
                                                <img src="/upload/b7176d58b9540d26dd4a341e0694cde4.jpg" alt="preview" />
                                                Любители активного отдыха уже давно знают, что снаряжение для...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_564.html">
                                                <img src="/upload/1a30fc06c2521d9a8f163904e55c791f.jpg" alt="preview" />
                                                Если вам надоели скучные серые будни и захотелось чего-то...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_562.html">
                                                <img src="/upload/b9a06acb8c6d71bc4b7910bb25f598da.jpg" alt="preview" />
                                                Каждый любитель и профессионал дайвинга прекрасно знает, что...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_561.html">
                                                <img src="/upload/ab8f9b128ffea9b593eb39c51bde7661.jpg" alt="preview" />
                                                Каждый руководитель хоть раз, но проходил через процедуру покупки...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_559.html">
                                                <img src="/upload/5922553f2d713689e4cae0eb48605aac.jpg" alt="preview" />
                                                Думаю, каждый хотя бы раз задумывался о том, что пора бы заняться...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/goodscatalogue/reviews/reviews_529.html">
                                                <img src="/upload/5080d46e47433a23bf2c17e8276c757d.jpg" alt="preview" />
                                                Помогает ли фитнес-питание похудеть? Или это очередной маркетинговый...
                                            </a>
                                        </div>
                                        <div class="mini_preview_archive">
                                            <a href="/goodscatalogue/" style="color: #00adf0;">Все обзоры</a>
                                        </div>					
                                    </div>
                                </td>
                                <td width="10px"><!-- Центральная разделительная линия -->
                                </td>
                                <td valign="top"><!-- Бюрократия -->
                                    <div class="okno_center">
                                        <h2>Обзоры услуг</h2>
                                        <div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_579.html">
                                                <img src="/netcat_files/767/1210/h_6047ba9fb09013b94d6b3b06e7609943.jpg" alt="preview" />
                                                CHERY QQ. Что эта за автомобиль, как на нем ездить и для кого он...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_578.html">
                                                <img src="/netcat_files/767/1210/h_149084f6cb32510815ff8cf4913c3f81.jpg" alt="preview" />
                                                В этой статье рассматриваем услугу 3G интернета от мобильного...
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_577.html">
                                                <img src="/netcat_files/767/1210/h_417a64aafc138207fd0398072c45de2b.jpg" alt="preview" />
                                                В этой статье рассмотрим услугу оператора МТС "3G Коннект"
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_576.html">
                                                <img src="/netcat_files/767/1210/h_bdd31bdd31baed4ed3d3aed89cfbcc4c.jpg" alt="preview" />
                                                Обзор услуги 3G интернет от Velcom: сопоставляем цены и качество
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_574.html">
                                                <img src="/netcat_files/767/1210/h_42b2390d87e8bda1388eed40f1e3a53c.jpg" alt="preview" />
                                                Обзор салона красоты Шоколад.
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_573.html">
                                                <img src="/netcat_files/767/1210/h_b06de75c6d940cf86f8bf723a9a6b1da.jpg" alt="preview" />
                                                Обзор фитнес-центра Магия.
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_572.html">
                                                <img src="/netcat_files/767/1210/h_0bea1804cc6230a8d953b896ee5b03df.jpg" alt="preview" />
                                                Обзор фитнес-клуба Лиана Баст
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_571.html">
                                                <img src="/netcat_files/767/1210/h_c963d6cdaceae9c40a000562b1114898.jpg" alt="preview" />
                                                Обзор фитнес-клуба Индиго.
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_570.html">
                                                <img src="/netcat_files/767/1210/h_15aacd5f4f7800ea920a67a4127601ec.jpg" alt="preview" />
                                                Обзор йога-школы Сатори.
                                            </a>
                                        </div><div class="mini_preview">
                                            <a href="/servicescatalogue/reviews/reviews_566.html">
                                                <img src="/netcat_files/767/1210/h_b61136e851cd98fe9a189970692b642c.jpg" alt="preview" />
                                                В этой статье мы рассмотрим в чем заключается суть SEO.
                                            </a>
                                        </div>
                                        <div class="mini_preview_archive">
                                            <a href="/servicescatalogue/" style="color: #00adf0;">Все обзоры</a>
                                        </div>						
                                    </div>
                                </td>
                            </tr>                                                                           
                            </tr>
                        </table><!-- Закрываем блок "Правовой раздел" и "Бюрократия" -->
                    </td><!-- Закрываем центральный блок -->
                    <td width="10px"></td><!-- Разделительная полоса между центральным и правыми блоками -->
                    <td width="20%" valign="top"><!-- Правые блоки -->
                        <div id="okno_right">
                            <!--Курсы валют--><div class="okno_reklama">
                                <h2>Курсы валют на сегодня</h2>
                                <div style="left: 40%; position: relative; margin-left: -90px; width: 230px;">
                                    <iframe style="padding: 10px;"
                                            src="http://www.nbrb.by/publications/wmastersd.asp?lan=ru&datatype=0
                                            &fntsize=13px&fntcolor=1f1f1f&lnkcolor=00adf0&brdcolor=white"
                                            width=225 height=100 scrolling=no frameborder=0>
                                    </iframe>
                                </div>
                            </div>
                            <!--Погода--><div class="okno_reklama">
                                <h2><a href="http://6.pogoda.by/26850" style="color: white; text-decoration: none;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a></h2>
                                <table width="180px" align="center" style="margin-bottom: 10px;" cellpadding="2" cellspacing="0">
                                    <tr>
                                        <td>
                                            <table width=100% height=100% style="font-family:Tahoma; text-align:center; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td>
                                                        <script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_1.js"></script>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                            Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
                                        </td>
                                    </tr>
                                </table>
                            </div><!-- Погода -->

                            <div class="okno_reklama" style="border-width:0px;">
                                <!-- Реклама -->
                                <div align="center">
                                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" 
                                            codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="240" height="400" id="banner36">
                                        <param name="movie" value="/netcat_files/39/92/h_85d800c96a6f45d79cbd32110d4dc07e?banner_url=http%3A%2F%2Fwmn.loc%2Fnetcat%2Fmodules%2Fbanner%2F%3Fb%3D36%26amp%3Bc%3D14%26amp%3Bz%3D8%26amp%3Br%3Dhttp%3A%2F%2Fwmn.loc%2F%26amp%3Brnd%3D0a74b7711e489a403b22bc37b3e9881f%26amp%3Bclick%3D1&banner_target=target=_blank" />
                                        <param name="quality" value="high" />
                                        <param name="FlashVars" value="banner_url=http%3A%2F%2Fwmn.loc%2Fnetcat%2Fmodules%2Fbanner%2F%3Fb%3D36%26amp%3Bc%3D14%26amp%3Bz%3D8%26amp%3Br%3Dhttp%3A%2F%2Fwmn.loc%2F%26amp%3Brnd%3D0a74b7711e489a403b22bc37b3e9881f%26amp%3Bclick%3D1&banner_target=target="_blank" " /><embed src="/netcat_files/39/92/h_85d800c96a6f45d79cbd32110d4dc07e?banner_url=http%3A%2F%2Fwmn.loc%2Fnetcat%2Fmodules%2Fbanner%2F%3Fb%3D36%26amp%3Bc%3D14%26amp%3Bz%3D8%26amp%3Br%3Dhttp%3A%2F%2Fwmn.loc%2F%26amp%3Brnd%3D0a74b7711e489a403b22bc37b3e9881f%26amp%3Bclick%3D1&banner_target=target="_blank" " name="banner36" quality="high" bgcolor="ffffff" width="240" height="400" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
                                    </object>
                                    <img src="/netcat/modules/banner/index.php?rnd=0a74b7711e489a403b22bc37b3e9881f&amp;c=14&amp;z=8&amp;b=36&amp;r=http://wmn.loc/" width="1" height="1" alt="" />

                                </div>
                            </div>
                        </div>
                    </td>
                    </td></tr>
            </table>
        </div>
        <!-- Центр -->
        <div id="footer">
            <table border="0px" width="100%" cellpadding="0px" cellspacing="0px">
                <tr>
                    <td width="30%" valign="top">
                        <div class="footer_text">
                            ООО «ВМН-онлайн»<br/>
                            УНП 191448242, 220072, г.Минск, ул.Сурганова, д.11, корп.2, ком.8 тел/факс: + 375 17 284-23-36<br/>
                        </div>
                    </td>
                    <td width="30%" valign="top">
                        <div class="footer_text">
                            <!--N1-->
                            <a href="http://list.np.by/" style="margin-left:10px;">
                                <img src="http://np.by/pic/np.gif" alt="NP.BY - Каталог сайтов" width="88" height="31" border=0 /></a> 
                            <a href="http://vrninfo.ru">
                                <img src="http://vrninfo.ru/88.gif" width="1" height="1" border=0 /></a>
                            <!--end N1 --> 
                            <!-- BEGIN Rating All.BY CODE - ALTERNATING THIS CODE WILL CAUSE TERMINATION ACCOUNT-->
                            <A HREF="http://www.all.by/">
                                <IMG SRC="http://www.all.by/cgi-bin/rating.cgi?id=10085267&amp;ni=3" BORDER="0" WIDTH="88" HEIGHT="31" ALT="Rating All.BY">
                            </A>
                            <!-- END Rating All.BY CODE-->
                        </div>
                    </td>
                    <td width="30%" valign="top">
                        <div class="footer_text" style="text-align: right;">
                            Банк: ЗАО «БелСвиссБанк»,<br/>
                            220004, г.Минск, пр.Победителей, 23, корп.3 БИК 153001175<br/>
                            p/c: 3012072590006<br/>
                        </div>
                    </td>
                </tr>
            </table>
        </div> <!-- Футер -->
    </body>
</html>