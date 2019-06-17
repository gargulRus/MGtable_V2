<?php
require_once('../core/connectstyles.php');
 $obj1 ='\
 <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 1</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>12.01.19<b> ПО <b>07.04.19<b></p>\
    <br>\
    <p>Задачи по разделу: </p>\
    </div>\
    <div class="col-lg-4">\
    </div>\
    <div class="col-lg-8">\
    <div class="list-group">\
        <button type="button" class="list-group-item">Задача 1</button>\
        <button type="button" class="list-group-item">Задача 2</button>\
        <button type="button" class="list-group-item">Задача 3</button>\
        <button type="button" class="list-group-item">Задача 4</button>\
        <button type="button" class="list-group-item">Задача 5</button>\
    </div>\
    <br>\
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                <div class="col-sm-8">\
                    <input type="text" id="name" class="form-control" name="name" placeholder="Пояснительная записка">\
                </div>\
        </div>\
        <div class="form-group">\
                <div class="col-sm-8">\
                    <input type="file" name="file" id="file">\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                <div class="col-sm-8">\
                    <input type="text" id="name" class="form-control" name="name" placeholder="Графическая часть">\
                </div>\
        </div>\
        <div class="form-group">\
                <div class="col-sm-8">\
                    <input type="file" name="file" id="file">\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                <div class="col-sm-8">\
                    <input type="text" id="name" class="form-control" name="name" placeholder="Спецификация">\
                </div>\
        </div>\
        <div class="form-group">\
                <div class="col-sm-8">\
                    <input type="file" name="file" id="file">\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                <div class="col-sm-8">\
                    <input type="text" id="name" class="form-control" name="name" placeholder="Ведомость Объемов">\
                </div>\
        </div>\
        <div class="form-group">\
                <div class="col-sm-8">\
                    <input type="file" name="file" id="file">\
                </div>\
        </div>\
        <div class="form-group">\
            <div class="col-sm-offset-2 col-sm-8">\
                <span type="submit" id="submit" class="btn btn-primary">Отправить</span>\
                <div></div>\
            </div>\
        </div>\
    </form>\
</div>\
</div>\
    ';

 $obj2 ='\
 <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 2</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>15.02.19<b> ПО <b>17.06.19<b></p>\
    <br>\
    <p>Задачи по разделу: </p>\
    </div>\
    <div class="col-lg-4">\
    </div>\
    <div class="col-lg-8">\
    <div class="list-group">\
        <button type="button" class="list-group-item">Задача 1</button>\
        <button type="button" class="list-group-item">Задача 2</button>\
        <button type="button" class="list-group-item">Задача 3</button>\
        <button type="button" class="list-group-item">Задача 4</button>\
        <button type="button" class="list-group-item">Задача 5</button>\
    </div>\
    <br>\
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                <div class="col-sm-8">\
                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                <div class="col-sm-8">\
                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                <div class="col-sm-8">\
                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                <div class="col-sm-8">\
                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                </div>\
        </div>\
        <div class="form-group">\
            <div class="col-sm-offset-2 col-sm-8">\
                <span type="submit" id="submit" class="btn btn-primary">Отправить</span>\
                <div></div>\
            </div>\
        </div>\
    </form>\
</div>\
</div>\
    ';

