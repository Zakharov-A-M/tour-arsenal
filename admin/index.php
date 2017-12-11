<?php
include_once $host_mane.'header.php';
?>


<div class="login_page">
    <div class="login-wrapper">
        <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">
            <h1><a  title="ADMIN Page" tabindex="-1">ADMIN</a></h1>
                <form name="loginform" id="loginform">
                      <p>
                          <label for="user_login">E-mail<br />
                              <input type="text" name="email" id="user_login" class="input" placeholder="E-mail" maxlength = "20" /></label>
                      </p>
                      <p>
                          <label for="user_pass">Password<br />
                              <input type="password" name="pass" id="user_pass" class="input" placeholder="Password" maxlength = "20" /></label>
                      </p>

                      <p class="submit">
                          <input type="button"  class="btn btn-orange btn-block" value="Войти" id="singIn"/>
                      </p>
                </form>
        </div>
    </div>

</div>

<style>
    body {
        overflow-y: hidden;
    }
</style>





