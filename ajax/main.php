<div class="showon">
<?php 
require_once('../core/functions.php');
require_once('../core/connect.php');
require_once('../core/connectstyles.php');
//ini_set('display_errors',1); //Включаем ошибка в конфигурации PHP
//error_reporting(-1); //Вывод всех ошибок
sleep(1);

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

// формируем первоначальный массив порядковыми номерами
$main_pos=array(
    1=>'1',
    '2',
    '3',
    '4',
    '5',
    '6'
    );
//задаем переменную для проставки порядковых номеров
    $pp= 1;

$list = array();
$keygip=0; /*Переменная для работы с массивом giparr в массиле $list. порядковый номер всегда будет 0 
так что задаем его раньше чем цикл обработки для таблицы*/
$result = query("SELECT id, name, gip_id, gap_id, ov_id, kr_id, cur_id, exp_id, arhiv_id, wip FROM objects");
/*Тут после первого запроса, перебираем полученный массив с
объектами, и на кажду итерацию цикла делаем еще один запрос в таблицу с задачами,
где по id объекта ищем задачи относящиеся к данному объекту.
*/
while($data = mysqli_fetch_assoc($result)){ 


$result2 = query("SELECT id, gipname FROM gips WHERE id=".$data['gip_id']);
$giparr=array();
//промеряем наличие записи в objects записи о ГИПе, если есть формируем запрос
if($data['gip_id']!=NULL){
while($gip = mysqli_fetch_assoc($result2)){ 
     //тут какая-то магия
 $giparr[]=array(
       'id'=>$gip['id'],
       'gipname'=>$gip['gipname'],
   );
}
}
$result2 = query("SELECT id, gapname FROM gaps WHERE id=".$data['gap_id']);
$gaparr=array();
//промеряем наличие записи в objects записи о ГАПе, если есть формируем запрос
if($data['gap_id']!=NULL){
while($gap = mysqli_fetch_assoc($result2)){ 
     //тут какая-то магия
 $gaparr[]=array(
       'id'=>$gap['id'],
       'gapname'=>$gap['gapname'],
   );
}
}
$result2 = query("SELECT id, ovname FROM ov WHERE id=".$data['ov_id']);
$ovarr=array();
//промеряем наличие записи в objects записи о ОВ, если есть формируем запрос
if($data['ov_id']!=NULL){
while($ov = mysqli_fetch_assoc($result2)){ 
     //тут какая-то магия
 $ovarr[]=array(
       'id'=>$ov['id'],
       'ovname'=>$ov['ovname'],
   );
}
}
$result2 = query("SELECT id, krname FROM kr WHERE id=".$data['kr_id']);
$krarr=array();
//промеряем наличие записи в objects записи о КР, если есть формируем запрос
if($data['kr_id']!=NULL){
while($kr = mysqli_fetch_assoc($result2)){ 
     //тут какая-то магия
 $krarr[]=array(
       'id'=>$kr['id'],
       'krname'=>$kr['krname'],
   );
}
}

$result2 = query("SELECT id, cur_name FROM curators WHERE id=".$data['cur_id']);
$curarr=array();
//промеряем наличие записи в objects записи о ГИПе, если есть формируем запрос
if($data['cur_id']!=NULL){
while($cur = mysqli_fetch_assoc($result2)){ 
    //тут какая-то магия
$curarr[]=array(
      'id'=>$cur['id'],
      'cur_name'=>$cur['cur_name'],
  );
}
}
$result2 = query("SELECT id, exp_name FROM experts WHERE id=".$data['exp_id']);
$exparr=array();
//промеряем наличие записи в objects записи о ГИПе, если есть формируем запрос
if($data['exp_id']!=NULL){
while($exp = mysqli_fetch_assoc($result2)){ 
   //тут какая-то магия
$exparr[]=array(
     'id'=>$exp['id'],
     'exp_name'=>$exp['exp_name'],
 );
}
}
$result3 = query("SELECT id, data, data_2, pos_num FROM jobplan WHERE object_id=".$data['id']);
$planarr=array();
while($plan = mysqli_fetch_assoc($result3)){ 
     //тут какая-то магия
 $planarr[$plan['pos_num']]=array(
       'id'=>$plan['id'],
       'data'=>$plan['data'],
       'data_2'=>$plan['data_2'],
       'pos_num'=>$plan['pos_num']
   );
}
$list[]=array(
 'id'=>$data['id'],
 'name'=>$data['name'],
 'gip_id'=>$data['gip_id'],
 'gap_id'=>$data['gap_id'],
 'ov_id'=>$data['ov_id'],
 'kr_id'=>$data['kr_id'],
 'cur_id'=>$data['cur_id'],
 'exp_id'=>$data['exp_id'],
 'arhiv_id'=>$data['arhiv_id'],
 'wip'=>$data['wip'],
 'gip'=>$giparr,
 'gap'=>$gaparr,
 'ov'=>$ovarr,
 'kr'=>$krarr,
 'cur'=>$curarr,
 'exp'=>$exparr,
 'plan'=>$planarr
);

}
//формируем таблицу с полученным вложенным массивом

if($_COOKIE['role']=='admin'){
echo '
<div class="buttnons">
<br><br>
<a href="#" data-toggle="modal" data-target="#write" class="openformcreate btn btn-gipro">Объекты</a>
<a href="#" data-toggle="modal" data-target="#newgip" class="openformcreate btn btn-gipro">ГИПы</a>
<a href="#" data-toggle="modal" data-target="#newgap" class="openformcreate btn btn-gipro">ГАПы</a>
<a href="#" data-toggle="modal" data-target="#newov" class="openformcreate btn btn-gipro">ОВ</a>
<a href="#" data-toggle="modal" data-target="#newkr" class="openformcreate btn btn-gipro">КР</a>
<a href="#" data-toggle="modal" data-target="#newcur" class="openformcreate btn btn-gipro">Кураторы</a> 
<a href="#" data-toggle="modal" data-target="#newexp" class="openformcreate btn btn-gipro">Отв за Эксперт.</a>  
<br><br>
</div>';
echo '
<div class="buttnons">
<form method="POST">
<input type="submit" class="btn btn-gipro" name="btnWip" value="В работе" />
<input type="submit" class="btn btn-gipro" name="btnNoWip" value="Доработка" />
</form>
</div>
';
}else{
    echo'<br><br>';
}
echo "   <div class='div-table'>";
echo "
<table class='table table-bordered table-hover table-condensed list-object'>

 <tr>
     <th class='pp' id='thid' rowspan='2'>П.П.</th>
     <th class='obname' id='thida' rowspan='2'>Договор</th>
     <th class='gipname' id='thidb' rowspan='2'>ГИП</th>
     <th class='gapname' id='thidc' rowspan='2'>ГАП</th>
     <th class='ovname' id='thidd' rowspan='2'>ОВ</th>
     <th class='krname' id='thide' rowspan='2'>КР</th>
     <th class='kurname' id='thidf' rowspan='2'>Куратор</th>
     <th class='expname' id='thidg' rowspan='2'>Отв. Эксперт.</th>
     <th class='pro' id='thidh' colspan='2'> Проект </th>
     <th class='exp' id='thidi' colspan='2'> Экспертиза </th>
     <th class='rab' id='thidj' colspan='2'> Рабочка </th>
     </tr>
 ";
 echo "  <tr>
 <th class='paintrows pstart'>Начало</th>
 <th class='paintrows pend'>Конец</th>
 <th class='paintrows expstart'>Начало</th>
 <th class='paintrows expend'>Конец</th>
 <th class='paintrows rstart'>Начало</th>
 <th class='paintrows rend'>Конец</th>