$obj3 ='\
<div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 3</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>13.04.19<b> ПО <b>08.07.19<b></p>\
    <br>\
    <p>Задачи по разделу: </p>\
    </div>\
    <div class="col-lg-4">\
    </div>\
    <div class="col-lg-8">\
    <div class="list-group">\
        <button type="button" class="list-group-item">Задача 1</button>\
        <button type="button" class="list-group-item">Задача 2</button>\
        <button type="button" class="list-group-item">Задача 3</button>\
        <button type="button" class="list-group-item">Задача 4</button>\
        <button type="button" class="list-group-item">Задача 5</button>\
    </div>\
    <br>\
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                <div class="col-sm-8">\
                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                <div class="col-sm-8">\
                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                <div class="col-sm-8">\
                    <input type="text" id="name" class="form-control" name="name" placeholder="Спецификация">\
                </div>\
        </div>\
        <div class="form-group">\
                <div class="col-sm-8">\
                    <input type="file" name="file" id="file">\
                </div>\
        </div>\
        <div class="form-group">\
            <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                <div class="col-sm-8">\
                    <input type="text" id="name" class="form-control" name="name" placeholder="Ведомость Объемов">\
                </div>\
        </div>\
        <div class="form-group">\
                <div class="col-sm-8">\
                    <input type="file" name="file" id="file">\
                </div>\
        </div>\
        <div class="form-group">\
            <div class="col-sm-offset-2 col-sm-8">\
                <span type="submit" id="submit" class="btn btn-primary">Отправить</span>\
                <div></div>\
            </div>\
        </div>\
    </form>\
</div>\
</div>\
    ';

//ДЛЯ ГИПА
//ДЛЯ ГИПА
//ДЛЯ ГИПА

$obj1G ='\
 <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 1</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>12.01.19<b> ПО <b>07.04.19<b></p>\
    <br>\
    <p>Задачи по Объекту: </p>\
    </div>\
    <div class="col-lg-4">\
    <span type="submit" id="submit" class="btn btn-info">Новое Изменение</span>\
    </div>\
    <div class="col-lg-8">\
    <div class="panel-group" id="accordion1">\
        <div class="panel panel-danger ">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_1" class="panel-collapse collapse">\
                <div class="panel-body">\
                    <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                    </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                        <div class="col-sm-8">\
                            <input type="text" id="name" class="form-control" name="name" placeholder="Пояснительная записка">\
                        </div>\
                        </div>\
                        <div class="form-group">\
                                <div class="col-sm-8">\
                                    <input type="file" name="file" id="file">\
                                </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                            <div class="col-sm-8">\
                                <input type="text" id="name" class="form-control" name="name" placeholder="ИРД(?)">\
                            </div>\
                        </div>\
                        <div class="form-group">\
                                <div class="col-sm-8">\
                                    <input type="file" name="file" id="file">\
                                </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Доп.документация(?)</label>\
                            <div class="col-sm-8">\
                                <input type="text" id="name" class="form-control" name="name" placeholder="Доп.документация(?)">\
                            </div>\
                        </div>\
                        <div class="form-group">\
                                <div class="col-sm-8">\
                                    <input type="file" name="file" id="file">\
                                </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_2" class="panel-collapse collapse">\
                <div class="panel-body">\
                    <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                    </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                            <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_3" class="panel-collapse collapse">\
                <div class="panel-body">\
                        <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                         </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                            <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_4" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_5" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_6" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
    </div>\
</div>\
</div>\
    ';

$obj2G ='\
    <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 2</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>15.02.19<b> ПО <b>17.06.19<b></p>\
    <br>\
       <p>Задачи по Объекту: </p>\
       </div>\
       <div class="col-lg-4">\
       <span type="submit" id="submit" class="btn btn-info">Новое Изменение</span>\
       </div>\
       <div class="col-lg-8">\
       <div class="panel-group" id="accordion1">\
           <div class="panel panel-success ">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_1" class="panel-collapse collapse">\
                   <div class="panel-body">\
                       <div class="list-group">\
                           <button type="button" class="list-group-item">Задача 1</button>\
                           <button type="button" class="list-group-item">Задача 2</button>\
                           <button type="button" class="list-group-item">Задача 3</button>\
                           <button type="button" class="list-group-item">Задача 4</button>\
                           <button type="button" class="list-group-item">Задача 5</button>\
                       </div>\
                       <br>\
                       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                   <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                   <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Доп.Документация(?)</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                   <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                               </div>\
                       </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_2" class="panel-collapse collapse">\
                   <div class="panel-body">\
                        <div class="list-group">\
                            <button type="button" class="list-group-item">Задача 1</button>\
                            <button type="button" class="list-group-item">Задача 2</button>\
                            <button type="button" class="list-group-item">Задача 3</button>\
                            <button type="button" class="list-group-item">Задача 4</button>\
                            <button type="button" class="list-group-item">Задача 5</button>\
                        </div>\
                        <br>\
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                    <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_3" class="panel-collapse collapse">\
                   <div class="panel-body">\
                            <div class="list-group">\
                                <button type="button" class="list-group-item">Задача 1</button>\
                                <button type="button" class="list-group-item">Задача 2</button>\
                                <button type="button" class="list-group-item">Задача 3</button>\
                                <button type="button" class="list-group-item">Задача 4</button>\
                                <button type="button" class="list-group-item">Задача 5</button>\
                            </div>\
                            <br>\
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                        <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                            </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_4" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_5" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_6" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
       </div>\
   </div>\
   </div>\
       ';

