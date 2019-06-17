<?php
session_start(); 
// error_reporting(0); //Протокол ошибок выключен
//ini_set('display_errors',1); //Включаем ошибка в конфигурации PHP
//error_reporting(-1); //Вывод всех ошибок
include_once(__DIR__."/core/connect.php");
include_once(__DIR__."/core/functions.php");
if ($_COOKIE['login']==""){
  echo '
  <!DOCTYPE html>
  <html lang="ru">
    <head>
      <link rel="manifest" href="manifest.json">
      <script src="manup.js"></script>
      <meta name="Description" content="Giprotasks">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <meta name="theme-color" content="#317EFB"/>
      <link rel="stylesheet" href="css/logform.css">
      <title>АО Гипроздрав</title>
    </head>
    <body>
    <div class="needhide">
    </div>
      <div class="showon">
        <div class="container">
          <form action="enter.php" method="POST">
            <span class="heading"><img alt="logoimg" src="/image/loginicon2.png" class="logoimglogin">
            <br>
            АО НПЦ <br>Гипроздрав</span>
            <ul class="flex-outer">
            <li>
              <input type="text" class="inputstyle" name="login" id="inputlogin" placeholder="Логин">
            </li>
            <li>
              <input type="text" class="inputstyle" name="pass" id="inputpass" placeholder="Пароль">
            </li>
            </ul> 
            <ul class="flex-outer">
              <li>
              <button class="inputstyle-btn" type="submit">Вход</button>
            </li>
            </ul>  
          </form>
        </div>
      </div>
  ';
echo '
    <div class="footer-form">
      <p>ver.: 0.2(a)</p>
      <p>© АО &quot;Гипроздрав&quot; '; echo date("Y");echo '</p>
    </div>
    </body>
  </html>
      ';

}

if(empty($_COOKIE['login'])){

}else{

  if(isset($_GET['save'])){
    include(__DIR__.'/save/'.$_GET['save'].'.php');
    exit;
}
//Обновленный ajax обработчик
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
  sleep(1);
  load_modal();
  exit;
}
  include(__DIR__.'/pages/index.php');
}


?>




