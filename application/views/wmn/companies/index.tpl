{literal}
<script type="text/javascript">
    $(document).ready(function(){
        var separator = '|';
        build_tree('goods', 'location', false, '', separator);
        build_tree('services', 'location', false, '', separator);
        $('input:button#goods_filter_button').click(function(){
            $('input#goods_selection').attr('value', get_selection('goods', separator));
            $('input#rozn_selection').attr('value', $('input:checkbox#rozn').is(':checked'));
            $('input#opt_selection').attr('value', $('input:checkbox#opt').is(':checked'))
            $('#goods_filter_form').submit();
        });
        $('input:button#services_filter_button').click(function(){
            $('input#services_selection').attr('value', get_selection('services', separator));
            $('#services_filter_form').submit();
        });
        if ('' == 'true') {
            $('input:checkbox#rozn').attr('checked','checked');
        }
        if ('' == 'true') {
            $('input:checkbox#opt').attr('checked','checked');
        }
        if (('' != 'true')&&('' != 'true')) {
            $('input:checkbox#rozn').attr('checked','checked');
            $('input:checkbox#opt').attr('checked','checked');
        }
        $('#link_sell').addClass('active');
        $('#companies_buy').hide();
        $('#link_sell').click(function(){
            $('#link_sell').addClass('active');
            $('#link_buy').removeClass('active');
            $('#companies_sell').show();
            $('#companies_buy').hide();
        });
        $('#link_buy').click(function(){
            $('#link_buy').addClass('active');
            $('#link_sell').removeClass('active');
            $('#companies_buy').show();
            $('#companies_sell').hide();
        });
    });