$obj3G ='\
    <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 3</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>13.04.19<b> ПО <b>08.07.19<b></p>\
    <br>\
       <p>Задачи по Объекту: </p>\
       </div>\
       <div class="col-lg-4">\
       <span type="submit" id="submit" class="btn btn-info">Новое Изменение</span>\
       </div>\
       <div class="col-lg-8">\
       <div class="panel-group" id="accordion1">\
           <div class="panel panel-warning ">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_1" class="panel-collapse collapse">\
                   <div class="panel-body">\
                       <div class="list-group">\
                           <button type="button" class="list-group-item">Задача 1</button>\
                           <button type="button" class="list-group-item">Задача 2</button>\
                           <button type="button" class="list-group-item">Задача 3</button>\
                           <button type="button" class="list-group-item">Задача 4</button>\
                           <button type="button" class="list-group-item">Задача 5</button>\
                       </div>\
                       <br>\
                       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                   <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                           <div class="col-sm-8">\
                               <span>Файл Отсутствует!</span>\
                           </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Доп.Документация(?)</label>\
                           <div class="col-sm-8">\
                           <span>Файл Отсутствует!</span>\
                           </div>\
                   </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_2" class="panel-collapse collapse">\
                   <div class="panel-body">\
                        <div class="list-group">\
                            <button type="button" class="list-group-item">Задача 1</button>\
                            <button type="button" class="list-group-item">Задача 2</button>\
                            <button type="button" class="list-group-item">Задача 3</button>\
                            <button type="button" class="list-group-item">Задача 4</button>\
                            <button type="button" class="list-group-item">Задача 5</button>\
                        </div>\
                        <br>\
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                    <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                            </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_3" class="panel-collapse collapse">\
                   <div class="panel-body">\
                            <div class="list-group">\
                                <button type="button" class="list-group-item">Задача 1</button>\
                                <button type="button" class="list-group-item">Задача 2</button>\
                                <button type="button" class="list-group-item">Задача 3</button>\
                                <button type="button" class="list-group-item">Задача 4</button>\
                                <button type="button" class="list-group-item">Задача 5</button>\
                            </div>\
                            <br>\
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                        <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                    <div class="col-sm-8">\
                                    <span>Файл Отсутствует!</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                                    <div class="col-sm-8">\
                                    <span>Файл Отсутствует!</span>\
                                    </div>\
                                </div>\
                            </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_4" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_5" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_6" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
       </div>\
   </div>\
   </div>\
';


//ДЛЯ ЭКСПЕРТА
//ДЛЯ ЭКСПЕРТА
//ДЛЯ ЭКСПЕРТА
$obj1E ='\
 <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 1</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>12.01.19<b> ПО <b>07.04.19<b></p>\
    <br>\
    <p>Задачи по Объекту: </p>\
    </div>\
    <div class="col-lg-4">\
    </div>\
    <div class="col-lg-8">\
    <div class="panel-group" id="accordion1">\
        <div class="panel panel-danger ">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_1" class="panel-collapse collapse">\
                <div class="panel-body">\
                    <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                    </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                        </div>\
                        <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                                <div class="col-sm-8">\
                                    <span>Файл Отсутствует!</span>\
                                </div>\
                        </div>\
                        <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Доп.Документация(?)</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_2" class="panel-collapse collapse">\
                <div class="panel-body">\
                    <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                    </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                            <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_3" class="panel-collapse collapse">\
                <div class="panel-body">\
                        <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                         </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                            <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_4" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_5" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_6" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
    </div>\
