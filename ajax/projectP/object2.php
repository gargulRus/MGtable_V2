<?php
require_once('../../core/functions.php');
require_once('../../core/connect.php');
require_once('../../core/connectstyles.php');

echo'
<div class="row">
    <div class="col-lg-8">
        <h2>Объект 2</h2><br>
        <p>Срок выполнения 15.12.2018 - 15.01.2019.</p><br>
        <p><b>Актуальная версия:</b> Изменение №2 от "Дата изменения".</p><br>
        <p>Экспертиза: Планируемая дата захода в экспертизу - 15.02.2019</p><br>
    </div>
    <div class="col-lg-4">
      <span type="submit" id="submit" class="btn btn-info" data-toggle="modal" data-target="#modalModify" >Новое Изменение</span>
      <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Изменения
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li class="dropdown-header">Дата изменения</li>
            <li><a href="#">Изменение №1</a></li>
            <li class="dropdown-header">Дата изменения</li>
            <li><a href="#">Изменение №2</a></li>
            </ul>
        </div>
    </div>
</div>
<ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#all">Общая информация</a></li>
    <li><a data-toggle="tab" href="#ird">ИРД</a></li>
    <li class="active"><a data-toggle="tab" href="#sostav">Состав проекта</a></li>
    <li><a data-toggle="tab" href="#moi">Мой раздел</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Задания
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a  data-toggle="tab"  href="#forSpecialist">Для смежников</a></li>
            <li><a  data-toggle="tab"  href="#fromSpecialist">От смежников</a></li>
        </ul>
    </li>
    <li><a data-toggle="tab" href="#remarks">Замечания</a></li>
    <li><a data-toggle="tab" href="#title">Обложки</a></li>
</ul>

