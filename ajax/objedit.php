<?php
require_once('../core/functions.php');
require_once('../core/connect.php');
require_once('../core/connectstyles.php');

//Делаем запрос в таблицу с Объектами и формируем выпадающий список
$resob = query("SELECT id, name FROM `objects`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectob = '<select name="idob"  class="form-control input-sm" id="obsel">'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectob.= "<option value=".$row['id'].">".$row['name']."</option>";
        } 
        $selectob.="</select>";
    }
//Делаем запрос в таблицу с ГИПами и формируем выпадающий список
$res = query("SELECT id, gipname FROM `gips`");
if(!$res) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($res)>0){ 
        $select = '<select name="idgp"  class="form-control input-sm" id="gipsel">'; 
        while($row = mysqli_fetch_assoc($res)){ 
            $select.= "<option value=".$row['id'].">".$row['gipname']."</option>";
        } 
        $select.="</select>";
    }
//Делаем запрос в таблицу с ГАПами и формируем выпадающий список
$resgap = query("SELECT id, gapname FROM `gaps`");
if(!$resgap) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resgap)>0){ 
        $selectgap = '<select name="idgap"  class="form-control input-sm" id="gapsel">'; 
        while($row = mysqli_fetch_assoc($resgap)){ 
            $selectgap.= "<option value=".$row['id'].">".$row['gapname']."</option>";
        } 
        $selectgap.="</select>";
    }
//Делаем запрос в таблицу с ОВ и формируем выпадающий список
$resov = query("SELECT id, ovname FROM `ov`");
if(!$resov) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resov)>0){ 
        $selectov = '<select name="idov"  class="form-control input-sm" id="ovsel">'; 
        while($row = mysqli_fetch_assoc($resov)){ 
            $selectov.= "<option value=".$row['id'].">".$row['ovname']."</option>";
        } 
        $selectov.="</select>";
    }
//Делаем запрос в таблицу с КР и формируем выпадающий список
$reskr = query("SELECT id, krname FROM `kr`");
if(!$reskr) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($reskr)>0){ 
        $selectkr = '<select name="idkr"  class="form-control input-sm" id="krsel">'; 
        while($row = mysqli_fetch_assoc($reskr)){ 
            $selectkr.= "<option value=".$row['id'].">".$row['krname']."</option>";
        } 
        $selectkr.="</select>";
    }
//Делаем запрос в таблицу с Кураторами и формируем выпадающий список
$rescur = query("SELECT id, cur_name FROM `curators`");
if(!$rescur) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($rescur)>0){ 
        $selectcur = '<select name="idcur"  class="form-control input-sm" id="cursel">'; 
            while($row = mysqli_fetch_assoc($rescur)){ 
                $selectcur.= "<option value=".$row['id'].">".$row['cur_name']."</option>";
            } 
        $selectcur.="</select>";
    }

//Делаем запрос в таблицу с Отв.Эксп. и формируем выпадающий список
$resexp = query("SELECT id, exp_name FROM `experts`");
if(!$resexp) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resexp)>0){ 
        $selectexp = '<select name="idexp"  class="form-control input-sm" id="expsel">'; 
        while($row = mysqli_fetch_assoc($resexp)){ 
            $selectexp.= "<option value=".$row['id'].">".$row['exp_name']."</option>";
        } 
        $selectexp.="</select>";
    }


$createobj='\
<div class="showon">\
    <div class="col-sm-4">\
        <form method="POST" action="#" id="createexp">\
            <div class="form-group">\
                <label for="compsel">Название объекта</label>\
                <input name="name" type="text" value="" placeholder="Название объекта" id="" class="form-control">\
            </div>\
            <label for="obsel">Выберите тип объекта</label>\
            <select name="idob"  class="form-control input-sm" id="obsel">\
                <option value="1223">Онко-центр</option>\
                <option value="333">Перинатальный</option>\
                <option value="333">Хирургич.</option>\
                <option value="333">Больница</option>\
                <option value="333">Поликлиника</option>\
                <option value="333">Санаторий</option>\
                <option value="333">Иной тип</option>\
            </select>\
            <br>\
        </form>\
    </div>\
    <div class="col-sm-4">\
        <form method="POST" action="#" id="createexp">\
            <div class="form-group">\
                <label for="compsel">Сроки Стадии Проект</label>\
                <br>\
                <label for="compsel">Начало</label>\
                <input type="date" placeholder="дата2" name="calendar">\
                <br>\
                <br>\
                <label for="compsel">Конец</label>\
                <input type="date" placeholder="дата2" name="calendar">\
            </div>\
            <div class="form-group">\
                <label for="compsel">Сроки Экспертизы</label>\
                <br>\
                <label for="compsel">Начало</label>\
                <input type="date" placeholder="дата2" name="calendar">\
                <br>\
                <br>\
                <label for="compsel">Конец</label>\
                <input type="date" placeholder="дата2" name="calendar">\
            </div>\
            <div class="form-group">\
                <label for="compsel">Сроки Стадии Рабочка</label>\
                <br>\
                <label for="compsel">Начало</label>\
                <input type="date" placeholder="дата2" name="calendar">\
                <br>\
                <br>\
                <label for="compsel">Конец</label>\
                <input type="date" placeholder="дата2" name="calendar">\
            </div>\
        </form>\
    </div>\
    <div class="col-sm-4">\
        <form method="POST" action="#" id="createexp">\
        <label for="compsel">Распределение Сотрудников</label>\
            <div class="form-group">\
                <label for="compsel">ГИП</label>\
                '.$select.'\
            </div>\
            <div class="form-group">\
                <label for="compsel">ГАП</label>\
                '.$selectgap.'\
            </div>\
            <div class="form-group">\
                <label for="compsel">ОВ</label>\
                '.$selectov.'\
            </div>\
            <div class="form-group">\
                <label for="compsel">КР</label>\
                '.$selectkr.'\
            </div>\
            <div class="form-group">\
                <label for="compsel">Куратор</label>\
                '.$selectcur.'\
            </div>\
            <div class="form-group">\
                <label for="compsel">Отв.Эксперт</label>\
                '.$selectexp.'\
            </div>\
            <br>\
            <div class="form-group text-right">\
                <input type="submit" class="btn btn-success" value="Создать объект"/>\
            </div>\
        </form>\
    </div>\
</div>\
';