</div>\
</div>\
    ';

$obj2E ='\
    <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 2</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>15.02.19<b> ПО <b>17.06.19<b></p>\
    <br>\
       <p>Задачи по Объекту: </p>\
       </div>\
       <div class="col-lg-4">\
       </div>\
       <div class="col-lg-8">\
       <div class="panel-group" id="accordion1">\
           <div class="panel panel-success ">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_1" class="panel-collapse collapse">\
                   <div class="panel-body">\
                       <div class="list-group">\
                           <button type="button" class="list-group-item">Задача 1</button>\
                           <button type="button" class="list-group-item">Задача 2</button>\
                           <button type="button" class="list-group-item">Задача 3</button>\
                           <button type="button" class="list-group-item">Задача 4</button>\
                           <button type="button" class="list-group-item">Задача 5</button>\
                       </div>\
                       <br>\
                       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Доп.Документация(?)</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                               </div>\
                       </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_2" class="panel-collapse collapse">\
                   <div class="panel-body">\
                        <div class="list-group">\
                            <button type="button" class="list-group-item">Задача 1</button>\
                            <button type="button" class="list-group-item">Задача 2</button>\
                            <button type="button" class="list-group-item">Задача 3</button>\
                            <button type="button" class="list-group-item">Задача 4</button>\
                            <button type="button" class="list-group-item">Задача 5</button>\
                        </div>\
                        <br>\
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                    <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_3" class="panel-collapse collapse">\
                   <div class="panel-body">\
                            <div class="list-group">\
                                <button type="button" class="list-group-item">Задача 1</button>\
                                <button type="button" class="list-group-item">Задача 2</button>\
                                <button type="button" class="list-group-item">Задача 3</button>\
                                <button type="button" class="list-group-item">Задача 4</button>\
                                <button type="button" class="list-group-item">Задача 5</button>\
                            </div>\
                            <br>\
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                        <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                            </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_4" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_5" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_6" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
       </div>\
   </div>\
   </div>\
       ';

$obj3E ='\
    <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 3</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>13.04.19<b> ПО <b>08.07.19<b></p>\
    <br>\
       <p>Задачи по Объекту: </p>\
       </div>\
       <div class="col-lg-4">\
       </div>\
       <div class="col-lg-8">\
       <div class="panel-group" id="accordion1">\
           <div class="panel panel-warning ">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_1" class="panel-collapse collapse">\
                   <div class="panel-body">\
                       <div class="list-group">\
                           <button type="button" class="list-group-item">Задача 1</button>\
                           <button type="button" class="list-group-item">Задача 2</button>\
                           <button type="button" class="list-group-item">Задача 3</button>\
                           <button type="button" class="list-group-item">Задача 4</button>\
                           <button type="button" class="list-group-item">Задача 5</button>\
                       </div>\
                       <br>\
                       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                           <div class="col-sm-8">\
                               <span>Файл Отсутствует!</span>\
                           </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Доп.Документация(?)</label>\
                           <div class="col-sm-8">\
                           <span>Файл Отсутствует!</span>\
                           </div>\
                   </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_2" class="panel-collapse collapse">\
                   <div class="panel-body">\
                        <div class="list-group">\
                            <button type="button" class="list-group-item">Задача 1</button>\
                            <button type="button" class="list-group-item">Задача 2</button>\
                            <button type="button" class="list-group-item">Задача 3</button>\
                            <button type="button" class="list-group-item">Задача 4</button>\
                            <button type="button" class="list-group-item">Задача 5</button>\
                        </div>\
                        <br>\
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                    <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                            </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_3" class="panel-collapse collapse">\
                   <div class="panel-body">\
                            <div class="list-group">\
                                <button type="button" class="list-group-item">Задача 1</button>\
                                <button type="button" class="list-group-item">Задача 2</button>\
                                <button type="button" class="list-group-item">Задача 3</button>\
                                <button type="button" class="list-group-item">Задача 4</button>\
                                <button type="button" class="list-group-item">Задача 5</button>\
                            </div>\
                            <br>\
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                        <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                    <div class="col-sm-8">\
                                    <span>Файл Отсутствует!</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                                    <div class="col-sm-8">\
                                    <span>Файл Отсутствует!</span>\
                                    </div>\
                                </div>\
                            </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_4" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_5" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_6" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
       </div>\
   </div>\
   </div>\
