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
    $result = query("SELECT * FROM object WHERE year_id=".$_POST['yearId']);
    $objArr=array();
    while($data = mysqli_fetch_assoc($result)){ 
            //тут какая-то магия
        $objArr[]=array(
            'id'=>$data['id'],
            'object_name'=>$data['object_name'],
            'year_id'=>$data['year_id'],
            'kgs_id'=>$data['kgs_id'],
            'vak_id'=>$data['vak_id'],
            'com_id'=>$data['com_id'],
          );
    }
    //если объекты есть - выдаем предупреждение
    //если массив пустой - удаляем год из базы.
    if(empty($objArr))
    {
        $result = query ("DELETE FROM `years` WHERE id=".$_POST['yearId']);
        echo 'Удаляю год из базы';
    }else
    {
        echo'В базе есть объекты с этим годом! Сначала удалите объекты!';
    }

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
sleep(1);

$resob = query("SELECT id, year FROM `years`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectYear = '<select name="idob"  class="form-control input-sm" id="yearSelect">'; 
        $selectYear.= '<option value=""></option>'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectYear.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['year'].'">'.$row['year'].'</option>';
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
        <form method="POST" action="#" id="createexp">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="compsel">Введите новый год для добавления в базу</label>
                <input name="name" type="number" value="" placeholder="20__" id="year" class="form-control raz">
                <br>
                <input type="submit" id="addYear" class="btn btn-success" value="Добавить Год"/>
            </div>
        </div>
        <div class="col-sm-4">    
            <div class="form-group">
                <label for="obsel">Выберите Год</label>
                '.$selectYear.'
                <br>
                <input type="hidden" id="yearId"  value="">
                <input type="submit" id="deleteYear" class="btn btn-danger" value="Удалить год"/>
            </div>
        </div>
        </form>
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
        if (comName == "") {
            alert("Поле года не может быть пустым!");
            return false;
        }else{
            $.ajax ({
            type:"POST",
            url: "ajax/baseedit/years.php",
            data: "year=" + comName,
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
        }


    });
    $("#deleteYear").bind("click", function(){ 
        var yearId = document.getElementById("yearId").value;
        if(yearId==""){
            alert("Год не выбран!");
            return false;
        }else{
            $.ajax ({
                type:"POST",
                url: "ajax/baseedit/years.php",
                data: "yearId=" + yearId,
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
        }

    });

    
});
</script>