$editobj='\
<div class="showon">\
    <div class="col-sm-4">\
        <form method="POST" action="#" id="createexp">\
            <label for="obsel">Выберите объект</label>\
            '.$selectob.'\
            <br>\
            <label for="obsel">Переименовать Объект</label>\
            <input type="text" placeholder="Новое название" name="namenew">\
            <br>\
            <br>\
            <label for="obsel">Сменить тип объекта</label>\
            <select name="idob"  class="form-control input-sm" id="obsel">\
                <option value="1223">Онко-центр</option>\
                <option value="333">Перинатальный</option>\
                <option value="333">Хирургич.</option>\
                <option value="333">Больница</option>\
                <option value="333">Поликлиника</option>\
                <option value="333">Санаторий</option>\
                <option value="333">Иной тип</option>\
            </select>\
        </form>\
    </div>\
    <div class="col-sm-4">\
    <label for="obsel">Изменить сроки</label>\
    <form method="POST" action="#" id="createexp">\
    <div class="form-group">\
        <label for="compsel">Сроки Стадии Проект</label>\
        <br>\
        <label for="compsel">Начало</label>\
        <input type="date" placeholder="дата2" name="calendar">\
        <br>\
        <br>\
        <label for="compsel">Конец</label>\
        <input type="date" placeholder="дата2" name="calendar">\
    </div>\
    <div class="form-group">\
        <label for="compsel">Сроки Экспертизы</label>\
        <br>\
        <label for="compsel">Начало</label>\
        <input type="date" placeholder="дата2" name="calendar">\
        <br>\
        <br>\
        <label for="compsel">Конец</label>\
        <input type="date" placeholder="дата2" name="calendar">\
    </div>\
    <div class="form-group">\
        <label for="compsel">Сроки Стадии Рабочка</label>\
        <br>\
        <label for="compsel">Начало</label>\
        <input type="date" placeholder="дата2" name="calendar">\
        <br>\
        <br>\
        <label for="compsel">Конец</label>\
        <input type="date" placeholder="дата2" name="calendar">\
    </div>\
</form>\
    </div>\
    <div class="col-sm-4">\
    <form method="POST" action="#" id="createexp">\
    <label for="compsel">Смена Сотрудников</label>\
        <div class="form-group">\
            <label for="compsel">ГИП</label>\
            '.$select.'\
        </div>\
        <div class="form-group">\
            <label for="compsel">ГАП</label>\
            '.$selectgap.'\
        </div>\
        <div class="form-group">\
            <label for="compsel">ОВ</label>\
            '.$selectov.'\
        </div>\
        <div class="form-group">\
            <label for="compsel">КР</label>\
            '.$selectkr.'\
        </div>\
        <div class="form-group">\
            <label for="compsel">Куратор</label>\
            '.$selectcur.'\
        </div>\
        <div class="form-group">\
            <label for="compsel">Отв.Эксперт</label>\
            '.$selectexp.'\
        </div>\
        <br>\
    </div>\
    <div class="col-sm-8">\
        <p>Список и редактирование разделов</p>\
        <p>Подумать над созданием разделов, как это реализовать?</p>\
        <p>Как сделать привязку к отделам, и как привязывать задачи к этим разделам?</p>\
        <br>\
    </div>\
    <div class="col-sm-4">\
    <br>\
    </div>\
    <div class="col-sm-4">\
    <br>\
    </div>\
    <div class="col-sm-4">\
    <br>\
    </div>\
    <div class="col-sm-4">\
    <div class="form-group text-right">\
    <span type="submit" id="submit" class="btn btn-danger">Удалить Объект</span>\
    <span type="submit" id="submit" class="btn btn-success">Сохранить изменения</span>\
    </div>\
    </div>\
</div>\
';
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        $(document).ready(function(){
            $("#createobj").bind("click", function(){ 
                document.getElementById('objecthere').innerHTML = '<?php if($_COOKIE['role']=='admin'){echo $createobj;}elseif($_COOKIE['role']=='gip'){echo $createobj;}else{}?>';
            });

            $("#editobj").bind("click", function(){ 
                document.getElementById('objecthere').innerHTML = '<?php if($_COOKIE['role']=='admin'){echo $editobj;}elseif($_COOKIE['role']=='gip'){echo $editobj;}else{}?>';
            });

        });
    </script>
<?php 
sleep(1);
echo'
<div class="showon">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Работа с Объектами</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
                <div id="objecthere">
                    <p> Выберите действие</p>
                </div>
        </div>
        <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
              </i> Список действий
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">';
                    if($_COOKIE['role']=='admin'){
                        echo'
                        <a href="#" id="createobj" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i> Создать объект
                    </a>
                        ';
                    }else{}
                    echo '<a href="#" id="editobj" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i> Изменить объект
                    </a>
                </div>
                <!-- /.list-group -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>
<!-- /.showon -->
';
?>