';
//ДЛЯ АДМИНА
//ДЛЯ АДМИНА
//ДЛЯ АДМИНА
$obj1A ='\
 <div class="showon">\
 <div class="col-lg-8">\
    <h1>Объект 1</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>12.01.19<b> ПО <b>07.04.19<b></p>\
    <br>\
    <p>Задачи по Объекту: </p>\
    </div>\
    <div class="col-lg-4">\
    <span type="submit" id="submit" class="btn btn-info">Новое Изменение</span>\
    </div>\
    <div class="col-lg-8">\
    <div class="panel-group" id="accordion1">\
        <div class="panel panel-danger ">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_1" class="panel-collapse collapse">\
                <div class="panel-body">\
                    <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                    </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                        </div>\
                        <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                                <div class="col-sm-8">\
                                    <span>Файл Отсутствует!</span>\
                                </div>\
                        </div>\
                        <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Доп.Документация(?)</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_2" class="panel-collapse collapse">\
                <div class="panel-body">\
                    <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                    </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                            <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_3" class="panel-collapse collapse">\
                <div class="panel-body">\
                        <div class="list-group">\
                        <button type="button" class="list-group-item">Задача 1</button>\
                        <button type="button" class="list-group-item">Задача 2</button>\
                        <button type="button" class="list-group-item">Задача 3</button>\
                        <button type="button" class="list-group-item">Задача 4</button>\
                        <button type="button" class="list-group-item">Задача 5</button>\
                         </div>\
                    <br>\
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                            <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                        <div class="form-group">\
                        <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                            <div class="col-sm-8">\
                            <span>Файл Отсутствует!</span>\
                            </div>\
                        </div>\
                    </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_4" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_5" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
        <div class="panel panel-danger">\
            <div class="panel-heading">\
                <h5 class="panel-title">\
                 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 0% </em></span></a>\
                </h5>\
            </div>\
            <div id="accordion1_6" class="panel-collapse collapse">\
                <div class="panel-body">\
                <div class="list-group">\
                <button type="button" class="list-group-item">Задача 1</button>\
                <button type="button" class="list-group-item">Задача 2</button>\
                <button type="button" class="list-group-item">Задача 3</button>\
                <button type="button" class="list-group-item">Задача 4</button>\
                <button type="button" class="list-group-item">Задача 5</button>\
            </div>\
            <br>\
            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                    <div class="col-sm-8">\
                        <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
                <div class="form-group">\
                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                    <div class="col-sm-8">\
                    <span>Файл Отсутствует!</span>\
                    </div>\
                </div>\
            </form>\
                </div>\
            </div>\
        </div>\
    </div>\
</div>\
</div>\
    ';

