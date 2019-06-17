<?php
require_once('../../core/connect.php');
//Ловим переменные для обработки запроса если их нет - выполняем сценарий вывода выпадающих списокв
if(isset($_POST['year']))
{
    sleep(1);
    $result = query ("INSERT INTO `years` ( `year`) VALUES ('".$_POST['year']."')");
    echo 'Добавляю год - '.$_POST['year'].' в базу';
    echo'
    <script>
        function funcBeforeObject () {
            $("#objecthere").text ("Успешно!");
        }

        function funcSuccessObject (data) {
            $("#objecthere").html(data);
        }

        function func() {
            $.ajax ({
                type:"POST",
                url: "ajax/baseedit/years.php",
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
          }
          
          setTimeout(func, 2000);
        </script>
    ';
    exit;
}
elseif(isset($_POST['yearId']))
{
    sleep(1);
    //Перед удаление года проверяем - нет ли в базе объектов относящихся к этому году
    $id =$_POST['yearId'];
    echo 'Возвращаю объект в работу!';
    $result2 = query ("UPDATE object SET arhiv = NULL WHERE id='$id'");


    echo'
    <script>
    function funcBefore () {
        $("#page-wrapper").text ("Ожидаю данные...");
    }

    function funcSuccess (data) {
        $("#page-wrapper").html(data);
    }

    function func() {
        $.ajax ({
            type:"POST",
            url: "ajax/objectedit/trash.php",
            //dataType: "html",
            beforeSend: funcBefore,
            success: funcSuccess
        });
      }
      
      setTimeout(func, 2000);
    </script>
';
exit;
}
sleep(1);

$resob = query("SELECT id, object_name FROM `object` WHERE arhiv IS NOT NULL");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectYear = '<select name="idob"  class="form-control input-sm" id="yearSelect">'; 
        $selectYear.= '<option value=""></option>'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectYear.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['object_name'].'">'.$row['object_name'].'</option>';
        } 
        $selectYear.='</select>';
    }

echo '
<style>
.raz { 
  -moz-appearance: textfield;
}
.raz::-webkit-inner-spin-button { 
  display: none;
}
</style>

<div class="showon">
        <br>
        <h1>Возврат объекта из корзины</h1>
        <br>';
        if(strlen($selectYear)<1)
        {
            echo'<label for="obsel">Нет объектов для восстановления!</label>';
        }
        else
        {
        echo'
        <form method="POST" action="#" id="createexp">
        <div class="col-sm-4">    
            <div class="form-group">
                <label for="obsel">Выберите Объект</label>
                '.$selectYear.'
                <br>
                <input type="hidden" id="yearId"  value="NULL">
                <input type="submit" id="deleteYear" class="btn btn-success" value="Вернуть в работу"/>
            </div>
        </div>
        </form>
        ';
        }
    echo'    
    </div>
</div>
';
?>

<script>

    $('#yearSelect').change(function () {
        $("#yearId").val($(this).find(':selected').data('id'));
    });

function funcBeforeObject () {
    $("#objecthere").text ("Ожидаю данные...");
}

function funcSuccessObject (data) {
    $("#objecthere").html(data);
}

$(document).ready(function(){

    $("#addYear").bind("click", function(){ 
        var comName = document.getElementById("year").value;
        $.ajax ({
            type:"POST",
            url: "ajax/baseedit/years.php",
            data: "year=" + comName,
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    $("#deleteYear").bind("click", function(){ 
        var yearId = document.getElementById("yearId").value;
        $.ajax ({
            type:"POST",
            url: "ajax/objectedit/trash.php",
            data: "yearId=" + yearId,
            //dataType: "html",
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });

    
});
</script>