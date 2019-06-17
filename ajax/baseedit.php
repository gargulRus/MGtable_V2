<?php
require_once('../core/connectstyles.php');

sleep(1);
echo'
<div class="showon">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">База</h1>
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
                
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">
                    <a href="#" id="years" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i>Добавить год в базу
                    </a>
                    <a href="#" id="objects" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i> Создать объект
                    </a>
                    <a href="#" id="compressors" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i> Компрессорные
                      
                    </a>
                    <a href="#" id="vacuums" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i> Вакуумные установки
                   
                    </a>
                    <a href="#" id="kgs" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i> КГС
                     
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

<script>

function funcBeforeObject () {
    $("#objecthere").text ("Ожидаю данные...");
}

function funcSuccessObject (data) {
    $("#objecthere").html(data);
}

$(document).ready(function(){

    $("#years").bind("click", function(){ 
        $.ajax ({
            url: "ajax/baseedit/years.php",
            dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    $("#objects").bind("click", function(){ 
        $.ajax ({
            url: "ajax/baseedit/objects.php",
            dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    $("#compressors").bind("click", function(){ 
        $.ajax ({
            url: "ajax/baseedit/compressors.php",
            dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    $("#vacuums").bind("click", function(){ 
        $.ajax ({
            url: "ajax/baseedit/vacuums.php",
            dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    $("#kgs").bind("click", function(){ 
        $.ajax ({
            url: "ajax/baseedit/kgs.php",
            dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    
});
</script>