$obj2A ='\
    <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 2</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>15.02.19<b> ПО <b>17.06.19<b></p>\
    <br>\
       <p>Задачи по Объекту: </p>\
       </div>\
       <div class="col-lg-4">\
       <span type="submit" id="submit" class="btn btn-info">Новое Изменение</span>\
       </div>\
       <div class="col-lg-8">\
       <div class="panel-group" id="accordion1">\
           <div class="panel panel-success ">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_1" class="panel-collapse collapse">\
                   <div class="panel-body">\
                       <div class="list-group">\
                           <button type="button" class="list-group-item">Задача 1</button>\
                           <button type="button" class="list-group-item">Задача 2</button>\
                           <button type="button" class="list-group-item">Задача 3</button>\
                           <button type="button" class="list-group-item">Задача 4</button>\
                           <button type="button" class="list-group-item">Задача 5</button>\
                       </div>\
                       <br>\
                       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                   <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                   <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Доп.Документация(?)</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                   <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                               </div>\
                       </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_2" class="panel-collapse collapse">\
                   <div class="panel-body">\
                        <div class="list-group">\
                            <button type="button" class="list-group-item">Задача 1</button>\
                            <button type="button" class="list-group-item">Задача 2</button>\
                            <button type="button" class="list-group-item">Задача 3</button>\
                            <button type="button" class="list-group-item">Задача 4</button>\
                            <button type="button" class="list-group-item">Задача 5</button>\
                        </div>\
                        <br>\
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                    <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                </div>\
                            </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_3" class="panel-collapse collapse">\
                   <div class="panel-body">\
                            <div class="list-group">\
                                <button type="button" class="list-group-item">Задача 1</button>\
                                <button type="button" class="list-group-item">Задача 2</button>\
                                <button type="button" class="list-group-item">Задача 3</button>\
                                <button type="button" class="list-group-item">Задача 4</button>\
                                <button type="button" class="list-group-item">Задача 5</button>\
                            </div>\
                            <br>\
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                        <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                    </div>\
                                </div>\
                            </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_4" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_5" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-success">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 100% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_6" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Ведомость Объемов</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
       </div>\
   </div>\
   </div>\
       ';

$obj3A ='\
    <div class="showon">\
    <div class="col-lg-8">\
    <h1>Объект 3</h1>\
    <p>Срок выполнения работ по разделу\
    <br>\
    C <b>13.04.19<b> ПО <b>08.07.19<b></p>\
    <br>\
       <p>Задачи по Объекту: </p>\
       </div>\
       <div class="col-lg-4">\
       <span type="submit" id="submit" class="btn btn-info">Новое Изменение</span>\
       </div>\
       <div class="col-lg-8">\
       <div class="panel-group" id="accordion1">\
           <div class="panel panel-warning ">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">ГИП <span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_1" class="panel-collapse collapse">\
                   <div class="panel-body">\
                       <div class="list-group">\
                           <button type="button" class="list-group-item">Задача 1</button>\
                           <button type="button" class="list-group-item">Задача 2</button>\
                           <button type="button" class="list-group-item">Задача 3</button>\
                           <button type="button" class="list-group-item">Задача 4</button>\
                           <button type="button" class="list-group-item">Задача 5</button>\
                       </div>\
                       <br>\
                       <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                       <div class="form-group">\
                           <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                               <div class="col-sm-8">\
                                   <span><img class="pdficon" src="../image/pdf.png"></span>\
                                   <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                   <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                               </div>\
                       </div>\
                       <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">ИРД(?)</label>\
                           <div class="col-sm-8">\
                               <span>Файл Отсутствует!</span>\
                           </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Доп.Документация(?)</label>\
                           <div class="col-sm-8">\
                           <span>Файл Отсутствует!</span>\
                           </div>\
                   </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Архитектурные решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_2" class="panel-collapse collapse">\
                   <div class="panel-body">\
                        <div class="list-group">\
                            <button type="button" class="list-group-item">Задача 1</button>\
                            <button type="button" class="list-group-item">Задача 2</button>\
                            <button type="button" class="list-group-item">Задача 3</button>\
                            <button type="button" class="list-group-item">Задача 4</button>\
                            <button type="button" class="list-group-item">Задача 5</button>\
                        </div>\
                        <br>\
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                    <div class="col-sm-8">\
                                    <span><img class="pdficon" src="../image/pdf.png"></span>\
                                    <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                    <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                            </div>\
                            <div class="form-group">\
                            <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                                <div class="col-sm-8">\
                                <span>Файл Отсутствует!</span>\
                                </div>\
                            </div>\
                        </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                       <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Конструкторские решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_3" class="panel-collapse collapse">\
                   <div class="panel-body">\
                            <div class="list-group">\
                                <button type="button" class="list-group-item">Задача 1</button>\
                                <button type="button" class="list-group-item">Задача 2</button>\
                                <button type="button" class="list-group-item">Задача 3</button>\
                                <button type="button" class="list-group-item">Задача 4</button>\
                                <button type="button" class="list-group-item">Задача 5</button>\
                            </div>\
                            <br>\
                            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                                    <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                    <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                                        <div class="col-sm-8">\
                                        <span><img class="pdficon" src="../image/pdf.png"></span>\
                                        <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                                        <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                                    <div class="col-sm-8">\
                                    <span>Файл Отсутствует!</span>\
                                    </div>\
                                </div>\
                                <div class="form-group">\
                                <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                                    <div class="col-sm-8">\
                                    <span>Файл Отсутствует!</span>\
                                    </div>\
                                </div>\
                            </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Электро-оборудования<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_4" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Вентиляция, кондиционирование<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_5" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
           <div class="panel panel-warning">\
               <div class="panel-heading">\
                   <h5 class="panel-title">\
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">Технологические решения<span class="pull-right text-muted small"><em>Готовность раздела: 50% </em></span></a>\
                   </h5>\
               </div>\
               <div id="accordion1_6" class="panel-collapse collapse">\
                   <div class="panel-body">\
                   <div class="list-group">\
                   <button type="button" class="list-group-item">Задача 1</button>\
                   <button type="button" class="list-group-item">Задача 2</button>\
                   <button type="button" class="list-group-item">Задача 3</button>\
                   <button type="button" class="list-group-item">Задача 4</button>\
                   <button type="button" class="list-group-item">Задача 5</button>\
               </div>\
               <br>\
               <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Пояснительная записка</label>\
                       <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                       <label for="name" class="col-sm-2 control-label">Графическая часть</label>\
                           <div class="col-sm-8">\
                           <span><img class="pdficon" src="../image/pdf.png"></span>\
                           <span type="submit" id="submit" class="btn btn-success">Скачать</span>\
                           <span type="submit" id="submit" class="btn btn-danger">Удалить</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Спецификация</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
                   <div class="form-group">\
                   <label for="name" class="col-sm-2 control-label">Ведомость объемов</label>\
                       <div class="col-sm-8">\
                       <span>Файл Отсутствует!</span>\
                       </div>\
                   </div>\
               </form>\
                   </div>\
               </div>\
           </div>\
       </div>\
   </div>\
   </div>\
