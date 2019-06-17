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
        <h1 class="page-header">Работа с объектами
        <span type="submit" title="Корзина Объектов" id="trashButton" class="btn trash-pos"><i class="fa fa-trash fa-fw trash-size"></i></span>
        </h1>
     
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
                    <div class="col-lg-8">
                        <div id="objecthere'.$row['year'].'">
                            <p> Выберите объект</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i> Список объектов
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="list-group">';
                                foreach($objects as $key2 => $col)
                                {
                                 
                                    if($row['id']==$col['year_id'])
                                    {
                                        echo '<a href="#" id="object'.$col['id'].'" class="list-group-item">
                                        <i class="fa fa-folder fa-fw"></i> '.$col['object_name'].'
                                    </a>';
                                    }

                                }
                                        echo '
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-default btn-block">Показать все</a>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                ';
            }
        ?> 
    </div>
    <!-- /.tab-content -->
</div>
<!-- /.row -->


<script>
<?php
foreach ($list as $key => $row)
{
    foreach($objects as $key2 => $col)
    {
    
        if($row['id']==$col['year_id'])
        {
            echo '
            function funcBeforeObject'.$row['year'].' () {
                $("#objecthere'.$row['year'].'").text ("Ожидаю данные...");
            }

            function funcSuccessObject'.$row['year'].' (data) {
                $("#objecthere'.$row['year'].'").html(data);
            }
            ';
        }
    }
}
?>
$(document).ready(function(){
    <?php
    foreach ($list as $key => $row)
    {
        foreach($objects as $key2 => $col)
        {
        
            if($row['id']==$col['year_id'])
            {
                echo '
                $("#object'.$col['id'].'").bind("click", function(){ 
                    var id = "'.$col['id'].'";
                    var name = "'.$col['object_name'].'";
                    var year = "'.$row['year'].'";
                    $.ajax ({
                        type:"POST",
                        url: "ajax/projectP/object.php",
                        data: {"name":name,
                            "id":id,
                            "year":year
                              },
                        dataType: "html",
                        beforeSend: funcBeforeObject'.$row['year'].',
                        success: funcSuccessObject'.$row['year'].'
                    });
                });
                    ';
            }

        }
    }
    ?>
    //Кнопка для корзины
    $("#trashButton").bind("click", function(){ 
                $.ajax ({
                    url: "ajax/objectedit/trash.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
});
</script>
