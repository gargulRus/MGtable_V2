<?php
require_once('../../core/connect.php');
//Ловим переменные для обработки запроса если их нет - выполняем сценарий вывода выпадающих списокв
if(isset($_POST['vacName'])){
sleep(1);
$result = query ("INSERT INTO `kgs` ( `kgs_name`) VALUES ('".$_POST['vacName']."')");
echo 'Сохраняю новую КГС '.$_POST['vacName'].' в базу';
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
           url: "ajax/baseedit/kgs.php",
           //dataType: "html",
           beforeSend: funcBeforeObject,
           success: funcSuccessObject
       });
     }
     
     setTimeout(func, 2000);
   </script>
';
exit;
}elseif (isset($_POST['vacEdit'])) {
sleep(1);
$rename = $_POST['vacEdit'];
$id=$_POST['vacIdEdit'];
$result2 = query ("UPDATE kgs SET kgs_name = '$rename' WHERE id='$id'");
echo 'Новое наименование КГС - '.$_POST['vacEdit'];
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
           url: "ajax/baseedit/kgs.php",
           //dataType: "html",
           beforeSend: funcBeforeObject,
           success: funcSuccessObject
       });
     }
     
     setTimeout(func, 2000);
   </script>
';
exit;
}elseif (isset($_POST['vacIdDelete'])) {
sleep(1);
$id=$_POST['vacIdDelete'];
$result1 = query ("DELETE FROM kgs WHERE id='$id'");
echo 'Удаляю КГС из базы';
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
           url: "ajax/baseedit/kgs.php",
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
$resob = query("SELECT id, kgs_name FROM `kgs`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectVak = '<select name="idob"  class="form-control input-sm" id="obsel">'; 
        $selectVak.= '<option value=""></option>';
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectVak.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['kgs_name'].'">'.$row['kgs_name'].'</option>';
        } 
        $selectVak.="</select>";
    }
$resob = query("SELECT id, kgs_name FROM `kgs`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectVak1 = '<select name="idob"  class="form-control input-sm" id="obsel1">'; 
        $selectVak1.= '<option value=""></option>';
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectVak1.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['kgs_name'].'">'.$row['kgs_name'].'</option>';
        } 
        $selectVak1.="</select>";
    }
sleep(1);
echo '
<div class="showon">
    <div class="col-sm-4">
        <form method="POST" action="#" id="createexp">
            <div class="form-group">
                <label for="compsel">Новая КГС</label>
                <input name="name" type="text" value="" placeholder="Наим., колв-о, хар-ки" id="vacName"  class="form-control">
            </div>
            <br>
            <input type="submit" class="btn btn-success" id="vacuums" value="Добавить в базу"/>
        </form>
    </div>
    <div class="col-sm-4">
        <form method="POST" action="#" id="createexp">
            <div class="form-group">
                <label for="compsel">Изменить КГС</label>
                '.$selectVak.'
            </div>
            <br>
            <input name="comEdit" type="text" value="" placeholder="" id="vacEdit" class="form-control">
            <input type="hidden" id="vacIdEdit"  value="">
            <br>
            <input type="submit" id="vacuumEdit"  class="btn btn-default" value="Сохранить изменения"/>
        </form>
    </div>
    <div class="col-sm-4">
        <form method="POST" action="#" id="createexp">
            <div class="form-group">
                <label for="compsel">Удалить КГС</label>
                '.$selectVak1.'
                 <input type="hidden" id="vacIdDelete"  value="">
            </div>
            <br>
            <input type="submit" id="vacuumDelete" class="btn btn-danger" value="Удалить из базы"/>
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
        $("#vacEdit").val($(this).find(':selected').data('name'));
        $("#vacIdEdit").val($(this).find(':selected').data('id'));
  
    });
    $('#obsel1').change(function () {
        $("#vacIdDelete").val($(this).find(':selected').data('id'));
    });


    $("#vacuums").bind("click", function(){ 
        var vacName = document.getElementById("vacName").value;
        if(vacName == "")
        {
            alert("Укажите КГС и его характеристики!");
            return false;
        }
        else
        {
            $.ajax ({
                type:"POST",
                url: "ajax/baseedit/kgs.php",
                data: "vacName=" + vacName,
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
        }

    });

    $("#vacuumEdit").bind("click", function(){ 
        var comName = document.getElementById("vacEdit").value;
        var comEditId = document.getElementById("vacIdEdit").value;
        if(comEditId == "")
        {
            alert("Выберите КГС для изменения!");
            return false;
        }
        else
        {
            $.ajax ({
                type:"POST",
                url: "ajax/baseedit/kgs.php",
                data: {"vacEdit":comName,"vacIdEdit":comEditId, },
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
        }

    });
    $("#vacuumDelete").bind("click", function(){ 
        var comName = document.getElementById("vacIdDelete").value;
        if(comName == "")
        {
            alert("Выберите КГС для удаления!");
            return false;
        }
        else
        {
            $.ajax ({
            type:"POST",
            url: "ajax/baseedit/kgs.php",
            data: "vacIdDelete=" + comName,
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
        }

    });
    
});
</script>