';


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

        $(document).ready(function(){
            $("#object1").bind("click", function(){ 
                document.getElementById('objecthere').innerHTML = '<?php if($_COOKIE['role']=='expert'){echo $obj1E;}elseif($_COOKIE['role']=='admin'){echo $obj1A;}elseif($_COOKIE['role']=='gip'){echo $obj1G;}else{echo $obj1;} ?>';
            });

            $("#object2").bind("click", function(){ 
                document.getElementById('objecthere').innerHTML = '<?php if($_COOKIE['role']=='expert'){echo $obj2E;}elseif($_COOKIE['role']=='admin'){echo $obj2A;}elseif($_COOKIE['role']=='gip'){echo $obj2G;}else{echo $obj2;} ?>';
            });

            $("#object3").bind("click", function(){ 
                document.getElementById('objecthere').innerHTML = '<?php if($_COOKIE['role']=='expert'){echo $obj3E;}elseif($_COOKIE['role']=='admin'){echo $obj3A;}elseif($_COOKIE['role']=='gip'){echo $obj3G;}else{echo $obj3;} ?>';
            });
        });
    </script>
<?php 
sleep(1);
echo'
<div class="showon">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Разработка Рабочей документации документации</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
                <div id="objecthere">
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
                        <span class="pull-right text-muted small"><em>Готовность 0% Срок: до 07.04.19</em>
                        </span>
                    </a>
                    <a href="#" id="object2" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i> Объект 2
                        <span class="pull-right text-muted small"><em>Готовность 100% Срок: до 17.06.19</em>
                        </span>
                    </a>
                    <a href="#" id="object3" class="list-group-item">
                        <i class="fa fa-folder fa-fw"></i> Объект 3
                        <span class="pull-right text-muted small"><em>Готовность 50% Срок: до 08.07.19</em>
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
?>