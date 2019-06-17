<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>АО "Гипроздорав"</title>

    <?php  include(__DIR__.'/../core/connectstyles.php'); ?>

    <script>

        function funcBefore () {
            $("#page-wrapper").text ("Ожидаю данные...");
        }

        function funcSuccess (data) {
            $("#page-wrapper").html(data);
        }

        $(document).ready(function(){
            $("#loadMain").bind("click", function(){ 
                $.ajax ({
                    url: "../ajax/main2.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
            
            $("#loadProj").bind("click", function(){ 
                $.ajax ({
                    url: "../ajax/project2.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
            $("#loadExp").bind("click", function(){ 
                $.ajax ({
                    url: "../ajax/expert.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
            $("#loadWork").bind("click", function(){ 
                $.ajax ({
                    url: "../ajax/work.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
            $("#loadSvod").bind("click", function(){ 
                $.ajax ({
                    url: "../ajax/svodnik.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
            $("#loadInfo").bind("click", function(){ 
                $.ajax ({
                    url: "../ajax/dopinfo.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });

            $("#loadEditObj").bind("click", function(){ 
                $.ajax ({
                    url: "../ajax/objedit2.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
            $("#loadEditBase").bind("click", function(){ 
                $.ajax ({
                    url: "../ajax/baseedit.php",
                    dataType: "html",
                    beforeSend: funcBefore,
                    success: funcSuccess
                });
            });
        });
    </script>
</head>

<body>
<div class="showon">
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!--  navbar-header start-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Медицинские газы</a>
               <span type="submit" id="submit" class="btn btn-info exitbtn"><?php echo $_COOKIE['name'];?></span>
                 <!-- <span type="submit" data-toggle="modal" data-target="#modalModify" class="btn btn-info exitbtn">Обновления</span>-->
                <a href="../exit.php" class="btn btn-danger exitbtn">Выход</a>
    
                
            </div>
            <!--  navbar-header end-->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>                  
                            <a href="#" id="loadMain" name="btnMain"><i class="fa fa-list-ol fa-fw"></i> Сводная таблица</a>
                        </li>
                        <?php
                        if($_COOKIE['role']=='mg'){
                            echo '
                            <li>                  
                                <a href="#" id="loadEditBase" name="btnEditEmpl"><i class="fa fa-users fa-fw"></i>Работа с Базой</a>
                            </li>
                            ';
                        }else{}
                        ?>
                        <li>
                        <a href="#" id="loadProj" name="btnProj"><i class="fa fa-table fa-fw"></i> Объекты</a>
                        </li>
                        <!-- <li>
                            <a href="#" id="loadProj" name="btnProj"><i class="fa fa-table fa-fw"></i> Проект</a>
                        </li>
                         <li>
                            <a href="#" id="loadExp" name="btnExp"><i class="fa fa-table fa-fw"></i> Экспертиза</a>
                        </li>
                        <li>
                            <a href="#" id="loadWork" name="btnJob"><i class="fa fa-table fa-fw"></i> Рабочка</a>
                        </li>
                       <li>
                            <a href="#" id="loadSvod" name="btnSvod"><i class="fa fa-table fa-fw"></i> Сводная таблица</a>
                        </li>
                        <li>
                            <a href="#" id="loadInfo" name="btnDopInfo"><i class="fa fa-table fa-fw"></i> Доп.Информация</a>
                        </li>
                        <li>
                            <a href="#" id="#" name="#"><i class="fa fa-table fa-fw"></i> Дополнительные вкладки</a>
                        </li> -->

                    </ul>
                </div>
          
            </div>
       
        </nav>

        <div id="page-wrapper">
                    <div class="row">
                    <div class="col-lg-12">
                        <!-- <h1 class="page-header">Главная</h1> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                    <!-- <h1>Какое-то наполнение</h1> -->
                
                </div>  
                <!-- <div class="modal fade positionModal" id="modalModify" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-body">
                        <p>Создать новое изменение в проекте?</p>
                        <p>ВНИМАНИЕ!</p>
                        <p>Будет создано новое измеение, прогресс обнулится, файлы будут перенесены!</p>
                        <p>Что меняется при новом изменении? Штам? Название? Состав проекта? Обложки?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary">Да, Продолжить</button>
                    </div>
                    </div>
                </div>
                </div> -->
        </div>
         <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
 </div>
</body>

</html>
