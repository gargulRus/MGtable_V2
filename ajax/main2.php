<div class="showon">
    <?php 
    require_once('../core/functions.php');
    require_once('../core/connect.php');
    require_once('../core/connectstyles.php');
    sleep(1);

    //Запрос в базу. Формируем массив для обработки
    $list = array();
    $result = query("SELECT * FROM years");
    /*Тут после первого запроса, перебираем полученный массив с
    объектами, и на кажду итерацию цикла делаем еще один запрос в таблицу с задачами,
    где по id объекта ищем задачи относящиеся к данному объекту.
    */
    while($data = mysqli_fetch_assoc($result)){ 
                $list[]=array(
                    'id'=>$data['id'],
                    'year'=>$data['year']
                );
    }
    
    $objects = array();
    $result2 = query("SELECT * FROM object WHERE arhiv IS NULL");

    while($data = mysqli_fetch_assoc($result2)){ 

        $result3 = query("SELECT * FROM project WHERE objects_id=".$data['id']);
        $dateProject=array();
        if($data['id']!=NULL){
        while($dataP = mysqli_fetch_assoc($result3)){ 
                //тут какая-то магия
            $dateProject[]=array(
                  'id'=>$dataP['id'],
                  'objects_id'=>$dataP['objects_id'],
                  'mg_date'=>$dataP['mg_date'],
                  'kgs_date'=>$dataP['kgs_date'],
              );
        }
       }
        $result4 = query("SELECT * FROM work WHERE objects_id=".$data['id']);
        $dateWork=array();
        if($data['id']!=NULL){
        while($dataR = mysqli_fetch_assoc($result4)){ 
                //тут какая-то магия
            $dateWork[]=array(
                  'id'=>$dataR['id'],
                  'objects_id'=>$dataR['objects_id'],
                  'mg_date'=>$dataR['mg_date'],
                  'kgs_date'=>$dataR['kgs_date'],
              );
        }
       }

        $result5 = query("SELECT * FROM com WHERE id=".$data['com_id']);
        $comArr=array();
        if($data['com_id']!=NULL){
        while($dataCom = mysqli_fetch_assoc($result5)){ 
                //тут какая-то магия
            $comArr[]=array(
                  'id'=>$dataCom['id'],
                  'com_name'=>$dataCom['com_name']
              );
        }
       }
        $result6 = query("SELECT * FROM vak WHERE id=".$data['vak_id']);
        $vakArr=array();
        if($data['vak_id']!=NULL){
        while($dataVak = mysqli_fetch_assoc($result6)){ 
                //тут какая-то магия
            $vakArr[]=array(
                  'id'=>$dataVak['id'],
                  'vak_name'=>$dataVak['vak_name']
              );
        }
       }
        $result7 = query("SELECT * FROM kgs WHERE id=".$data['kgs_id']);
        $kgsArr=array();
        if($data['kgs_id']!=NULL){
        while($dataKgs = mysqli_fetch_assoc($result7)){ 
                //тут какая-то магия
            $kgsArr[]=array(
                  'id'=>$dataKgs['id'],
                  'kgs_name'=>$dataKgs['kgs_name']
              );
        }
       }


            $objects[]=array(
                'id'=>$data['id'],
                'object_name'=>$data['object_name'],
                'year_id'=>$data['year_id'],
                'kgs_id'=>$data['kgs_id'],
                'vak_id'=>$data['vak_id'],
                'com_id'=>$data['com_id'],
                'dataP'=>$dateProject,
                'dataR'=>$dateWork,
                'com'=>$comArr,
                'vak'=>$vakArr,
                'kgs'=>$kgsArr,
                );
    }
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Сводная таблица Объектов</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <ul class="nav nav-tabs">
            <?php
                foreach ($list as $key => $row)
                {
                    echo '<li><a data-toggle="tab" href="#'.$row['year'].'">'.$row['year'].'</a></li>';
                }
            ?> 
        </ul>
        <div class="tab-content">
            <?php
                foreach ($list as $key => $row)
                {
                    echo '
                    <div id="'.$row['year'].'" class="tab-pane fade">
                        <div class="col-lg-12 padding0">
                            <div id="objecthere">
                                <br>
                                <div class="div-table">
                                    <table class="table centeredtab table-bordered table-hover table-condensed">
                                            <tr>
                                                <th rowspan="2">П.П.</th>
                                                <th rowspan="2">Объект</th>
                                                <th colspan="2">Стадия П</th>
                                                <th colspan="2">Стадия Р</th>
                                                <th rowspan="2">Компрессорные</th>
                                                <th rowspan="2">Вакуум</th>
                                                <th rowspan="2">КГС</th>
                                            </tr>
                                            <tr>
                                            <th class="paintrows">МГ</th>
                                            <th class="paintrows">КГС</th>
                                            <th class="paintrows">МГ</th>
                                            <th class="paintrows">КГС</th>
                                        </tr>';
                                        $pp=1;
                                        foreach($objects as $key2 => $col)
                                        {
                                         
                                            if($row['id']==$col['year_id'])
                                            {   
                                           
                                        
                                                // $date1=$col['dataP'][0]['mg_date']; 
                                                if(strlen($col['dataP'][0]['mg_date'])>1){
                                                    $date1= date('d.m.Y', strtotime($col['dataP'][0]['mg_date'])); 
                                                }else{ $date1=NULL;}
                                                if(strlen($col['dataP'][0]['kgs_date'])>1){
                                                    $date2= date('d.m.Y', strtotime($col['dataP'][0]['kgs_date'])); 
                                                }else{ $date2=NULL;}
                                                if(strlen($col['dataR'][0]['mg_date'])>1){
                                                    $date3= date('d.m.Y', strtotime($col['dataR'][0]['mg_date'])); 
                                                }else{ $date3=NULL;}
                                                if(strlen($col['dataR'][0]['kgs_date'])>1){
                                                    $date4= date('d.m.Y', strtotime($col['dataR'][0]['kgs_date'])); 
                                                }else{ $date4=NULL;}
                                         
                                                // $date1= date('d-m-Y', strtotime($col['dataP'][0]['mg_date'])); 
                                                // $date2=$col['dataP'][0]['kgs_date']; 
                                                // $date3=$col['dataR'][0]['mg_date']; 
                                                // $date4=$col['dataR'][0]['kgs_date']; 
                                                echo '
                                                <tr>
                                                <td>'.$pp.'</td>
                                                <td>'.$col['object_name'].'</td>
                                                <td>'.$date1.'</td>
                                                <td>'.$date2.'</td>
                                                <td>'.$date3.'</td>
                                                <td>'.$date4.'</td>
                                                <td>'.$col['com'][0]['com_name'].'</td>
                                                <td>'.$col['vak'][0]['vak_name'].'</td>
                                                <td>'.$col['kgs'][0]['kgs_name'].'</td>
                                            </tr>  
                                                ';
                                                $pp=$pp+1;
                                               
                                                $date2=NULL;
                                                $date3=NULL;
                                                $date4=NULL;
                                            }
                                        }    
                                    echo'
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            ?> 
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.row -->
</div>
<!--div showon end -->