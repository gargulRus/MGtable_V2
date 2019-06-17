<?php


 $pp =1;
 $pos_num =array(
    1=>'1', //ГИП
    '2', //Генплан
    '3', //АР
    '4', //КР
    '5', //ЭОМ
    '6', //НЭС
    '7', //ВК
    '8', //НВК
    '9', //АПТ
    '10', //ОВ
    '11', //ОТ
    '12', //ХС
    '13', //ТС
    '14', //ИТП
    '15', //СС
    '16', //НСС
    '17', //МГ
    '18', //КГС
    '19', //ТХ
    '20', //Рад.Без.
    '21', //Автом
    '22', //ПОС-ПОД
    '23', //АТЗ
    '24', //ООС
    '25', //ППМ
    '26', //ГОЧС
    '27', //ОДИ
    '28', //ЭЭ
    '29', //Сметы
    '30', //БЭО
    '31', //ОЗДС
    );


$list = array();

$toPeriodP = query("SELECT id, object_id, datastart, data_p1, data_p2, data_p3 FROM periodP WHERE object_id=".$object_id);

while($data = mysqli_fetch_assoc($toPeriodP)){ 
    $list[]=array(
        'id'=>$data['id'],
        'object_id'=>$data['object_id'],
        'datastart'=>$data['datastart'],
        'data_p1'=>$data['data_p1'],
        'data_p2'=>$data['data_p2'],
        'data_p3'=>$data['data_p3']
    );

}

$objectarr = array();

$toRazdelP = query("SELECT id, title, stage, pos_num FROM razdelP ORDER BY pos_num ASC");

while($objdata = mysqli_fetch_assoc($toRazdelP)){ 

   $toPcontrol = query("SELECT id, pos_num, notuse FROM plancontrol WHERE object_id=".$object_id." AND pos_num=".$objdata['pos_num']." ORDER BY pos_num ASC");

    $Parr=array();
    while($razdelP = mysqli_fetch_assoc($toPcontrol)){ 
        $Parr[]=array(
              'id'=>$razdelP['id'],
              'pos_num'=>$razdelP['pos_num'],
              'notuse'=>$razdelP['notuse']
          );
    }

    $objectarr[]=array(        
    'id'=>$objdata['id'],
    'title'=>$objdata['title'],
    'pos_num'=>$objdata['pos_num'],
    'stage'=>$objdata['stage'],
    'pStage'=>$Parr
);
}

// var_export($list);
// var_export($objectarr);

$datastar="";
$makedate1="";
$makedate2="";
$makedate3="";

if(empty($list)){
    $datastart="Даты не определены";
    $makedate1="Даты не определены";
    $makedate2="Даты не определены";
    $makedate3="Даты не определены";
}else{
    foreach ($list as $key => $value) {
        $datastart=$value['datastart'];
        $makedate1=$value['data_p1'];
        $makedate2=$value['data_p2'];
        $makedate3=$value['data_p3'];
        $datastart= date('d-m-Y', strtotime($datastart));
        $makedate1= date('d-m-Y', strtotime($makedate1));
        $makedate2= date('d-m-Y', strtotime($makedate2));
        $makedate3= date('d-m-Y', strtotime($makedate3));
    }
}

echo "   <div class='div-table-period'>";
   echo "
   <table class='table table-bordered table-hover table-condensed list-object'>
   
        <tr>
            <th class='pp text-center' id='thid' rowspan='2'>П.П.</th>
            <th class='obname text-center' id='thida' rowspan='2'>Раздел</th>
            <th class='pro text-center' id='thidh' colspan='2'> I Этап </th>
            <th class='exp text-center' id='thidi' colspan='2'> II Этап </th>
            <th class='rab text-center' id='thidj' colspan='2'> III Этап </th>
            </tr>
        ";
        echo "  <tr>
        <th class='paintrows pstart text-center'>Начало</th>
        <th class='paintrows pend text-center'>Конец</th>
        <th class='paintrows expstart text-center'>Начало</th>
        <th class='paintrows expend text-center'>Конец</th>
        <th class='paintrows rstart text-center'>Начало</th>
        <th class='paintrows rend text-center'>Конец</th>
       </tr>
    ";

    foreach ($objectarr as $key => $row) {
        $stage[$key]  = $row['stage'];
    }

    array_multisort($stage, SORT_ASC, $objectarr);

foreach ($objectarr as $key1 => $row1) {
        // $keyN = $key1-1;
        echo '<tr>';
        if ($row1['pStage'][0]['notuse'] == 1) {
            # Ничего не делаем
        } else {
            if ($row1['stage']==1) {
                echo '<td>' . $pp . '</td>';
            echo '<td>'. $row1['title'] .'</td>';
            echo '<td>'.$datastart.'</td>';
            echo '<td>'.$makedate1.'</td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
            $pp =$pp +1;
            } else {
                # Ничего не делаем
            }

            if ($row1['stage']==2) {
                echo '<td>' . $pp . '</td>';
            echo '<td>'. $row1['title'] .'</td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td>'.$makedate1.'</td>';
            echo '<td>'.$makedate2.'</td>';
            echo '<td></td>';
            echo '<td></td>';

            $pp =$pp +1;
            } else {
                # Ничего не делаем
            }

            if ($row1['stage']==3) {
                echo '<td>' . $pp . '</td>';
            echo '<td>'. $row1['title'] .'</td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td>'.$makedate2.'</td>';
            echo '<td>'.$makedate3.'</td>';
            $pp =$pp +1;
            } else {
                # Ничего не делаем
            }
    
        }
        echo '</tr>'; 
}

echo "</table>";
echo "</div>";

?>