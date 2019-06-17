<?php
     require_once('../../core/connect.php');
//Ловим переменные для обработки запроса если их нет - выполняем сценарий вывода выпадающих списокв
if(isset($_POST['comName'])){
    sleep(1);
    $result = query ("INSERT INTO `com` ( `com_name`) VALUES ('".$_POST['comName']."')");
    echo 'Сохроняю новый компрессор '.$_POST['comName'].' в базу';
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
                url: "ajax/baseedit/compressors.php",
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
          }
          
          setTimeout(func, 2000);
        </script>
    ';
    exit;
}elseif (isset($_POST['comEdit'])) {
    sleep(1);
    $rename = $_POST['comEdit'];
    $id=$_POST['comIdEdit'];
    $result2 = query ("UPDATE com SET com_name = '$rename' WHERE id='$id'");
    echo 'Новое наименование компрессора - '.$_POST['comEdit'];
    echo '<br>';
    echo 'Сохраняю изменения в базе';
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
                url: "ajax/baseedit/compressors.php",
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
          }
          
          setTimeout(func, 2000);
        </script>
    ';
    exit;
}elseif (isset($_POST['comIdDelete'])) {
    sleep(1);
    $id=$_POST['comIdDelete'];
    $result1 = query ("DELETE FROM com WHERE id='$id'");
    echo 'Удаляю компрессор из базы';
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
                url: "ajax/baseedit/compressors.php",
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


//Делаем запрос в таблицу c оборудованием и формируем список
$resob = query("SELECT id, com_name FROM `com`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectCom = '<select name="idob"  class="form-control input-sm" id="obsel">'; 
        $selectCom.= '<option value=""></option>';
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectCom.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['com_name'].'">'.$row['com_name'].'</option>';
        } 
        $selectCom.='</select>';
    }
$resob = query("SELECT id, com_name FROM `com`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectCom1 = '<select name="idob"  class="form-control input-sm" id="obsel1">'; 
        $selectCom1.= '<option value=""></option>';
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectCom1.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['com_name'].'">'.$row['com_name'].'</option>';
        } 
        $selectCom1.='</select>';
    }
sleep(1);
echo '
<div class="showon">
    <div class="col-sm-4">
        <form method="POST" action="#" id="createexp">
            <div class="form-group">
                <label for="compsel">Новый компрессор</label>
                <input name="name" type="text" value="" placeholder="Наим., колв-о, хар-ки" id="comName" class="form-control">
            </div>
            <br>
            <input type="submit" id="compressors"  class="btn btn-success" value="Добавить в базу"/>
        </form>
    </div>
    <div class="col-sm-4">
        <form method="POST" action="#" id="createexp">
            <div class="form-group">
                <label for="compsel">Изменить компрессор</label>
                '.$selectCom.'
            </div>
            <br>
            <input name="comEdit" type="text" value="" placeholder="" id="comEdit" class="form-control">
            <input type="hidden" id="comIdEdit"  value="">
            <br>
            <input type="submit" id="compressorsEdit"  class="btn btn-default" value="Сохранить изменения"/>
        </form>
    </div>
    <div class="col-sm-4">
        <form method="POST" action="#" id="createexp">
            <div class="form-group">
                <label for="compsel">Удалить компрессор</label>
                '.$selectCom1.'
                <input type="hidden" id="comIdDelete"  value="">
            </div>
            <br>
            <input type="submit" id="compressorsDelete" class="btn btn-danger" value="Удалить из базы"/>
        </form>
    </div>
</div>
';
?>

<script>

function funcBeforeObject () {
    $("#objecthere").text ("Ожидаю данные...");
}

function funcSuccessObject (data) {
    $("#objecthere").html(data);
}

$(document).ready(function(){

    $('#obsel').change(function () {
        $("#comEdit").val($(this).find(':selected').data('name'));
        $("#comIdEdit").val($(this).find(':selected').data('id'));
  
    });
    $('#obsel1').change(function () {
        $("#comIdDelete").val($(this).find(':selected').data('id'));
    });


 

    $("#compressors").bind("click", function(){ 
        var comName = document.getElementById("comName").value;
        if(comName == "")
        {
            alert("Укажите компрессор и его характеристики!");
            return false;
        }
        else
        {
            $.ajax ({
                type:"POST",
                url: "ajax/baseedit/compressors.php",
                data: "comName=" + comName,
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
        }
    });


    $("#compressorsEdit").bind("click", function(){ 
        var comEdit = document.getElementById("comEdit").value;
        var comEditId = document.getElementById("comIdEdit").value;
        if(comEditId == "")
        {
            alert("Выберите компрессор для изменения!");
            return false;
        }
        else
        {
            $.ajax ({
                type:"POST",
                url: "ajax/baseedit/compressors.php",
                data: {"comEdit":comEdit,"comIdEdit":comEditId, },
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
        }

    });
    $("#compressorsDelete").bind("click", function(){ 
        var comIdDelete = document.getElementById("comIdDelete").value;
        if(comIdDelete == "")
        {
            alert("Выберите компрессор для удаления!");
            return false;
        }
        else
        {
            $.ajax ({
                type:"POST",
                url: "ajax/baseedit/compressors.php",
                data: "comIdDelete=" + comIdDelete,
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
        }

    });
    
});
</script>