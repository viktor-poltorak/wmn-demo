<div id="my_profil">
    {if $isLogged}
    <h3><a href="/profile/profile">{$authUser->username}</a><span>, добро пожаловать!</span></h3>
    <ul>
        <li><a class="my_profil_icon_02" href="/profile/profile">Профиль</a></li>
        <li><a class="my_profil_icon_03" href="/profile/messages/">Сообщения</a></li>
        <li><a class="my_profil_icon_04" href="/profile/outgoing/">Запросы</a></li>
        <li><a class="my_profil_icon_05" href="/profile/">Друзья</a></li>
    </ul>
    <a style="position: absolute; right: 5px; top: 140px;" href="/logout"><b>Завершить сеанс</b></a>
    {else}
    <h3>Войти</h3><br/>
    <form method="post" action="/login">       
        {literal}
        <input type="text" class="input_login_pass"
               name="username" value="login" 
               onfocus="this.style.backgroundColor='white';this.value='';" 
               onblur="this.style.backgroundColor='#f5f5f5';if (this.value != '') {this.onfocus = function(){this.style.backgroundColor='#F0F0F0';};} else this.value='login';" />
        <input type="password" class="input_login_pass" name="password" value="********"
               onfocus="this.style.backgroundColor='white';this.value='';" onblur="this.style.backgroundColor='#f5f5f5';if (this.value != '') {this.onfocus = function(){this.style.backgroundColor='#F0F0F0';};} else this.value='********';" />
        <input type="submit" class="submit_button" value="&nbsp" /><br/>
        {/literal}
        <span style="float: right; padding-top: 10px; text-align: right;">                                                           
            <a href="/lostPassword">Забыли пароль?</a>&nbsp;
            <a href="/registration">Зарегистрироваться</a>
        </span>
    </form>
    {/if}
</div>