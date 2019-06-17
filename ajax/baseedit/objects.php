<?php
require_once('../../core/connect.php');
if(isset($_POST['name'])){
    sleep(1);
    echo 'Создаю объект '.$_POST['name'];
    //ДАТЫ СТАДИИ П
    $mgDateP=$_POST['dateMgP'];
    $kgsDateP=$_POST['dateKgsP'];
    //ДАТЫ СТАДИИ Р
    $mgDateR=$_POST['dateMgR'];
    $kgsDateR=$_POST['dateKgsR'];

    $commDir=$_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Коммерческие/';
    if(!is_dir($commDir))
    {
        mkdir($commDir, 0777, true);
    }
    $pdfDir=$_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Проект(PDF)/';
    if(!is_dir($pdfDir))
    {
        mkdir($pdfDir, 0777, true);
    }
    $dwgDir=$_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Проект(DWG)/';
    if(!is_dir($dwgDir))
    {
        mkdir($dwgDir, 0777, true);
    }

    //Сохраняем в базу объект
    $result = query ("INSERT INTO `object` ( `object_name`, `year_id`,
    `kgs_id` , `vak_id`, `com_id`) VALUES (
    '".$_POST['name']."' , ".$_POST['yearId'].",
    ".$_POST['kgsId'].",".$_POST['vacId'].",
    ".$_POST['comId'].")");
    //Теперь что бы сохранить даты, делаем запрос в базу по имени объекта
    //и получаем его ID
    $list = array();
    $result = query('SELECT id FROM object WHERE object_name="'.$_POST['name'].'"');

    while($data = mysqli_fetch_assoc($result)){ 
                $list[]=array(
                    'id'=>$data['id']
                );
    }
    //Сохраняем ИД объекта в переменную
    $objectID=$list[0]['id'];
    //Теперь проверяем что у нас даты пришли не пустые.
    //в противном случае сохраняем в базу NULL
    //ДАТЫ СТАДИИ П
    if(isset($_POST['dateMgP']) && strlen($_POST['dateMgP'])>1)
    {   
        $result = query ("INSERT INTO `project` ( `objects_id`, `mg_date`)
         VALUES (".$list[0]['id']." , '".$_POST['dateMgP']."')");
         if(isset($_POST['dateKgsP']) && strlen($kgsDateP)>1)
         {
                
            $result2 = query ("UPDATE project SET kgs_date = '$kgsDateP' WHERE objects_id='$objectID'");
         }
    }elseif(isset($_POST['dateKgsP']) && strlen($_POST['dateKgsP'])>1)
    {   
        $result = query ("INSERT INTO `project` ( `objects_id`, `kgs_date`)
        VALUES (".$objectID." , '".$_POST['dateKgsP']."')");
    }else{
        $result = query ("INSERT INTO `project` ( `objects_id`, `mg_date`,`kgs_date`)
        VALUES (".$objectID." , NULL,NULL)");
    }
    //ДАТЫ СТАДИИ Р
    if(isset($mgDateR) && strlen($mgDateR)>1)
    {   
        $result = query ("INSERT INTO `work` ( `objects_id`, `mg_date`)
         VALUES (".$objectID." , '".$mgDateR."')");
         if(isset($kgsDateR) && strlen($kgsDateR)>1)
         {
                
            $result2 = query ("UPDATE work SET kgs_date = '$kgsDateR' WHERE objects_id='$objectID'");
         }
    }elseif(isset($kgsDateR) && strlen($kgsDateR)>1)
    {   
        $result = query ("INSERT INTO `work` ( `objects_id`, `kgs_date`)
        VALUES (".$objectID." , '".$kgsDateR."')");
    }else{
        $result = query ("INSERT INTO `work` ( `objects_id`, `mg_date`,`kgs_date`)
        VALUES (".$objectID." , NULL,NULL)");
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
                url: "ajax/baseedit/objects.php",
                //dataType: "html",
                beforeSend: funcBeforeObject,
                success: funcSuccessObject
            });
          }
          
          setTimeout(func, 1000);
        </script>
    ';
    exit;
}
//Делаем запрос в таблицу c оборудованием и формируем список
$resob = query("SELECT id, com_name FROM `com`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectCom = '<select name="idob"  class="form-control input-sm" id="comSelect">';
        $selectCom.= '<option value=""></option>'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectCom.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['com_name'].'">'.$row['com_name'].'</option>';
        } 
        $selectCom.='</select>';
    }
$resob = query("SELECT id, vak_name FROM `vak`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectVak = '<select name="idob"  class="form-control input-sm" id="vacSelect">'; 
        $selectVak.= '<option value=""></option>'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectVak.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['vak_name'].'">'.$row['vak_name'].'</option>';
        } 
        $selectVak.='</select>';
    }
$resob = query("SELECT id, kgs_name FROM `kgs`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectKgs = '<select name="idob"  class="form-control input-sm" id="kgsSelect">'; 
        $selectKgs.= '<option value=""></option>'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectKgs.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['kgs_name'].'">'.$row['kgs_name'].'</option>';
        } 
        $selectKgs.='</select>';
    }
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


sleep(1);
echo '
<div class="showon">
    <div class="col-sm-4">
        <form method="POST" action="#" id="createexp">
            <div class="form-group">
                <label for="compsel">Название объекта</label>
                <input name="name" type="text" value="" placeholder="Название объекта" id="name" class="form-control">
            </div>
            <label for="obsel">Выберите Год</label>
            '.$selectYear.'
            <br>
    </div>
    <div class="col-sm-4">
            <div class="form-group">
                <label for="compsel">Сроки Стадии Проект</label>
                <br>
                <label for="compsel">Сдача МГ</label>
                <input type="date" placeholder="дата2" id="mgP" name="mgP">
                <br>
                <br>
                <label for="compsel">Сдача КГС</label>
                <input type="date" placeholder="дата2" id="kgsP" name="kgsP">
            </div>
            <div class="form-group">
                <label for="compsel">Сроки Стадии Рабочка</label>
                <br>
                <label for="compsel">Сдача МГ</label>
                <input type="date" placeholder="дата2" id="mgR" name="mgR">
                <br>
                <br>
                <label for="compsel">Сдача КГС</label>
                <input type="date" placeholder="дата2" id="kgsR" name="kgsR">
            </div>
    </div>
    <div class="col-sm-4">
        <label for="compsel">Выбор оборудования</label>
            <div class="form-group">
                <label for="compsel">Компрессорные станции</label>
                '.$selectCom.'
            </div>
            <div class="form-group">
                <label for="vakpsel">Вакуумные станции</label>
                '.$selectVak.'
            </div>
            <div class="form-group">
                <label for="kgspsel">КГС</label>
                '.$selectKgs.'
            </div>
            <br>
            <div class="form-group text-right">
                <input type="hidden" id="yearId"  value="">
                <input type="hidden" id="comId"  value="NULL">
                <input type="hidden" id="vacId"  value="NULL">
                <input type="hidden" id="kgsId"  value="NULL">
                <input type="submit" class="btn btn-success" id="createObject" value="Создать объект"/>
            </div>
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

    $('#yearSelect').change(function () {
        $("#yearId").val($(this).find(':selected').data('id'));
    });
    $('#comSelect').change(function () {
        $("#comId").val($(this).find(':selected').data('id'));
    });
    $('#vacSelect').change(function () {
        $("#vacId").val($(this).find(':selected').data('id'));
    });
    $('#kgsSelect').change(function () {
        $("#kgsId").val($(this).find(':selected').data('id'));
    });


    $("#createObject").bind("click", function(){ 
        var name = document.getElementById("name").value;
        var yearId = document.getElementById("yearId").value;
        var dateMgP = document.getElementById("mgP").value;
        var dateKgsP = document.getElementById("kgsP").value;
        var dateMgR = document.getElementById("mgR").value;
        var dateKgsR = document.getElementById("kgsR").value;
        var comId = document.getElementById("comId").value;
        var vacId = document.getElementById("vacId").value;
        var kgsID = document.getElementById("kgsId").value;
        if(name == "" )
        {
            alert("Укажите название Объекта!");
            return false;
        }
        else if(yearId == "")
        {
            alert("Выберите год!");
            return false;
        }
        else
        {
            $.ajax ({
            type:"POST",
            url: "ajax/baseedit/objects.php",
            data: {"name":name,
                   "yearId":yearId,
                   "dateMgP":dateMgP,
                   "dateKgsP":dateKgsP,
                   "dateMgR":dateMgR,
                   "dateKgsR":dateKgsR,
                   "comId":comId,
                   "vacId":vacId,
                   "kgsId":kgsID
                     },
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
        }

    });
    
});
</script>