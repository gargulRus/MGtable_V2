<?php 
require_once('../core/functions.php');
require_once('../core/connect.php');
require_once('../core/connectstyles.php');

$obj1 ='\
 <div class="showon">\
    <h1>Объект 1</h1>\
    <p>Объект находится в Экспертизе\
    <br>\
    C <b>14.12.18<b> ПО <b>11.01.19<b></p>\
    <br>\
    <p>Количество замечаний: 10</p>\
    <div class="form-group">\
    <label for="name" class="col-sm-2 control-label">Файл с замечаниями</label>\
        <div class="col-sm-8">\
            <span><img class="pdficon" src="../image/pdf.png"></span>\
            <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
        </div>\
    </div>\
    <br>\
</div>\
    ';
$obj2 ='\
 <div class="showon">\
    <h1>Объект 2</h1>\
    <p>Объект находится в Экспертизе\
    <br>\
    C <b>16.01.19<b> ПО <b>13.02.19<b></p>\
    <br>\
    <p>Замечаний нет</p>\
    <br>\
</div>\
    ';

$obj3 ='\
 <div class="showon">\
    <h1>Объект 3</h1>\
    <p>Объект находится в Экспертизе\
    <br>\
    C <b>14.02.18<b> ПО <b>12.04.19<b></p>\
    <br>\
    <p>Количество замечаний: 25</p>\
    <div class="form-group">\
    <label for="name" class="col-sm-2 control-label">Файл с замечаниями</label>\
        <div class="col-sm-8">\
            <span><img class="pdficon" src="../image/pdf.png"></span>\
            <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
        </div>\
    </div>\
    <br>\
</div>\
    ';

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        $(document).ready(function(){
            $("#object1").bind("click", function(){ 
                document.getElementById('objectExp').innerHTML = '<?php echo $obj1;?>';
            });

            $("#object2").bind("click", function(){ 
                document.getElementById('objectExp').innerHTML = '<?php echo $obj2;?>';
            });

            $("#object3").bind("click", function(){ 
                document.getElementById('objectExp').innerHTML = '<?php echo $obj3;?>';
            });
        });
    </script>

    <?php 

sleep(1);
require_once('../core/functions.php');
require_once('../core/connect.php');
require_once('../core/connectstyles.php');
if($_COOKIE['role']=='expert' || $_COOKIE['role']=='admin' || $_COOKIE['role']=='gip'){
    include(__DIR__.'/../template/planexpert-users.php');

    foreach ($list as $key => $row) {
        if($row['arhiv_id']== NULL){
        echo '<tr>';
        echo '<td>' . $pp . '</td>';
        echo '<td><a 
        href=/?modal=experttestmodal&object_name='.$row['name'].' class="modal-a openformtaskexp" 
        >'. $row['name'] .'</a></td>';
    
        foreach ($pos_num as $key_m => $col) {
            if($row['taskP'][$key_m]['notuse']==1){
                echo '<td><a 
                href="#" class="openformtask">Не исп.
                </a> </td>';
            }elseif(isset($row['task'][$key_m])){
                  echo '<td alt="' . $row['task'][$key_m]['id'] . '"><a 
                    href=/?modal=expertnum&pos_num='.$key_m.'&task_id='.$row['task'][$key_m]['id'].'&object_id='.$row['id'].'&object_name='.$row['name'].'&count='.$row['task'][$key_m]['exp_num'].' class=" modal-a openformtaskexp" 
                    >'. $row['task'][$key_m]['exp_num'] .'
                    </a></td>';
            }else{
                echo '<td alt="' . $row['task'][$key_m]['id'] . '"><a 
                href=/?modal=expertnum&pos_num='.$key_m.'&task_id='.$row['task'][$key_m]['id'].'&object_id='.$row['id'].'&object_name='.$row['name'].' class=" modal-a openformtaskexp hideFuck" 
                >+</a></td>';
            }
        }
        echo '</tr>';
    $pp++;
        }else{}
    }
       echo "</table>";

}else{
    echo'
    <div class="showon">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Экспертиза</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-8">
                    <div id="objectExp">
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
                    <div class="list-group">
                        <a href="#" id="object1" class="list-group-item">
                            <i class="fa fa-folder fa-fw"></i> Объект 1
                            <span class="pull-right text-muted small"><em>до 11.01.19</em>
                            </span>
                        </a>
                        <a href="#" id="object2" class="list-group-item">
                            <i class="fa fa-folder fa-fw"></i> Объект 2
                            <span class="pull-right text-muted small"><em>до 13.02.19</em>
                            </span>
                        </a>
                        <a href="#" id="object3" class="list-group-item">
                            <i class="fa fa-folder fa-fw"></i> Объект 3
                            <span class="pull-right text-muted small"><em>до 12.04.19</em>
                            </span>
                        </a>
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
        <!-- /.row -->
    </div>
    <!-- /.showon -->
    ';
}

?>