</tr>";

if($_COOKIE['role']=='admin'){

if(isset($_POST['btnWip'])){
    foreach ($list as $key => $row) {
        if($row['arhiv_id']== NULL && $row['wip']== NULL){
            echo '<tr>';
            echo '<td>' . $pp . '</td>';
            // echo '<td><a 
            //     href="/?modal=renameobject&id='.$row['id'].'"
            //     class="openform modal-a" 
            //     >'. $row['name'] .'</a></td>';
            echo '<td><a 
                href="/?modal=testmodal.php"
                class="openform tooltip1" title="График проектирования"
                >'. $row['name'] .'</a></td>';
                //проверяем наличие ГИПа в массиве
                if(isset($row['gip'][$keygip]['gipname'])){
                    echo '<td class="gips"><a  id="openformgip"
                href="#" 
                data-toggle="modal" data-target="#changegip" 
                class="openformgip" 
                data-id="'.$row['id'].'"
                data-gip_id="'.$row['gip_id'].'"
                >'. $row['gip'][$keygip]['gipname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformgip"
                    href="#" 
                    data-toggle="modal" data-target="#changegip" 
                    class="openformgip hideFuck" 
                    data-id="'.$row['id'].'"
                    data-gip_id="'.$row['gip_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие ГАПа в массиве
                if(isset($row['gap'][$keygip]['gapname'])){
                    echo '<td class="gaps"><a  id="openformgap"
                href="#" 
                data-toggle="modal" data-target="#changegap" 
                class="openformgap" 
                data-id="'.$row['id'].'"
                data-gap_id="'.$row['gap_id'].'"
                >'. $row['gap'][$keygip]['gapname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformgap"
                    href="#" 
                    data-toggle="modal" data-target="#changegap" 
                    class="openformgap hideFuck" 
                    data-id="'.$row['id'].'"
                    data-gap_id="'.$row['gap_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие ОВ в массиве
                if(isset($row['ov'][$keygip]['ovname'])){
                    echo '<td class="ovs"><a  id="openformov"
                href="#" 
                data-toggle="modal" data-target="#changeov" 
                class="openformov" 
                data-id="'.$row['id'].'"
                data-ov_id="'.$row['ov_id'].'"
                >'. $row['ov'][$keygip]['ovname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformov"
                    href="#" 
                    data-toggle="modal" data-target="#changeov" 
                    class="openformov hideFuck" 
                    data-id="'.$row['id'].'"
                    data-ov_id="'.$row['ov_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие КР в массиве
                if(isset($row['kr'][$keygip]['krname'])){
                    echo '<td class="krs"><a  id="openformkr"
                href="#" 
                data-toggle="modal" data-target="#changekr" 
                class="openformkr" 
                data-id="'.$row['id'].'"
                data-kr_id="'.$row['kr_id'].'"
                >'. $row['kr'][$keygip]['krname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformkr"
                    href="#" 
                    data-toggle="modal" data-target="#changekr" 
                    class="openformkr hideFuck" 
                    data-id="'.$row['id'].'"
                    data-kr_id="'.$row['kr_id'].'"
                    >+</a></td>';
                }
                 //проверяем наличие Куратора в массиве
                if(isset($row['cur'][$keygip]['cur_name'])){
                    echo '<td><a 
                href="#" 
                data-toggle="modal" data-target="#changecur" 
                class="openformcur" 
                data-id="'.$row['id'].'"
                data-cur_id="'.$row['cur_id'].'"
                >'. $row['cur'][$keygip]['cur_name'] .'</a></td>';
                }else {
                    echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changecur" 
                    class="openformcur hideFuck" 
                    data-id="'.$row['id'].'"
                    data-cur_id="'.$row['cur_id'].'"
                    >+</a></td>';
                }
                 //проверяем наличие Эксперта в массиве
                if(isset($row['exp'][$keygip]['exp_name'])){
                    echo '<td><a 
                href="#" 
                data-toggle="modal" data-target="#changeexp" 
                class="openformexp" 
                data-id="'.$row['id'].'"
                data-exp_id="'.$row['exp_id'].'"
                >'. $row['exp'][$keygip]['exp_name'] .'</a></td>';
                }else {
                    echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changeexp" 
                    class="openformexp hideFuck" 
                    data-id="'.$row['id'].'"
                    data-exp_id="'.$row['exp_id'].'"
                    >+</a></td>';
                }
            foreach ($main_pos as $key_m => $col) {
                if(isset($row['plan'][$key_m])){
                    /*
                    Логика - найти отставание от первой даты заданной по контракту. 
                    Дата в data_2 появляется только если срок ПО контракту был изменен.
                    смотрим есть ли в ячейке data_2 запись и если есть 
                    берем data и data_2 и ищем через функцию разницу в днях.
                    если дата в data_2 больше чем data - окрашиваем строку в красный
                    если дата в data_2 меньше чем data - окрашиваем строку в зеленый.
    
                    */
                    if($row['plan'][$key_m]['data_2']!=NULL){
    
                        $daydiff =  daydiff($row['plan'][$key_m]['data'], $row['plan'][$key_m]['data_2']);
    
                        if($row['plan'][$key_m]['data'] > $row['plan'][$key_m]['data_2']){
                            $daysdiff = '<font color="green"> + '.$daydiff.' дней</font>';
                        }else{ 
                            $daysdiff =  '<font color="red"> + '.$daydiff.' дней</font>';
                        }
                        //полученную дату из массива переворачиваем в удобный вид.
                        $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data_2']));
    
                        if($key_m==1 || $key_m==2){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                          href="#" 
                          data-toggle="modal" data-target="#changedate" 
                          class="openformplan" 
                          data-id="'.$row['plan'][$key_m]['id'].'"
                          data-data="'.$row['plan'][$key_m]['data'].'"
                          data-pos="'.$key_m.'"
                          data-object-id="'.$row['id'].'"
                          >'. $newdate .' '.$daysdiff.'</a></td>';
                        }elseif($key_m==5 || $key_m==6){
                            echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                            href="#" 
                            data-toggle="modal" data-target="#changedateR" 
                            class="openformplanR" 
                            data-id="'.$row['plan'][$key_m]['id'].'"
                            data-data="'.$row['plan'][$key_m]['data'].'"
                            data-pos="'.$key_m.'"
                            data-object-id="'.$row['id'].'"
                            >'. $newdate .' '.$daysdiff.'</a></td>';
                        }else{
                            echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                            href="#" 
                            data-toggle="modal" data-target="#changedate" 
                            class="openformplan" 
                            data-id="'.$row['plan'][$key_m]['id'].'"
                            data-data="'.$row['plan'][$key_m]['data'].'"
                            data-pos="'.$key_m.'"
                            data-object-id="'.$row['id'].'"
                            >'. $newdate .' '.$daysdiff.'</a></td>';
                        }
    
                    }else{
                        //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data']));
                    if($key_m==1 || $key_m==2){
                      echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        class="openformplan" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }elseif($key_m==5 || $key_m==6){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedateR" 
                        class="openformplanR" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }else{
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        class="openformplan" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }
    
                    }
                }else{
                    if($key_m==1 || $key_m==2){
                    echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplan hideFuck" >+
                        </a> </td>';
                    }elseif($key_m==5 || $key_m==6){
                        echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedateR" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplanR hideFuck" >+
                        </a> </td>';
                    }else{
                        echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplan hideFuck" >+
                        </a> </td>';
                    }
                }
            }
            echo '</tr>';
        $pp++;
        }else{}
      }
           echo "</table>";
           echo "</div>";
}elseif(isset($_POST['btnNoWip'])){
    foreach ($list as $key => $row) {
        if($row['arhiv_id']== NULL && $row['wip']== 1){
            echo '<tr>';
            echo '<td>' . $pp . '</td>';
            // echo '<td><a 
            //     href="/?modal=renameobject&id='.$row['id'].'"
            //     class="openform modal-a" 
            //     >'. $row['name'] .'</a></td>';
            echo '<td><a 
                href="/?page=period.php&object_id='.$row['id'].'&name='.$row['name'].'"
                class="openform tooltip1" title="График проектирования"
                >'. $row['name'] .'</a></td>';
                //проверяем наличие ГИПа в массиве
                if(isset($row['gip'][$keygip]['gipname'])){
                    echo '<td class="gips"><a  id="openformgip"
                href="#" 
                data-toggle="modal" data-target="#changegip" 
                class="openformgip" 
                data-id="'.$row['id'].'"
                data-gip_id="'.$row['gip_id'].'"
                >'. $row['gip'][$keygip]['gipname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformgip"
                    href="#" 
                    data-toggle="modal" data-target="#changegip" 
                    class="openformgip hideFuck" 
                    data-id="'.$row['id'].'"
                    data-gip_id="'.$row['gip_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие ГАПа в массиве
                if(isset($row['gap'][$keygip]['gapname'])){
                    echo '<td class="gaps"><a  id="openformgap"
                href="#" 
                data-toggle="modal" data-target="#changegap" 
                class="openformgap" 
                data-id="'.$row['id'].'"
                data-gap_id="'.$row['gap_id'].'"
                >'. $row['gap'][$keygip]['gapname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformgap"
                    href="#" 
                    data-toggle="modal" data-target="#changegap" 
                    class="openformgap hideFuck" 
                    data-id="'.$row['id'].'"
                    data-gap_id="'.$row['gap_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие ОВ в массиве
                if(isset($row['ov'][$keygip]['ovname'])){
                    echo '<td class="ovs"><a  id="openformov"
                href="#" 
                data-toggle="modal" data-target="#changeov" 
                class="openformov" 
                data-id="'.$row['id'].'"
                data-ov_id="'.$row['ov_id'].'"
                >'. $row['ov'][$keygip]['ovname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformov"
                    href="#" 
                    data-toggle="modal" data-target="#changeov" 
                    class="openformov hideFuck" 
                    data-id="'.$row['id'].'"
                    data-ov_id="'.$row['ov_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие КР в массиве
                if(isset($row['kr'][$keygip]['krname'])){
                    echo '<td class="krs"><a  id="openformkr"
                href="#" 
                data-toggle="modal" data-target="#changekr" 
                class="openformkr" 
                data-id="'.$row['id'].'"
                data-kr_id="'.$row['kr_id'].'"
                >'. $row['kr'][$keygip]['krname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformkr"
                    href="#" 
                    data-toggle="modal" data-target="#changekr" 
                    class="openformkr hideFuck" 
                    data-id="'.$row['id'].'"
                    data-kr_id="'.$row['kr_id'].'"
                    >+</a></td>';
                }
                 //проверяем наличие Куратора в массиве
                if(isset($row['cur'][$keygip]['cur_name'])){
                    echo '<td><a 
                href="#" 
                data-toggle="modal" data-target="#changecur" 
                class="openformcur" 
                data-id="'.$row['id'].'"
                data-cur_id="'.$row['cur_id'].'"
                >'. $row['cur'][$keygip]['cur_name'] .'</a></td>';
                }else {
                    echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changecur" 
                    class="openformcur hideFuck" 
                    data-id="'.$row['id'].'"
                    data-cur_id="'.$row['cur_id'].'"
                    >+</a></td>';
                }
                 //проверяем наличие Эксперта в массиве
                if(isset($row['exp'][$keygip]['exp_name'])){
                    echo '<td><a 
                href="#" 
                data-toggle="modal" data-target="#changeexp" 
                class="openformexp" 
                data-id="'.$row['id'].'"
                data-exp_id="'.$row['exp_id'].'"
                >'. $row['exp'][$keygip]['exp_name'] .'</a></td>';
                }else {
                    echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changeexp" 
                    class="openformexp hideFuck" 
                    data-id="'.$row['id'].'"
                    data-exp_id="'.$row['exp_id'].'"
                    >+</a></td>';
                }
            foreach ($main_pos as $key_m => $col) {
                if(isset($row['plan'][$key_m])){
                    /*
                    Логика - найти отставание от первой даты заданной по контракту. 
                    Дата в data_2 появляется только если срок ПО контракту был изменен.
                    смотрим есть ли в ячейке data_2 запись и если есть 
                    берем data и data_2 и ищем через функцию разницу в днях.
                    если дата в data_2 больше чем data - окрашиваем строку в красный
                    если дата в data_2 меньше чем data - окрашиваем строку в зеленый.
    
                    */
                    if($row['plan'][$key_m]['data_2']!=NULL){
    
                        $daydiff =  daydiff($row['plan'][$key_m]['data'], $row['plan'][$key_m]['data_2']);
    
                        if($row['plan'][$key_m]['data'] > $row['plan'][$key_m]['data_2']){
                            $daysdiff = '<font color="green"> + '.$daydiff.' дней</font>';
                        }else{ 
                            $daysdiff =  '<font color="red"> + '.$daydiff.' дней</font>';
                        }
                        //полученную дату из массива переворачиваем в удобный вид.
                        $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data_2']));
    
                        if($key_m==1 || $key_m==2){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                          href="#" 
                          data-toggle="modal" data-target="#changedate" 
                          class="openformplan" 
                          data-id="'.$row['plan'][$key_m]['id'].'"
                          data-data="'.$row['plan'][$key_m]['data'].'"
                          data-pos="'.$key_m.'"
                          data-object-id="'.$row['id'].'"
                          >'. $newdate .' '.$daysdiff.'</a></td>';
                        }elseif($key_m==5 || $key_m==6){
                            echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                            href="#" 
                            data-toggle="modal" data-target="#changedateR" 
                            class="openformplanR" 
                            data-id="'.$row['plan'][$key_m]['id'].'"
                            data-data="'.$row['plan'][$key_m]['data'].'"
                            data-pos="'.$key_m.'"
                            data-object-id="'.$row['id'].'"
                            >'. $newdate .' '.$daysdiff.'</a></td>';
                        }else{
                            echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                            href="#" 
                            data-toggle="modal" data-target="#changedate" 
                            class="openformplan" 
                            data-id="'.$row['plan'][$key_m]['id'].'"
                            data-data="'.$row['plan'][$key_m]['data'].'"
                            data-pos="'.$key_m.'"
                            data-object-id="'.$row['id'].'"
                            >'. $newdate .' '.$daysdiff.'</a></td>';
                        }
    
                    }else{
                        //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data']));
                    if($key_m==1 || $key_m==2){
                      echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        class="openformplan" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }elseif($key_m==5 || $key_m==6){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedateR" 
                        class="openformplanR" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }else{
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        class="openformplan" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }
    
                    }
                }else{
                    if($key_m==1 || $key_m==2){
                    echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplan hideFuck" >+
                        </a> </td>';
                    }elseif($key_m==5 || $key_m==6){
                        echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedateR" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplanR hideFuck" >+
                        </a> </td>';
                    }else{
                        echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplan hideFuck" >+
                        </a> </td>';
                    }
                }
            }
            echo '</tr>';
        $pp++;
        }else{}
      }
           echo "</table>";
           echo "</div>";
}else{
    foreach ($list as $key => $row) {
        if($row['arhiv_id']== NULL && $row['wip']== NULL){
            echo '<tr>';
            echo '<td>' . $pp . '</td>';
            // echo '<td><a 
            //     href="/?modal=renameobject&id='.$row['id'].'"
            //     class="openform modal-a" 
            //     >'. $row['name'] .'</a></td>';
            echo '<td><a 
                href="/?modal=testmodal&name='.$row['name'].'&objId='.$row['id'].'"
                class=" modal-a openform tooltip1" title="График проектирования"
                >'. $row['name'] .'</a></td>';
                //проверяем наличие ГИПа в массиве
                if(isset($row['gip'][$keygip]['gipname'])){
                    echo '<td class="gips"><a  id="openformgip"
                href="#" 
                data-toggle="modal" data-target="#changegip" 
                class="openformgip" 
                data-id="'.$row['id'].'"
                data-gip_id="'.$row['gip_id'].'"
                >'. $row['gip'][$keygip]['gipname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformgip"
                    href="#" 
                    data-toggle="modal" data-target="#changegip" 
                    class="openformgip hideFuck" 
                    data-id="'.$row['id'].'"
                    data-gip_id="'.$row['gip_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие ГАПа в массиве
                if(isset($row['gap'][$keygip]['gapname'])){
                    echo '<td class="gaps"><a  id="openformgap"
                href="#" 
                data-toggle="modal" data-target="#changegap" 
                class="openformgap" 
                data-id="'.$row['id'].'"
                data-gap_id="'.$row['gap_id'].'"
                >'. $row['gap'][$keygip]['gapname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformgap"
                    href="#" 
                    data-toggle="modal" data-target="#changegap" 
                    class="openformgap hideFuck" 
                    data-id="'.$row['id'].'"
                    data-gap_id="'.$row['gap_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие ОВ в массиве
                if(isset($row['ov'][$keygip]['ovname'])){
                    echo '<td class="ovs"><a  id="openformov"
                href="#" 
                data-toggle="modal" data-target="#changeov" 
                class="openformov" 
                data-id="'.$row['id'].'"
                data-ov_id="'.$row['ov_id'].'"
                >'. $row['ov'][$keygip]['ovname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformov"
                    href="#" 
                    data-toggle="modal" data-target="#changeov" 
                    class="openformov hideFuck" 
                    data-id="'.$row['id'].'"
                    data-ov_id="'.$row['ov_id'].'"
                    >+</a></td>';
                }
                //проверяем наличие КР в массиве
                if(isset($row['kr'][$keygip]['krname'])){
                    echo '<td class="krs"><a  id="openformkr"
                href="#" 
                data-toggle="modal" data-target="#changekr" 
                class="openformkr" 
                data-id="'.$row['id'].'"
                data-kr_id="'.$row['kr_id'].'"
                >'. $row['kr'][$keygip]['krname'] .'</a></td>';
                }else {
                    echo '<td><a id="openformkr"
                    href="#" 
                    data-toggle="modal" data-target="#changekr" 
                    class="openformkr hideFuck" 
                    data-id="'.$row['id'].'"
                    data-kr_id="'.$row['kr_id'].'"
                    >+</a></td>';
                }
                 //проверяем наличие Куратора в массиве
                if(isset($row['cur'][$keygip]['cur_name'])){
                    echo '<td><a 
                href="#" 
                data-toggle="modal" data-target="#changecur" 
                class="openformcur" 
                data-id="'.$row['id'].'"
                data-cur_id="'.$row['cur_id'].'"
                >'. $row['cur'][$keygip]['cur_name'] .'</a></td>';
                }else {
                    echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changecur" 
                    class="openformcur hideFuck" 
                    data-id="'.$row['id'].'"
                    data-cur_id="'.$row['cur_id'].'"
                    >+</a></td>';
                }
                 //проверяем наличие Эксперта в массиве
                if(isset($row['exp'][$keygip]['exp_name'])){
                    echo '<td><a 
                href="#" 
                data-toggle="modal" data-target="#changeexp" 
                class="openformexp" 
                data-id="'.$row['id'].'"
                data-exp_id="'.$row['exp_id'].'"
                >'. $row['exp'][$keygip]['exp_name'] .'</a></td>';
                }else {
                    echo '<td><a 
                    href="#" 
                    data-toggle="modal" data-target="#changeexp" 
                    class="openformexp hideFuck" 
                    data-id="'.$row['id'].'"
                    data-exp_id="'.$row['exp_id'].'"
                    >+</a></td>';
                }
            foreach ($main_pos as $key_m => $col) {
                if(isset($row['plan'][$key_m])){
                    /*
                    Логика - найти отставание от первой даты заданной по контракту. 
                    Дата в data_2 появляется только если срок ПО контракту был изменен.
                    смотрим есть ли в ячейке data_2 запись и если есть 
                    берем data и data_2 и ищем через функцию разницу в днях.
                    если дата в data_2 больше чем data - окрашиваем строку в красный
                    если дата в data_2 меньше чем data - окрашиваем строку в зеленый.
    
                    */
                    if($row['plan'][$key_m]['data_2']!=NULL){
    
                        $daydiff =  daydiff($row['plan'][$key_m]['data'], $row['plan'][$key_m]['data_2']);
    
                        if($row['plan'][$key_m]['data'] > $row['plan'][$key_m]['data_2']){
                            $daysdiff = '<font color="green"> + '.$daydiff.' дней</font>';
                        }else{ 
                            $daysdiff =  '<font color="red"> + '.$daydiff.' дней</font>';
                        }
                        //полученную дату из массива переворачиваем в удобный вид.
                        $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data_2']));
    
                        if($key_m==1 || $key_m==2){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                          href="#" 
                          data-toggle="modal" data-target="#changedate" 
                          class="openformplan" 
                          data-id="'.$row['plan'][$key_m]['id'].'"
                          data-data="'.$row['plan'][$key_m]['data'].'"
                          data-pos="'.$key_m.'"
                          data-object-id="'.$row['id'].'"
                          >'. $newdate .' '.$daysdiff.'</a></td>';
                        }elseif($key_m==5 || $key_m==6){
                            echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                            href="#" 
                            data-toggle="modal" data-target="#changedateR" 
                            class="openformplanR" 
                            data-id="'.$row['plan'][$key_m]['id'].'"
                            data-data="'.$row['plan'][$key_m]['data'].'"
                            data-pos="'.$key_m.'"
                            data-object-id="'.$row['id'].'"
                            >'. $newdate .' '.$daysdiff.'</a></td>';
                        }else{
                            echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                            href="#" 
                            data-toggle="modal" data-target="#changedate" 
                            class="openformplan" 
                            data-id="'.$row['plan'][$key_m]['id'].'"
                            data-data="'.$row['plan'][$key_m]['data'].'"
                            data-pos="'.$key_m.'"
                            data-object-id="'.$row['id'].'"
                            >'. $newdate .' '.$daysdiff.'</a></td>';
                        }
    
                    }else{
                        //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data']));
                    if($key_m==1 || $key_m==2){
                      echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        class="openformplan" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }elseif($key_m==5 || $key_m==6){
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedateR" 
                        class="openformplanR" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }else{
                        echo '<td alt="' . $row['plan'][$key_m]['id'] . '"><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        class="openformplan" 
                        data-id="'.$row['plan'][$key_m]['id'].'"
                        data-data="'.$row['plan'][$key_m]['data'].'"
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        >'. $newdate .'</a></td>';
                    }
    
                    }
                }else{
                    if($key_m==1 || $key_m==2){
                    echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplan hideFuck" >+
                        </a> </td>';
                    }elseif($key_m==5 || $key_m==6){
                        echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedateR" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplanR hideFuck" >+
                        </a> </td>';
                    }else{
                        echo '<td><a 
                        href="#" 
                        data-toggle="modal" data-target="#changedate" 
                        data-pos="'.$key_m.'"
                        data-object-id="'.$row['id'].'"
                        class="openformplan hideFuck" >+
                        </a> </td>';
                    }
                }
            }
            echo '</tr>';
        $pp++;
        }else{}
      }
           echo "</table>";
           echo "</div>";
}

}else{
    if(isset($_POST['btnWip'])){
        foreach ($list as $key => $row) {
            if($row['arhiv_id']== NULL && $row['wip']== NULL){
            echo '<tr>';
            echo '<td>' . $pp . '</td>';
            echo '<td><a 
            href="/?modal=testmodal&name='.$row['name'].'&objId='.$row['id'].'"
            class=" modal-a openform tooltip1" title="График проектирования"
            >'. $row['name'] .'</a></td>';
                //проверяем наличие ГИПа в массиве
                if(isset($row['gip'][$keygip]['gipname'])){
                    echo '<td>'. $row['gip'][$keygip]['gipname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие ГАПа в массиве
                if(isset($row['gap'][$keygip]['gapname'])){
                    echo '<td>'. $row['gap'][$keygip]['gapname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие ОВ в массиве
                if(isset($row['ov'][$keygip]['ovname'])){
                    echo '<td>'. $row['ov'][$keygip]['ovname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие КР в массиве
                if(isset($row['kr'][$keygip]['krname'])){
                    echo '<td>'. $row['kr'][$keygip]['krname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие Куратора в массиве
                if(isset($row['cur'][$keygip]['cur_name'])){
                    echo '<td>'. $row['cur'][$keygip]['cur_name'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие Эксперта в массиве
                if(isset($row['exp'][$keygip]['exp_name'])){
                    echo '<td>'. $row['exp'][$keygip]['exp_name'] .'</td>';
                }else {
                    echo '<td></td>';
                }
            foreach ($main_pos as $key_m => $col) {
                if(isset($row['plan'][$key_m])){
        
                    if($row['plan'][$key_m]['data_2']!=NULL){
        
                        $daydiff =  daydiff($row['plan'][$key_m]['data'], $row['plan'][$key_m]['data_2']);
        
                        if($row['plan'][$key_m]['data'] > $row['plan'][$key_m]['data_2']){
                            $daysdiff = '<font color="green"> + '.$daydiff.' дней</font>';
                        }else{ 
                            $daysdiff =  '<font color="red"> + '.$daydiff.' дней</font>';
                        }
                    //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data_2']));
                      echo '<td alt="' . $row['plan'][$key_m]['id'] . '">'. $newdate .' '.$daysdiff.'</td>';
                   
                    }else{
        
                    //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data']));
                    echo '<td alt="' . $row['plan'][$key_m]['id'] . '">'. $newdate .'</td>';
                    }
        
                }else{
                    echo '<td></td>';
                }
            }
            echo '</tr>';
        $pp++;
            }else{}
        }
           echo "</table>";
    }elseif(isset($_POST['btnNoWip'])){
        foreach ($list as $key => $row) {
            if($row['arhiv_id']== NULL && $row['wip']== 1){
            echo '<tr>';
            echo '<td>' . $pp . '</td>';
            echo '<td><a 
            href="/?modal=testmodal&name='.$row['name'].'&objId='.$row['id'].'"
            class=" modal-a openform tooltip1" title="График проектирования"
            >'. $row['name'] .'</a></td>';
                //проверяем наличие ГИПа в массиве
                if(isset($row['gip'][$keygip]['gipname'])){
                    echo '<td>'. $row['gip'][$keygip]['gipname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие ГАПа в массиве
                if(isset($row['gap'][$keygip]['gapname'])){
                    echo '<td>'. $row['gap'][$keygip]['gapname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие ОВ в массиве
                if(isset($row['ov'][$keygip]['ovname'])){
                    echo '<td>'. $row['ov'][$keygip]['ovname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие КР в массиве
                if(isset($row['kr'][$keygip]['krname'])){
                    echo '<td>'. $row['kr'][$keygip]['krname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие Куратора в массиве
                if(isset($row['cur'][$keygip]['cur_name'])){
                    echo '<td>'. $row['cur'][$keygip]['cur_name'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие Эксперта в массиве
                if(isset($row['exp'][$keygip]['exp_name'])){
                    echo '<td>'. $row['exp'][$keygip]['exp_name'] .'</td>';
                }else {
                    echo '<td></td>';
                }
            foreach ($main_pos as $key_m => $col) {
                if(isset($row['plan'][$key_m])){
        
                    if($row['plan'][$key_m]['data_2']!=NULL){
        
                        $daydiff =  daydiff($row['plan'][$key_m]['data'], $row['plan'][$key_m]['data_2']);
        
                        if($row['plan'][$key_m]['data'] > $row['plan'][$key_m]['data_2']){
                            $daysdiff = '<font color="green"> + '.$daydiff.' дней</font>';
                        }else{ 
                            $daysdiff =  '<font color="red"> + '.$daydiff.' дней</font>';
                        }
                    //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data_2']));
                      echo '<td alt="' . $row['plan'][$key_m]['id'] . '">'. $newdate .' '.$daysdiff.'</td>';
                   
                    }else{
        
                    //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data']));
                    echo '<td alt="' . $row['plan'][$key_m]['id'] . '">'. $newdate .'</td>';
                    }
        
                }else{
                    echo '<td></td>';
                }
            }
            echo '</tr>';
        $pp++;
            }else{}
        }
           echo "</table>";
    }else{

        foreach ($list as $key => $row) {
            if($row['arhiv_id']== NULL && $row['wip']== NULL){
            echo '<tr>';
            echo '<td>' . $pp . '</td>';
            echo '<td><a 
            href="/?modal=testmodal&name='.$row['name'].'&objId='.$row['id'].'"
            class=" modal-a openform tooltip1" title="График проектирования"
            >'. $row['name'] .'</a></td>';
                //проверяем наличие ГИПа в массиве
                if(isset($row['gip'][$keygip]['gipname'])){
                    echo '<td>'. $row['gip'][$keygip]['gipname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие ГАПа в массиве
                if(isset($row['gap'][$keygip]['gapname'])){
                    echo '<td>'. $row['gap'][$keygip]['gapname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие ОВ в массиве
                if(isset($row['ov'][$keygip]['ovname'])){
                    echo '<td>'. $row['ov'][$keygip]['ovname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие КР в массиве
                if(isset($row['kr'][$keygip]['krname'])){
                    echo '<td>'. $row['kr'][$keygip]['krname'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие Куратора в массиве
                if(isset($row['cur'][$keygip]['cur_name'])){
                    echo '<td>'. $row['cur'][$keygip]['cur_name'] .'</td>';
                }else {
                    echo '<td></td>';
                }
                 //проверяем наличие Эксперта в массиве
                if(isset($row['exp'][$keygip]['exp_name'])){
                    echo '<td>'. $row['exp'][$keygip]['exp_name'] .'</td>';
                }else {
                    echo '<td></td>';
                }
            foreach ($main_pos as $key_m => $col) {
                if(isset($row['plan'][$key_m])){
        
                    if($row['plan'][$key_m]['data_2']!=NULL){
        
                        $daydiff =  daydiff($row['plan'][$key_m]['data'], $row['plan'][$key_m]['data_2']);
        
                        if($row['plan'][$key_m]['data'] > $row['plan'][$key_m]['data_2']){
                            $daysdiff = '<font color="green"> + '.$daydiff.' дней</font>';
                        }else{ 
                            $daysdiff =  '<font color="red"> + '.$daydiff.' дней</font>';
                        }
                    //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data_2']));
                      echo '<td alt="' . $row['plan'][$key_m]['id'] . '">'. $newdate .' '.$daysdiff.'</td>';
                   
                    }else{
        
                    //полученную дату из массива переворачиваем в удобный вид.
                    $newdate=date('d-m-Y', strtotime($row['plan'][$key_m]['data']));
                    echo '<td alt="' . $row['plan'][$key_m]['id'] . '">'. $newdate .'</td>';
                    }
        
                }else{
                    echo '<td></td>';
                }
            }
            echo '</tr>';
        $pp++;
            }else{}
        }
           echo "</table>";
    }
}
?>
<!-- close showon div -->
</div>
<!-- Модальное окно создания объекта -->
<div id="write" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Объекты</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=write" id="createobj">
                 <div class="form-group">
                    <label for="compsel">Создать Новый Объект</label>
                    <input name='name' type='text' value="" placeholder="Название" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить объект в базе</label>
                    <?=$selectob;?>
                    </div>
                    <div class="form-group">
                    <input type="checkbox"  name="deleteob" id="obdelete" class="obdelet" value=1>
                    <label for="obdelete">Удалить </label>
                    <input type="checkbox"  name="renameob" id="obrename" class="obrenam" value=1>
                    <label for="obrename">Переименовать </label>
                    <input type="checkbox"  name="toArhiv" id="obtoarh" class="obarhiv" value=1>
                    <label for="obtoarh">В Архив </label>
                    <input type="checkbox"  name="wip" id="obwip" class="obwipp" value=1>
                    <label for="obwip">W I P</label>
                    <input type="checkbox"  name="wipoff" id="obwipoff" class="obwippoff" value=1>
                    <label for="obwipoff">Из W I P</label>
                    <input name='rename' type='text' value="" placeholder="Новое название" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно ГИПа -->
<div id="newgip" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">ГИПы</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=newgip" id="creategip">
                 <div class="form-group">
                    <label for="compsel">Добавить нового ГИПа в базу</label>
                    <input name='name' type='text' value="" placeholder="Фамилия ГИПа" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить ГИПа в базе</label>
                    <?=$select;?>
                    </div>
                    <div class="form-group">
                    <label for="obdelete">Удалить</label>
                    <input type="checkbox"  name="deletegip" id="gipdelete" class="gipdelet" value=1>
                    <label for="obrename">Переименовать</label>
                    <input type="checkbox"  name="renamegip" id="giprename" class="giprenam" value=1>
                    <input name='rename' type='text' value="" placeholder="Фамилия ГИПа" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно ГАПа -->
<div id="newgap" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">ГАПы</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=newgap" id="creategap">
                 <div class="form-group">
                    <label for="compsel">Добавить нового ГАПа в базу</label>
                    <input name='name' type='text' value="" placeholder="Фамилия ГАПа" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить ГАПа в базе</label>
                    <?=$selectgap;?>
                    </div>
                    <div class="form-group">
                    <label for="obdelete">Удалить</label>
                    <input type="checkbox"  name="deletegap" id="gapdelete" class="gapdelet" value=1>
                    <label for="obrename">Переименовать</label>
                    <input type="checkbox"  name="renamegap" id="gaprename" class="gaprenam" value=1>
                    <input name='rename' type='text' value="" placeholder="Фамилия ГАПа" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно ОВ -->
<div id="newov" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">ОВ</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=newov" id="createov">
                 <div class="form-group">
                    <label for="compsel">Добавить нового ОВ в базу</label>
                    <input name='name' type='text' value="" placeholder="Фамилия ОВ" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить ОВ в базе</label>
                    <?=$selectov;?>
                    </div>
                    <div class="form-group">
                    <label for="obdelete">Удалить</label>
                    <input type="checkbox"  name="deleteov" id="ovdelete" class="ovdelet" value=1>
                    <label for="obrename">Переименовать</label>
                    <input type="checkbox"  name="renameov" id="ovrename" class="ovrenam" value=1>
                    <input name='rename' type='text' value="" placeholder="Фамилия ОВ" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно КР -->
<div id="newkr" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">КР</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=newkr" id="createkr">
                 <div class="form-group">
                    <label for="compsel">Добавить нового КР в базу</label>
                    <input name='name' type='text' value="" placeholder="Фамилия КР" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить КР в базе</label>
                    <?=$selectkr;?>
                    </div>
                    <div class="form-group">
                    <label for="obdelete">Удалить</label>
                    <input type="checkbox"  name="deletekr" id="krdelete" class="krdelet" value=1>
                    <label for="obrename">Переименовать</label>
                    <input type="checkbox"  name="renamekr" id="krrename" class="krrenam" value=1>
                    <input name='rename' type='text' value="" placeholder="Фамилия КР" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно Куратора -->
<div id="newcur" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Кураторы</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=newcur" id="createcur">
                 <div class="form-group">
                    <label for="compsel">Добавить нового Куратора в базу</label>
                    <input name='name' type='text' value="" placeholder="Фамилия Куратора" id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить Куратора в базе</label>
                    <?=$selectcur;?>
                    </div>
                    <div class="form-group">
                    <label for="obdelete">Удалить</label>
                    <input type="checkbox"  name="deletecur" id="curdelete" class="curdelet" value=1>
                    <label for="obrename">Переименовать</label>
                    <input type="checkbox"  name="renamecur" id="currename" class="currenam" value=1>
                    <input name='rename' type='text' value="" placeholder="Фамилия Куратора" id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно Отв.Эксп. -->
<div id="newexp" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Ответственный по экспертизе</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=newexp" id="createexp">
                 <div class="form-group">
                    <label for="compsel">Добавить нового Ответственного в базу</label>
                    <input name='name' type='text' value="" placeholder="Фамилия Ответств." id="" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="compsel">Изменить Ответственного в базе</label>
                    <?=$selectexp;?>
                    </div>
                    <div class="form-group">
                    <label for="obdelete">Удалить</label>
                    <input type="checkbox"  name="deleteexp" id="expdelete" class="expdelet" value=1>
                    <label for="obrename">Переименовать</label>
                    <input type="checkbox"  name="renameexp" id="exprename" class="exprenam" value=1>
                    <input name='rename' type='text' value="" placeholder="Фамилия Ответств." id="" class="form-control">
                </div>
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно смены гипа -->
<div id="changegip" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить ГИПа</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=changegip" id="changegipid">
                    <div class="form-group">
                    <?=$select;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                     <label for="obdelete">Снять ГИПа</label>
                </div>
                     <input name='id' type='hidden' value="" id="gipobid">
            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно смены гапа -->
<div id="changegap" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить ГАПа</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=changegap" id="changegapid">
                    <div class="form-group">
                    <?=$selectgap;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                     <label for="obdelete">Снять ГАПа</label>
                </div>
                     <input name='id' type='hidden' value="" id="gapobid">
            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно смены ОВ -->
<div id="changeov" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить ОВ</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=changeov" id="changeovid">
                    <div class="form-group">
                    <?=$selectov;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                     <label for="obdelete">Снять ГИПа</label>
                </div>
                     <input name='id' type='hidden' value="" id="ovobid">
            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно смены КР -->
<div id="changekr" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить КР</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=changekr" id="changekrid">
                    <div class="form-group">
                    <?=$selectkr;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                     <label for="obdelete">Снять КР</label>
                </div>
                     <input name='id' type='hidden' value="" id="krobid">
            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Модальное окно смены Куратора -->
<div id="changecur" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить Куратора</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=changecur" id="changecurid">
                    <div class="form-group">
                    <?=$selectcur;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                     <label for="obdelete">Снять Куратора</label>
                </div>
                     <input name='id' type='hidden' value="" id="curobid">
            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>

<!-- Модальное окно смены Отв.Эксп -->
<div id="changeexp" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить Отв.Экпс.</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=changeexp" id="changeexpid">
                    <div class="form-group">
                    <?=$selectexp;?>
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deleteobject" id="obdelete" class="objectdelete" value=1>
                     <label for="obdelete">Снять Отв.Эксп.</label>
                </div>
                     <input name='id' type='hidden' value="" id="expobid">
            
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно смены даты стадии П-->
<div id="changedate" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить дату</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=changedate" id="changedateform">
                    <div class="form-group">
                    <input type="date" name="calendar">
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deletedate" id="pldelete" class="plandelete" value=1>
                     <label for="pldelete">Убрать дату</label>
                </div>
                     <input name='id' type='hidden' value="" id="chngid">
                     <input name='object-id' type='hidden' value="" id="chngobjectid">
                     <input name='date' type='hidden' value="" id="chngdate"> 
                     <input name='pos_num' type='hidden' value="" id="chngpos">               
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- Модальное окно смены даты стадии Р-->
<div id="changedateR" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button class="close" data-dismiss="modal">x</button>
            <h4 class="modal-title">Сменить дату</h4>
            </div>
            <div class="modal-body">
                 <form method="POST" action="/?save=changedateR" id="changedateformR">
                    <div class="form-group">
                    <input type="date" name="calendar">
                </div>
                <div class="form-group">
                     <input type="checkbox"  name="deletedate" id="pldelete" class="plandelete" value=1>
                     <label for="pldelete">Убрать дату</label>
                </div>
                     <input name='id' type='hidden' value="" id="chngidR">
                     <input name='object-id' type='hidden' value="" id="chngobjectidR">
                     <input name='date' type='hidden' value="" id="chngdateR"> 
                     <input name='pos_num' type='hidden' value="" id="chngposR">               
                 <div class="form-group text-right">
                     <input type="submit" class="btn btn-success" value="Сохранить"/>
                   </div>
            </form>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$( document ).ready(function() {

    // скрипт для модального окна переименования объекта
    $('.openform').click(function(){
        $('#obname').val( $(this).attr('data-name'));
        $('#obid').val( $(this).attr('data-id') );
        
    });

    $('#renameobj').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#renameobj').html( data );
            });
        return false;
    });

        // скрипт для модального окна смены гипа
        $('.openformgip').click(function(){
        $('#gipobid').val( $(this).attr('data-id') );
        
    });

    $('#changegipid').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changegipid').html( data );
            });
        return false;
    });


        // скрипт для модального окна смены гапа
        $('.openformgap').click(function(){
        $('#gapobid').val( $(this).attr('data-id') );
        
    });

        $('#changegapid').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changegapid').html( data );
            });
        return false;
    });

        // скрипт для модального окна смены ов
        $('.openformov').click(function(){
        $('#ovobid').val( $(this).attr('data-id') );
        
    });

    $('#changeovid').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changeovid').html( data );
            });
        return false;
    });

        // скрипт для модального окна смены кр
        $('.openformkr').click(function(){
        $('#krobid').val( $(this).attr('data-id') );
        
    });

    $('#changekrid').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changekrid').html( data );
            });
        return false;
    });


        // скрипт для модального окна смены Куратора
        $('.openformcur').click(function(){
        $('#curobid').val( $(this).attr('data-id') );
        
    });

    $('#changecurid').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changecurid').html( data );
            });
        return false;
    });

        // скрипт для модального окна смены Отв.Эксп
        $('.openformexp').click(function(){
        $('#expobid').val( $(this).attr('data-id') );
        
    });

    $('#changeexpid').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changeexpid').html( data );
            });
        return false;
    });

       // скрипт для модального окна смены даты P
    $('.openformplan').click(function(){
        $('#chngid').val( $(this).attr('data-id'));
        $('#chngdate').val( $(this).attr('data-data') );
        $('#chngpos').val( $(this).attr('data-pos') );
        $('#chngobjectid').val( $(this).attr('data-object-id') );
    });

        $('#changedateform').submit(function(){
                $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changedateform').html( data );
            });
        return false;
    });
       // скрипт для модального окна смены даты R
    $('.openformplanR').click(function(){
        $('#chngidR').val( $(this).attr('data-id'));
        $('#chngdateR').val( $(this).attr('data-data') );
        $('#chngposR').val( $(this).attr('data-pos') );
        $('#chngobjectidR').val( $(this).attr('data-object-id') );
    });

        $('#changedateformR').submit(function(){
                $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#changedateformR').html( data );
            });
        return false;
    });
     // скрипт для модального окна создания объекта
        $('.openformcreate').click(function(){
    });
    
    $('#createobj').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#createobj').html( data );
            });
        return false;
    });
     // скрипт для модального окна кнопки ГИПов
        $('#creategip').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#creategip').html( data );
            });
        return false;
    });
     // скрипт для модального окна кнопки ГАПов
        $('#creategap').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#creategap').html( data );
            });
        return false;
    });
     // скрипт для модального окна кнопки ОВ
        $('#createov').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#createov').html( data );
            });
        return false;
    });
     // скрипт для модального окна кнопки КР
        $('#createkr').submit(function(){
            $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
              $('#createkr').html( data );
            });
        return false;
    });
    // скрипт для модального окна кнопки Кураторов
    $('#createcur').submit(function(){
        $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
            $('#createcur').html( data );
        });
    return false;
    });
    // скрипт для модального окна кнопки Ответственных
    $('#createexp').submit(function(){
        $.post( $(this).attr('action'), $(this).serialize(), function( data ) {
            $('#createexp').html( data );
        });
    return false;
    });    
});
</script>