<div class="tab-content">
    <div id="all" class="tab-pane fade">
        
        <form class="form-horizontal" id="saveIrdFile">
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">1. Штамп</label>
                <div class="col-sm-8">
                    <p>Номер для штампа</p>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">2. Название объекта</label>
                <div class="col-sm-8">
                    <p>Полное название объекта для штампа</p>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">3. Доп. информ.</label>
                <div class="col-sm-8">
                    <p>Иная дополнительная информация</p>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">4. Состав проекта</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
        </form>
    </div>
    <div id="ird" class="tab-pane fade">
       
        <form class="form-horizontal" id="saveIrdFile">
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">1. Геология</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">2. Экология</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">3. Приложение-1</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">4. Приложение-2</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
        </form>
    </div>
    <div id="sostav" class="tab-pane fade in active">
        
        <div class="panel-group" id="accordion">
            <div class="panel panel-success">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#pz">
                    Том 1. Пояснительная записка</a>
                </h4>
                </div>
                <div id="pz" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="taskform">
                        <form method="POST" id="savePform">
                            <br>
                                <div class="box">
                                    <div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 1</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 2</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 3</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 4</label>
                                        </div>
                                    </div>
                                    <div class="sostav-load">
                                        <form class="form-horizontal" id="saveIrdFile">
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">1. ПЗ</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                               
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#pzy">
                    Том 2. ПЗУ</a>
                </h4>
                </div>
                <div id="pzy" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="taskform">
                            <form method="POST" id="savePform">
                                <br>
                                    <div class="box">
                                        <div>
                                            <div class="form-group">
                                                <label class ="bg-success " for="">Выполненная задача 1</label>
                                            </div>
                                            <div class="form-group">
                                                <label class ="bg-success " for="">Выполненная задача 2</label>
                                            </div>
                                            <div class="form-group">
                                                <label class ="bg-success " for="">Выполненная задача 3</label>
                                            </div>
                                            <div class="form-group">
                                                <label class ="bg-success " for="">Выполненная задача 4</label>
                                            </div>
                                        </div>
                                        <div class="sostav-load">
                                            <form class="form-horizontal" id="saveIrdFile">
                                                <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label ten">1. ПДФ целый том</label>
                                                    <div class="col-sm-8 eighteen">
                                                        <span><img class="pdficon" src="../image/pdf.png"></span>
                                                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                                    <div class="col-sm-8 eighteen">
                                                        <span><img class="pdficon" src="../image/pdf.png"></span>
                                                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                    
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                                    <div class="col-sm-8 eighteen">
                                                        <span><img class="pdficon" src="../image/pdf.png"></span>
                                                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#ar">
                    Том 3. Архитектурные решения</a>
                </h4>
                </div>
                <div id="ar" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="taskform">
                            <form method="POST" id="savePform">
                                <br>
                                    <div class="box">
                                        <div>
                                            <div class="form-group">
                                                <label class ="bg-success " for="">Выполненная задача 1</label>
                                            </div>
                                            <div class="form-group">
                                                <label class ="bg-success " for="">Выполненная задача 2</label>
                                            </div>
                                            <div class="form-group">
                                                <label class ="bg-success " for="">Выполненная задача 3</label>
                                            </div>
                                            <div class="form-group">
                                                <label class ="bg-success " for="">Выполненная задача 4</label>
                                            </div>
                                        </div>
                                        <div class="sostav-load">
                                            <form class="form-horizontal" id="saveIrdFile">
                                                <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label ten">1. ПДФ целый том</label>
                                                    <div class="col-sm-8 eighteen">
                                                        <span><img class="pdficon" src="../image/pdf.png"></span>
                                                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                                    <div class="col-sm-8 eighteen">
                                                        <span><img class="pdficon" src="../image/pdf.png"></span>
                                                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                    
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                                    <div class="col-sm-8 eighteen">
                                                        <span><img class="pdficon" src="../image/pdf.png"></span>
                                                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#kr">
                    Том 4. Конструкции</a>
                </h4>
                </div>
                <div id="kr" class="panel-collapse collapse">
                    <div class="panel-body">
                    <div class="taskform">
                        <form method="POST" id="savePform">
                            <br>
                                <div class="box">
                                    <div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 1</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 2</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 3</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 4</label>
                                        </div>
                                    </div>
                                    <div class="sostav-load">
                                        <form class="form-horizontal" id="saveIrdFile">
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">1. ПДФ целый том</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                            
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#eom">
                    Том 5.1.1. Электрооборудование и освещение</a>
                </h4>
                </div>
                <div id="eom" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="taskform">
                        <form method="POST" id="savePform">
                            <br>
                                <div class="box">
                                    <div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 1</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 2</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 3</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 3</label>
                                        </div>
                                    </div>
                                    <div class="sostav-load">
                                        <form class="form-horizontal" id="saveIrdFile">
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">1. ПДФ целый том</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                            
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#nes">
                    Том 5.1.2. Наружные сети электроснабжения</a>
                </h4>
                </div>
                <div id="nes" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="taskform">
                        <form method="POST" id="savePform">
                            <br>
                                <div class="box">
                                    <div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 1</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 2</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 3</label>
                                        </div>
                                        <div class="form-group">
                                            <label class ="bg-success " for="">Выполненная задача 3</label>
                                        </div>
                                    </div>
                                    <div class="sostav-load">
                                        <form class="form-horizontal" id="saveIrdFile">
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">1. ПДФ целый том</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                                <div class="col-sm-8 eighteen">
                                                    <span><img class="pdficon" src="../image/pdf.png"></span>
                                                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                            
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#vk">
                    Том 5.2,3.1. Водоснабжение и водоотведение</a>
                </h4>
                </div>
                <div id="vk" class="panel-collapse collapse">
                    <div class="panel-body">
                    <div class="taskform">
                    <form method="POST" id="savePform">
                        <br>
                            <div class="box">
                                <div>
                                    <div class="form-group">
                                        <label class ="bg-success " for="">Выполненная задача 1</label>
                                    </div>
                                    <div class="form-group">
                                        <label class ="bg-success " for="">Выполненная задача 2</label>
                                    </div>
                                    <div class="form-group">
                                        <label class ="bg-success " for="">Выполненная задача 3</label>
                                    </div>
                                    <div class="form-group">
                                        <label class ="bg-success " for="">Выполненная задача 4</label>
                                    </div>
                                </div>
                                <div class="sostav-load">
                                    <form class="form-horizontal" id="saveIrdFile">
                                        <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label ten">1. ПДФ целый том</label>
                                            <div class="col-sm-8 eighteen">
                                                <span><img class="pdficon" src="../image/pdf.png"></span>
                                                <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                            <div class="col-sm-8 eighteen">
                                                <span><img class="pdficon" src="../image/pdf.png"></span>
                                                <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                            <div class="col-sm-8 eighteen">
                                                <span><img class="pdficon" src="../image/pdf.png"></span>
                                                <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                        
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </form>
                </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-success">
                <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#nvk">
                    Том 5.2,3.2. Наружные сети водопровода и канализации</a>
                </h4>
                </div>
                <div id="nvk" class="panel-collapse collapse">
                    <div class="panel-body">
                    <div class="taskform">
                    <form method="POST" id="savePform">
                        <br>
                            <div class="box">
                                <div>
                                    <div class="form-group">
                                        <label class ="bg-success " for="">Выполненная задача 1</label>
                                    </div>
                                    <div class="form-group">
                                        <label class ="bg-success " for="">Выполненная задача 2</label>
                                    </div>
                                    <div class="form-group">
                                        <label class ="bg-success " for="">Выполненная задача 3</label>
                                    </div>
                                    <div class="form-group">
                                        <label class ="bg-success " for="">Выполненная задача 4</label>
                                    </div>
                                </div>
                                <div class="sostav-load">
                                    <form class="form-horizontal" id="saveIrdFile">
                                        <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label ten">1. ПДФ целый том</label>
                                            <div class="col-sm-8 eighteen">
                                                <span><img class="pdficon" src="../image/pdf.png"></span>
                                                <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                            <div class="col-sm-8 eighteen">
                                                <span><img class="pdficon" src="../image/pdf.png"></span>
                                                <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                            <div class="col-sm-8 eighteen">
                                                <span><img class="pdficon" src="../image/pdf.png"></span>
                                                <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                        
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </form>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="moi" class="tab-pane fade">
        <h3>Мой раздел</h3>
            <div class="taskform">
                <form method="POST" id="savePform">
                    <br>
                        <div class="box">
                            <div>
                                <div class="form-group">
                                    <input type="checkbox" id="task" value=1 checked>
                                    <label class ="bg-success" for="">Задача 1</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="task" value=1 checked>
                                    <label class ="bg-success" for="">Задача 2</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="task" value=1 checked>
                                    <label class ="bg-success" for="">Задача 3</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="task" value=1 checked>
                                    <label class ="bg-success" for="">Задача 4</label>
                                </div>
                                <div class="form-group text-right">
                                <input type="submit" class="btn btn-success" id="btnsaveP" value="Сохранить"/>
                            </div>
                            </div>
                            <div class="sostav-load">
                                <form class="form-horizontal" id="saveIrdFile">
                                    <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label ten">1. ПДФ целый том</label>
                                        <div class="col-sm-8 eighteen">
                                            <span><img class="pdficon" src="../image/pdf.png"></span>
                                            <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label ten">2. Доп. Приложение(?)</label>
                                        <div class="col-sm-8 eighteen">
                                            <span><img class="pdficon" src="../image/pdf.png"></span>
                                            <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label ten">3. Доп.Файл (?)</label>
                                        <div class="col-sm-8 eighteen">
                                            <span><img class="pdficon" src="../image/pdf.png"></span>
                                            <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                                    
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-2 control-label ten">Загрузите новый файл</label>
                                        <div class="col-sm-8 eighteen">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                                            <input type="text" name="filename" placeholder="Введите имя файла" required />     
                                            <input name="userfile" type="file" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </form>
            </div>
    </div>
    <div id="forSpecialist" class="tab-pane fade">
        <h3>Задание для смежников</h3>
            <form class="form-horizontal" id="saveIrdFile">
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">1. ВК</label>
                    <div class="col-sm-8">
                        <span><img class="pdficon" src="../image/pdf.png"></span>
                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                    </div>
                </div>
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">2. ОВ</label>
                    <div class="col-sm-8">
                        <span><img class="pdficon" src="../image/pdf.png"></span>
                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                    </div>
                </div>
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">3. СС</label>
                    <div class="col-sm-8">
                        <span><img class="pdficon" src="../image/pdf.png"></span>
                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label ten">Загрузите новый файл</label>
                    <div class="col-sm-8 eighteen">
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                        <input type="text" name="filename" placeholder="Введите имя файла" required />     
                        <input name="userfile" type="file" />
                    </div>
                </div>
            </form>
    </div>
    <div id="fromSpecialist" class="tab-pane fade">
        <h3>От смежников</h3>
        <form class="form-horizontal" id="saveIrdFile">
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">1. ВК</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">2. ОВ</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">3. СС</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label ten">Загрузите новый файл</label>
                <div class="col-sm-8 eighteen">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input type="text" name="filename" placeholder="Введите имя файла" required />     
                    <input name="userfile" type="file" />
                </div>
            </div>
        </form>
    </div>
    <div id="remarks" class="tab-pane fade">
        <h3>Замечания</h3>
            <form class="form-horizontal" id="saveIrdFile">
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">1. Замечания</label>
                    <div class="col-sm-8">
                        <span><img class="pdficon" src="../image/pdf.png"></span>
                        <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label ten">Загрузите новый файл</label>
                    <div class="col-sm-8 eighteen">
                        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                        <input type="text" name="filename" placeholder="Введите имя файла" required />     
                        <input name="userfile" type="file" />
                    </div>
                </div>
            </form>
        <p>Показывать кол-во замечаний для каждого раздела?</p>
        <p>Только их общее кол-во?</p>
    </div>
    <div id="title" class="tab-pane fade">
        <h3>Обложки</h3>
        <form class="form-horizontal" id="saveIrdFile">
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label"> Том 1. Пояснительная записка</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Том 2. ПЗУ</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Том 3. Архитектурные решения</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Том 4. Конструкции</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Том 5.1.1. Электрооборудование и освещение</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label"> Том 5.1.2. Наружные сети электроснабжения</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Том 5.2,3.1. Водоснабжение и водоотведение</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label"> Том 5.2,3.2. Наружные сети водопровода и канализации</label>
                <div class="col-sm-8">
                    <span><img class="pdficon" src="../image/pdf.png"></span>
                    <a href="#" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label ten">Загрузите новый файл</label>
                <div class="col-sm-8 eighteen">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input type="text" name="filename" placeholder="Введите имя файла" required />     
                    <input name="userfile" type="file" />
                </div>
            </div>
        </form>
    </div>
</div>



<div class="modal fade positionModal" id="modalModify" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</div>


';
?>