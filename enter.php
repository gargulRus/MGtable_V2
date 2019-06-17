<?php

echo '
<link rel="stylesheet" href="/plugins/fontawesome/css/fontawesome-all.min.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/main.css">
';
include_once(__DIR__."/core/connect.php");
if(!isset ($_SESSION['login'])){
        $login=$_POST['login'];
        $pass=$_POST['pass'];

        if(empty($login) or empty($pass)){
            exit('
        <div class="formposition">
        <div class="container">
          <div class="row">
            <div class="col-md-offset-3 col-md-6">
              <form class="form-horizontal" action="enter.php" method="POST">
                <span class="heading"> <img src="/image/logo.png" class="logoimglogin">
                             <br>
                 АО НПЦ <br>Гипроздрав</span>
                <div class="form-group">
              <p><h3>Логин или пароль не введен!</h3></p>
                </div>
                <div class="form-group">
                <input type="button" class="btn btn-default" value="Назад" onclick="history.back()">
            
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
            ');

        }
}
// echo $login;
// echo $pass;
// $login=siripslashes($login);
// $login=htmlspecialchars($login);

// $pass=siripslashes($pass);
// $pass=htmlspecialchars($pass);


$toAcc = query("SELECT * FROM autent WHERE login='".$login."'");
$accData = mysqli_fetch_array($toAcc);
// var_export($accData);
if($accData['pass']==""){
    exit('
   
    <div class="formposition">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6">
          <form class="form-horizontal" action="enter.php" method="POST">
            <span class="heading"> <img src="/image/logo.png" class="logoimglogin">
                         <br>
             АО НПЦ <br>Гипроздрав</span>
            <div class="form-group">
          <p><h3>Вы не ввели пароль!</h3></p>
            </div>
            <div class="form-group">
            <input type="button" class="btn btn-default" value="Назад" onclick="history.back()">
        
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    ');
}else{
    if($accData['pass']==$pass){
    // echo "Авторизация успешна!";
    // echo "<input type='button' value='Назад' onclick='history.back()'>";
    setcookie("login", $accData['login'], time()+3600*24*365);
    setcookie("role", $accData['role'], time()+3600*24*365);
    setcookie("name", $accData['name'], time()+3600*24*365);
    setcookie("au_id", $accData['au_id'], time()+3600*24*365);

    echo"
    <body>
    <div class='formpositionlog'>
    <div class='container'> 
    <p><img src='/image/sample23.gif' alt='Пример' width='400' height='375'></p>
    <p class='logver'>ver.: 0.2(a)</p>
    </div>
    </div>
   </body>
   ";
    }else{
        exit('


        <div class="formposition">
        <div class="container">
          <div class="row">
            <div class="col-md-offset-3 col-md-6">
              <form class="form-horizontal" action="enter.php" method="POST">
                <span class="heading"> <img src="/image/logo.png" class="logoimglogin">
                             <br>
                 АО НПЦ <br>Гипроздрав</span>
                <div class="form-group">
              <p><h3>Неверный пароль!</h3></p>
                </div>
                <div class="form-group">
                <input type="button" class="btn btn-default" value="Назад" onclick="history.back()">
            
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      ');
    }
}


echo "
<script type='text/javascript'>
function ToAuth() {
    location='index.php';
    }

    setTimeout('ToAuth()', 2500);
</script>

";

//     <h1>Добро Пожаловать! <span style='margin:auto;'><i class='fa fa-spinner fa-spin' style='font-size:48px'></i></h1></span>
/*
    echo"
    <body>
    <div class='formpositionhello form-horizontal'>
    <p><img src='/image/sample2.gif' alt='Пример' width='400' height='375'></p>
    </div>
    </body>";
    }else{
        exit("Пароль неверный!<br>
        <input type='button' value='Назад' onclick='history.back()'>
        ");
    }
}
*/
?>
