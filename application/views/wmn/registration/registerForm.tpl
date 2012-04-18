<table cellspacing="0px" cellpadding="0px" border="0px" width="100%"><!-- Контент -->
    <tbody>
        <tr><td>
            </td>
            <td valign="top">
                <script src="/images/wmn/js/registration.js" type="text/javascript"></script>
                <div class="okno_center">
                    <h2>Регистрационная анкета</h2>
                </div>                
                <form action="/registration/save" method="post" enctype="multipart/form-data" id="adminForm" name="adminForm">
                    <div id="nc_moderate_form">
                        <div class="nc_clear"></div>
                    </div>
                    
                    <br/>
                        {$form}
                    <h4 style="color: red; text-align: center;"></h4>
                    <p>
                        Пожалуйста, внимательно отнеситесь к заполнению анкеты: информация, которую Вы предоставите,
                        важна как для нас, так и для Вас (например, если Вы случайно забудете свой пароль).
                    </p>
                    {php}$form =  $this->get_template_vars('form'){/php}
                    <table cellspacing="1px" cellpadding="15px" border="0px" align="center" width="90%" id="registration_table">
                        <tbody>
                            <tr>
                                <td align="right" width="30%" valign="middle">                                    
                                    <span>{php} echo $form->getElement('userType')->getLabel();{/php}</span>                                    
                                </td>
                                <td align="center" width="40%" valign="middle">
                                    {php}
                                        $form->getElement('userType')->setLabel(false);
                                        echo $form->getElement('userType');
                                    {/php}
                                </td>
                                <td align="justify" width="30%" valign="top">
                                    <p></p>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" width="30%" valign="middle">
                                    <span>{php} echo $form->getElement('login')->getLabel();{/php}</span>
                                </td>
                                <td align="center" width="40%" valign="middle">
                                    {php}
                                        $form->getElement('login')->setLabel(false);
                                        echo $form->getElement('login');
                                    {/php}
                                </td>
                                <td align="justify" width="30%" valign="top">
                                    <p>Только латинские символы, цифры, знак подчёркивания, дефис или пробел.</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" width="30%" valign="middle">
                                    <span>{php} echo $form->getElement('email')->getLabel();{/php}</span>
                                </td>
                                <td align="center" width="40%" valign="middle">
                                    {php}
                                        $form->getElement('email')->setLabel(false);
                                        echo $form->getElement('email');
                                    {/php}
                                </td>
                                <td align="justify" width="30%" valign="top">
                                    <p>Адрес вашей электронной почты</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" width="30%" valign="middle">
                                    <span>Пароль:</span>
                                </td>
                                <td align="center" width="40%" valign="middle">
                                    <input type="password" value="" maxlength="32" name="Password1" id="Password1">
                                    <h5>
                                        <span style="display: none; color: gray;" id="nc_auth_pass1_security">надежность: </span>
                                        <span style="display: none;" class="nc_auth_pass1_check" id="nc_auth_pass1_s1">низкая</span>
                                        <span style="display: none; color: yellow;" class="nc_auth_pass1_check" id="nc_auth_pass1_s2">средняя</span>
                                        <span style="display: none; color: green;" class="nc_auth_pass1_check" id="nc_auth_pass1_s3">высокая</span>
                                        <span style="display: none; color: green;" class="nc_auth_pass1_check" id="nc_auth_pass1_s4">очень высокая</span>
                                        <span style="display: none;" id="nc_auth_pass1_empty">пароль не может быть пустым</span>
                                        <span style="display: none;" id="nc_auth_pass_min">пароль слишком короткий</span>
                                    </h5>
                                </td>
                                <td align="justify" width="30%" valign="top">
                                    <p>Минимальная длина &ndash; 8 символов</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" width="30%" valign="middle">
                                    <span>Подтверждение пароля:</span>
                                </td>
                                <td align="center" width="40%" valign="middle">
                                    <input type="password" value="" maxlength="32" name="Password2" id="Password2">
                                    <h5>
                                        <span style="display: none;" class="nc_auth_pass2_check" id="nc_auth_pass2_fail">пароли не совпадают</span>
                                    </h5>
                                </td>
                                <td align="justify" width="30%" valign="top">
                                    <p></p>
                                </td>
                            </tr>

                            <tr>
                                <td align="right" width="30%" valign="middle">
                                    <span>Название компании:</span>
                                </td>
                                <td align="center" width="40%" valign="middle"><input type="text" value="" onblur="checkExists('f_Company','company_empty')" maxlength="255" id="f_Company" size="50" name="f_Company">
                                    <h5>
                                        <span style="display: none;" id="company_empty"> название компании не может быть пустым</span>
                                    </h5>
                                </td>
                                <td align="justify" width="30%" valign="top">
                                    <p>Зарегистрированное название Вашей компании</p>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" width="30%" valign="middle">
                                    <span>Введите символы, изображенные на картинке:</span><br><br>
                                    <input type="hidden" value="67b0ee9ca2f76b128464d6fab0e5c909" name="nc_captcha_hash"><img src="/netcat/modules/captcha/img.php?code=67b0ee9ca2f76b128464d6fab0e5c909" name="nc_captcha_img">
                                </td>
                                <td align="center" width="40%" valign="middle">
                                    <input type="text" name="nc_captcha_code">
                                </td>
                                <td align="justify" width="30%" valign="top">
                                    <p></p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="background-color: rgb(202, 202, 202);" colspan="3">
                                    <span><span>
                                            Поля, выделенные <b>жирным шрифтом</b>, являются обязательными для заполнения.
                                        </span></span>
                                </td>
                            </tr>
                        </tbody></table>
                    <input type="submit" value="Зарегистрироваться" style="" class="registration_table_submit" />                
                </form></td>
            <td width="10px"></td>
            <td width="20%" valign="top">
                <div id="okno_right">                    
                    {include file="inc/courses.tpl"}
                    {include file="inc/weather.tpl"}
                    <div style="border-width: 0px;" class="okno_reklama">
                        <div align="center">
                            <a href="/netcat/modules/banner/?b=33&amp;c=6&amp;z=4&amp;r=http://wmn.by/profile/registration/&amp;rnd=1cc43ae5507099eada46b1ff2b4ef7e0&amp;click=1" target="_blank"><img width="199" height="312" alt="Здесь могла быть Ваша реклама" src="/netcat_files/39/92/h_7cea907711cbd03a58230c32a9231211" style="border: medium none;"></a>
                            <img width="1" height="1" alt="" src="/netcat/modules/banner/index.php?rnd=1cc43ae5507099eada46b1ff2b4ef7e0&amp;c=6&amp;z=4&amp;b=33&amp;r=http://wmn.by/profile/registration/">
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody></table>