</script>
{/literal}
<table cellspacing="0px" cellpadding="0px" border="0px" width="100%">
    <tr>
        <td width="20%" valign="top"><!-- Левый блок -->
            {include file="companies/inc/catListProducts.tpl"}
            {include file="companies/inc/catListServices.tpl"}                
        </td>
        <td width="12px"></td>
        <td valign="top">
            <div class="okno_center"> <!-- Новости -->
                <div class="spisok_kontor">
                    <ul>
                        <li>
                            <div id="link_sell" class="active">Продают</div>
                        </li>
                        <li>
                            <div id="link_buy">Покупают</div>
                        </li>
                    </ul>
                </div>
                <div id="companies_sell">
                    <table cellspacing="1" cellpadding="15" border="0" align="left" width="100%" id="registration_table">

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2590.html"><img alt="logo" src="/netcat_files/u/Logo_Z.jpg">Образовательный центр "Зачеткин"</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Наша организация оказывает услуги образовательного характера (помощь при подготовке и написании научных письменных работ, консультации в поиске необходимого учебного материала, предоставление учебно-методических материалов и др.)
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: 8-017-297-55-29<br>
                                    Velcom: 8-029-689-19-83<br>
                                    MTC: 8-029-770-08-87<br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://zachetkin.by">http://zachetkin.by</a><br>
                                    Skype: <br>
                                    ICQ: 602 496 076<br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2586.html"><img alt="logo" src="/netcat_files/u/Pixel_Internet_logo1.jpg">ООО Пиксель Интернет</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Интернет-магазин по продаже бытовой, цифровой, аудио и видеотехники, компьюторной техники и аксесуаров, носителей информации и элементов питания
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: (17) 328-49-73<br>
                                    Velcom: (29) 684-55-55<br>
                                    MTC: (33) 684-55-55<br>
                                    Life: (25) 684-55-55<br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://pixel.by">http://pixel.by</a><br>
                                    Skype: pixel.by<br>
                                    ICQ: 608882186<br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2580.html"><img alt="logo" src="/netcat_files/u/Logo_O.jpg">O. Jen</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Белорусский трикотаж от производителя, модная женская одежда O. Jen.
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: +375 (17) 276-68-02<br>
                                    Velcom: +375 (26) 676-77-02<br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://www.ojen.by">http://www.ojen.by</a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2577.html"><img alt="logo" src="/netcat_files/u/eubellogo_100_46.jpg">ООО «Энергия Успеха»</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Компании ООО "Энергия Успеха" - строительные материалы, ремонтно-строительные и отделочные работы, сантехнические работы, кровельные работы, утепление и отделка фасадов, паркетные работы, настил полов, необрезная и обрезная доска.
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: +375172685031<br>
                                    Velcom: +375445373603<br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://ey-bel.by">http://ey-bel.by</a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2575.html"><img alt="logo" src="/netcat_files/u/bonanza.jpg">Интернет-магазин Бонанза</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Интернет-магазин Бонанза предлагает широкий ассортимент книг про праву и бизнесу: кодексы, законы, комментарии законодательства; учебники для ВУЗов; образцы должностных и рабочих инструкций, договоров, приказов по кадрам; электронные книги на CD и DVD, книги для скачивания,...
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: (017) 207-67-51<br>
                                    Velcom: <br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://www.bonanza.by">http://www.bonanza.by</a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2574.html"><img alt="logo" src="/images/wmn/img/no_img.gif">Частное предприятие "СОЛКОМтех"</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Занимаемся продажей, монтажом, техническим обслуживанием и ремонтом климатической техники (кондиционеров всех типов).
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: 8-029-6111571<br>
                                    MTC: 8-029-7775885<br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2572.html"><img alt="logo" src="/netcat_files/u/H2O_Just_Add_Water.png">H2O</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Оптовая компания по продаже продуктов питания.
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: +375172832359<br>
                                    Velcom: +375296604953<br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2571.html"><img alt="logo" src="/images/wmn/img/no_img.gif">ООО "ФораСпорт"</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Оптовые поставки спортивных товаров.<br>
                                    Огромный ассортимент товаров для спорта, туризма и отдыха.
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: 245-10-03, 245-13-03<br>
                                    Velcom: +375 29 3 5555 88<br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://www.sportopt.by">http://www.sportopt.by</a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2570.html"><img alt="logo" src="/netcat_files/u/knopka.gif">Интернет-магазин Navik.by</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Качественные современные GPS навигаторы, видеорегистраторы, радар-детекторы от крупнейших мировых брендов, техника Karcher. Весь комплекс услуг: от выбора подходящего прибора до сервисной поддержки на протяжении всего срока эксплуатации. Цены от производителей. Скидки при заказе с...
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: +37544-462-99-66<br>
                                    MTC: +37529-700-99-66<br>
                                    Life: +37525-612-99-66<br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://navik.by">http://navik.by</a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2552.html"><img alt="logo" src="/netcat_files/u/header.jpg">ОАО Коминтерн</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Классические мужские костюмы, пиджаки, брюки премиум класса, выпускаемые под торговой маркой VALEROSSO - линия дорогих мужских костюмов.<br>
                                    Модели, выпускаемые под торговой маркой CITY LIFE, разработаны в соответствии с самыми последними тенденциями мировой молодежной моды; они...
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: 749756, 701611, факс:748555<br>
                                    Velcom: <br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://oao-comintern.com">http://oao-comintern.com</a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr></table>

                    Предприятия 1 - 10 из 358 &nbsp; &nbsp; <a href="/companies/"><b>1</b></a> <a href="?curPos=10">2</a> <a href="?curPos=20">3</a> <a href="?curPos=30">4</a> <a href="?curPos=40">5</a> <a href="?curPos=50">6</a><a href="?curPos=10">след.</a></div>
                <div id="companies_buy" style="display: none;">
                    <table cellspacing="1" cellpadding="15" border="0" align="left" width="100%" id="registration_table">

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2572.html"><img alt="logo" src="/netcat_files/u/H2O_Just_Add_Water.png">H2O</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Оптовая компания по продаже продуктов питания.
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: +375172832359<br>
                                    Velcom: +375296604953<br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2518.html"><img alt="logo" src="/images/wmn/img/no_img.gif">Индивидуальный предприниматель</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">

                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: 6954311<br>
                                    MTC: 5564784<br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: okslart<br>
                                    ICQ: 563318644<br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2506.html"><img alt="logo" src="/images/wmn/img/no_img.gif">ооо тд Панотом</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    оптовая продажа продуктов питания. строиматериалов.
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: <br>
                                    MTC: 8960913<br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: aleshkevich71<br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2492.html"><img alt="logo" src="/netcat_files/u/4375.gif">Gigahertz</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Уважаемые покупатели. Наш интернет-магазин рад представить вам огромный ассортимент Ноутбуков и комплектующих!<br>
                                    <br>
                                    <br>
                                    Находимся мы в самом центре нашей Столицы !!!<br>
                                    <br>
                                    <br>
                                    Территориальная сфера деятельности нашей компании охватывает не только город Минск, но и...
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: 7265266<br>
                                    MTC: 7265266<br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: alex.hertz<br>
                                    ICQ: 218315379<br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2490.html"><img alt="logo" src="/netcat_files/u/625_logo.gif">АнриАвто.by Интернет-магазин автозапчастей</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Автозапчасти, аккумуляторы, инструмент, моторные масла, автоаксессуары, автопылесосы, компрессоры, шины.Доставка по г.Минску и РБ.
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: 3359307<br>
                                    MTC: 7541973<br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://anriauto.by">http://anriauto.by</a><br>
                                    Skype: <br>
                                    ICQ: 618003070<br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2362.html"><img alt="logo" src="/netcat_files/u/logo_right__2_.jpg">Семченко ип</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Основным направлением деятельности нашей компании является оказание полного комплекса профессиональных услуг в области обустройства и  ремонта  полов.
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: +375 29 3800180<br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://semchenko.deal.by/">http://semchenko.deal.by/</a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2356.html"><img alt="logo" src="/images/wmn/img/no_img.gif">ИП Гашимзаде Чингиз</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">

                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: +375447907999<br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: chingiz7907999<br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2350.html"><img alt="logo" src="/images/wmn/img/no_img.gif">ИП Сухарко Андрей Иванович</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Сеть  универсальных магазинов в Минске!
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: +375291673303<br>
                                    MTC: +375297760566<br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="http://shopogolik.by">http://shopogolik.by</a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2242.html"><img alt="logo" src="/images/wmn/img/no_img.gif">ООО "Никанора"</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    продаем все
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: <br>
                                    Velcom: <br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                        <tr>
                            <td align="center" width="10%" valign="center">
                                <a href="/company/company_2241.html"><img alt="logo" src="/images/wmn/img/no_img.gif">ООО "Ньютон"</a>
                            </td>
                            <td width="35%" valign="top">
                                <p style="text-align: left;">
                                    Продажа самых качественных аксессуаров из Китая
                                </p>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <span>Телефоны:</span><br>
                                <div style="line-height: 15px;">
                                    Городской: 8 017 323 23 43<br>
                                    Velcom: 8 044 345 33 52<br>
                                    MTC: <br>
                                    Life: <br>
                                </div>
                            </td>
                            <td align="left" width="20%" valign="top">
                                <div style="line-height: 15px;">
                                    <span>Контакты:</span><br>
                                    Сайт: <a style="display: inline;" target="_blank" href="#"></a><br>
                                    Skype: <br>
                                    ICQ: <br>
                                </div>
                            </td>
                            <td align="left" width="15%" valign="top">
                                <span>Рейтинг:</span><br>
                                <div class="rating-block">
                                    <div class="plus-rating">
                                        <div style="height: 50px;" class="rating-bg"></div>
                                    </div>
                                    <div class="minus-rating"> 
                                        <div style="height: 0px;" class="rating-bg"></div>                                                
                                    </div>
                                </div>
                                <div class="rating-buttons-block">
                                    <div class="plus-button-rating">
                                        <span>0</span>

                                    </div>
                                    <div class="minus-button-rating"> 
                                        <span>0</span>

                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="company-forum-links">                                            
                                    <div id="massmail-counter-wrapper" rel="block-1">
                                        <div id="massmail-counter">
                                            <a href="#">Предприятия</a> a href='#'&gt;Автомобили 
                                        </div>
                                        <div id="massmail-arrow"></div>
                                    </div>
                                    <a rel="1" href="javascript:">
                                        <img alt="" src="/images/wmn/img/forum_links.png">
                                    </a>
                                </div>
                            </td>      
                        </tr>

                    </table>

                    Предприятия 1 - 10 из 82 &nbsp; &nbsp; 
                    <a href="/companies/"><b>1</b></a> <a href="?curPos=10">2</a>
                    <a href="?curPos=20">3</a> <a href="?curPos=30">4</a>
                    <a href="?curPos=40">5</a> <a href="?curPos=50">6</a><a href="?curPos=10">след.</a></div>	</div>
        </td>
    </tr>
</table>