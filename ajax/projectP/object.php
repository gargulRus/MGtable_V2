<?php
require_once('../../core/functions.php');
require_once('../../core/connect.php');
require_once('../../core/connectstyles.php');
$id = $_POST['id'];
$name = $_POST['name'];
$year = $_POST['year'];
//Обработчик кнопки удаления объекта
if(isset($_POST['delObj']))
{   
    sleep(1);
    $id =$_POST['id'];
    echo 'Перемещаю объект в корзину!';
    $result2 = query ("UPDATE object SET arhiv = 1 WHERE id='$id'");

    echo'
    <script>
    function funcBeforeObject3 () {
        $("#page-wrapper").text ("Ожидаю данные...");
    }

    function funcSuccessObject3 (data) {
        $("#page-wrapper").html(data);
    }

    function func() {
        $.ajax ({
            url: "ajax/project2.php",
            dataType: "html",
            beforeSend: funcBeforeObject3,
            success: funcSuccessObject3
        });
      }
      
      setTimeout(func, 2500);
    </script>
';
exit;

}
//Обработчик кнопки загрузки КП
if(isset($_POST['uploadCommerc']))
{   
    $statuscomerc="";
    if(strlen($_POST['filename'])<1) 
    {
        $status= '<div id="hide'.$year.'" class="alert alert-danger">Не указано имя файла!</div>';
    }elseif(strlen($_FILES['file']['tmp_name'])<1){
        $status= '<div id="hide'.$year.'" class="alert alert-danger">Не выбран файл!</div>';
    }else{
        if(isset($_FILES) && $_FILES['file']['error'] == 0)
        {   
            if($_FILES['file']['type']=="application/pdf")
            {   
                $directorycommerc = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Коммерческие/';
                $scandircommerc = scandir($directorycommerc);
                $checkfile=0;
                for($i=0; $i<count($scandircommerc); $i++)
                {   
                    $filetoScan=$_POST['filename'].'.pdf'; 
                    if($scandircommerc[$i]==$filetoScan)
                    {
                        $checkfile=1;
                        break;
                    }
                    else
                    {
                        $checkfile=0;
                    }

                }
                if($checkfile==0)
                {
                    $saveDir = $_SERVER['DOCUMENT_ROOT'].$_POST['saveDir'].$_POST['filename'].'.pdf';
                    move_uploaded_file($_FILES['file']['tmp_name'] , $saveDir);
                    $status= '<div id="hide'.$year.'" class="alert alert-success">Файл успешно загружен!</div>';
                }else
                {
                    $status= '<div id="hide'.$year.'" class="alert alert-danger">Файл с таким названием уже существует!</div>';
                }
            }else
            {
                $status= '<div id="hide'.$year.'" class="alert alert-danger">Неверный тип файла!</div>';
            }
        }
    }
}
//Обработчик кнопки загрузки Проекта ПДФ
if(isset($_POST['uploadProjectPdf']))
{
    $statusProjPdf="";
    if(strlen($_POST['filenameP'])<1)
    {
        $statusProjPdf= '<div id="hide'.$year.'" class="alert alert-danger">Не указано имя файла!</div>';
    }
    elseif(strlen($_FILES['fileP']['tmp_name'])<1)
    {
        $statusProjPdf= '<div id="hide'.$year.'" class="alert alert-danger">Не выбран файл!</div>';
    }
    else
    {
        if(isset($_FILES) && $_FILES['fileP']['error'] == 0)
        {   
            if($_FILES['fileP']['type']=="application/pdf")
            {   
                $directoryProjectPdf = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Проект(PDF)/';
                $scandirProjectPdf = scandir($directoryProjectPdf);
                $chekFileProjectPdf=0;
                for($i=0; $i<count($scandirProjectPdf); $i++)
                {   
                    $filetoScan=$_POST['filenameP'].'.pdf'; 
                    if($scandirProjectPdf[$i]==$filetoScan)
                    {
                        $chekFileProjectPdf=1;
                        break;
                    }
                    else
                    {
                        $chekFileProjectPdf=0;
                    }

                }
                if($chekFileProjectPdf==0)
                {
                    $saveDir = $_SERVER['DOCUMENT_ROOT'].$_POST['saveDirP'].$_POST['filenameP'].'.pdf';
                    move_uploaded_file($_FILES['fileP']['tmp_name'] , $saveDir);
                    $statusProjPdf= '<div id="hide'.$year.'" class="alert alert-success">Файл успешно загружен!</div>';
                }else
                {
                    $statusProjPdf= '<div id="hide'.$year.'" class="alert alert-danger">Файл с таким названием уже существует!</div>';
                }
            }else
            {
                $statusProjPdf= '<div id="hide'.$year.'" class="alert alert-danger">Неверный тип файла!</div>';
            }
        }
    }
}
//Обработчик кнопки загрузки Проекта DWG
if(isset($_POST['uploadProjectDwg']))
{   
    $statusProjDwg="";
    if(strlen($_POST['filenameD'])<1)
    {
        $statusProjDwg= '<div id="hide'.$year.'" class="alert alert-danger">Не указано имя файла!</div>';
    }
    elseif(strlen($_FILES['fileD']['tmp_name'])<1)
    {
        $statusProjDwg= '<div id="hide'.$year.'" class="alert alert-danger">Не выбран файл!</div>';
    }
    else
    {
        if(isset($_FILES) && $_FILES['fileD']['error'] == 0)
        {   
            if($_FILES['fileD']['type']=="image/vnd.dwg")
            {   
                $directoryProjectDwg = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Проект(DWG)/';
                $scandirProjectDwg = scandir($directoryProjectDwg);
                $chekFileProjectDwg=0;
                for($i=0; $i<count($scandirProjectDwg); $i++)
                {   
                    $filetoScan=$_POST['filenameD'].'.dwg'; 
                    if($scandirProjectDwg[$i]==$filetoScan)
                    {
                        $chekFileProjectDwg=1;
                        break;
                    }
                    else
                    {
                        $chekFileProjectDwg=0;
                    }

                }
                if($chekFileProjectDwg==0)
                {
                    $saveDir = $_SERVER['DOCUMENT_ROOT'].$_POST['saveDirD'].$_POST['filenameD'].'.dwg';
                    move_uploaded_file($_FILES['fileD']['tmp_name'] , $saveDir);
                    $statusProjDwg= '<div id="hide'.$year.'" class="alert alert-success">Файл успешно загружен!</div>';
                }else
                {
                    $statusProjDwg= '<div id="hide'.$year.'" class="alert alert-danger">Файл с таким названием уже существует!</div>';
                }
            }else
            {
                $statusProjDwg= '<div id="hide'.$year.'" class="alert alert-danger">Неверный тип файла!</div>';
            }
        }
    }
}
//Обработчик кнопки удаления КП
if(isset($_POST['deleteCommerc']))
{
    unlink($_POST['pathDelete']);
}
//Обработчик кнопки удаления ПроектаПДФ
if(isset($_POST['deleteProjectPdf']))
{
    unlink($_POST['pathDeleteProjectPdf']);
}
//Обработчик кнопки удаления ПроектаDWG
if(isset($_POST['deleteProjectDwg']))
{
    unlink($_POST['pathDeleteProjectDwg']);
}

sleep(1);



//Если нажата кнопка обновить дату - делаем апдейт в базу

if(isset($_POST['activetabDate']))
{   
    sleep(1);
    $mgDateP = $_POST['dateMgP'];
    $kgsDateP = $_POST['dateKgsP'];
    $mgDateR = $_POST['dateMgR'];
    $kgsDateR = $_POST['dateKgsR'];

    if(strlen($mgDateP)>1)
    {
        $result2 = query ("UPDATE project SET mg_date = '$mgDateP' WHERE objects_id='$id'");
    }
    if(strlen($kgsDateP)>1)
    {
        $result2 = query ("UPDATE project SET kgs_date = '$kgsDateP' WHERE objects_id='$id'");
    }
    if(strlen($mgDateR)>1)
    {
        $result2 = query ("UPDATE work SET mg_date = '$mgDateR' WHERE objects_id='$id'");
    }
    if(strlen($kgsDateR)>1)
    {
        $result2 = query ("UPDATE work SET kgs_date = '$kgsDateR' WHERE objects_id='$id'");
    }

}
if(isset($_POST['activetabUnits']))
{       
    if($_POST['comId']!=NULL)
        $com_id=$_POST['comId'];
    {
        $result2 = query ("UPDATE object SET com_id = '$com_id' WHERE id='$id'");
    }
    if($_POST['vacId']!=NULL)
        $vak_id=$_POST['vacId'];
    {
        $result2 = query ("UPDATE object SET vak_id = '$vak_id' WHERE id='$id'");
    }
    if($_POST['kgsId']!=NULL)
        $kgs_id=$_POST['kgsId'];
    {
        $result2 = query ("UPDATE object SET kgs_id = '$kgs_id' WHERE id='$id'");
    }
}

$resob = query("SELECT id, com_name FROM `com`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectCom = '<select name="idob"  class="form-control input-sm" id="comSelect'.$year.'">';
        $selectCom.= '<option value=""></option>'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectCom.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['com_name'].'">'.$row['com_name'].'</option>';
        } 
        $selectCom.='</select>';
    }
$resob = query("SELECT id, vak_name FROM `vak`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectVak = '<select name="idob"  class="form-control input-sm" id="vacSelect'.$year.'">'; 
        $selectVak.= '<option value=""></option>'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectVak.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['vak_name'].'">'.$row['vak_name'].'</option>';
        } 
        $selectVak.='</select>';
    }
$resob = query("SELECT id, kgs_name FROM `kgs`");
if(!$resob) exit("Ошибка запроса: ".mysqli_error());
    if(mysqli_num_rows($resob)>0){ 
        $selectKgs = '<select name="idob"  class="form-control input-sm" id="kgsSelect'.$year.'">'; 
        $selectKgs.= '<option value=""></option>'; 
        while($row = mysqli_fetch_assoc($resob)){ 
            $selectKgs.= '<option value='.$row['id'].' data-id="'.$row['id'].'" data-name="'.$row['kgs_name'].'">'.$row['kgs_name'].'</option>';
        } 
        $selectKgs.='</select>';
    }

$objects = array();
$result2 = query("SELECT * FROM object WHERE id=".$_POST['id']);

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

echo'
<div class="showon">
<div class="row">
    <div class="col-lg-8">
        <br>
        <h2>'.$_POST['name'].'</h2><br>';
        if(isset($_POST['activetabDate'])){
            echo '<div id="hide'.$year.'" class="alert alert-success">
            Даты обновлены.
          </div>';
        }
        if(isset($_POST['activetabUnits'])){
            echo '<div id="hide'.$year.'" class="alert alert-success">
            Оборудование изменено.
          </div>';
        }
        if(isset($_POST['uploadCommerc']))
        {
            echo $status;
        }
        if(isset($_POST['uploadProjectPdf']))
        {
            echo $statusProjPdf;
        }
        if(isset($_POST['uploadProjectDwg']))
        {
            echo $statusProjDwg;
        }
        if(isset($_POST['deleteCommerc']))
        {
            echo '<div id="hide'.$year.'" class="alert alert-warning">
            Файл удален
          </div>';
        }
        if(isset($_POST['deleteProjectPdf']))
        {
            echo '<div id="hide'.$year.'" class="alert alert-warning">
            Файл удален
          </div>';
        }
        if(isset($_POST['deleteProjectDwg']))
        {
            echo '<div id="hide'.$year.'" class="alert alert-warning">
            Файл удален
          </div>';
        }
    echo'</div>
    <div class="col-lg-4">
    <br>
    <span type="submit" id="delObj" class="btn btn-danger">Удалить объект</span>
    </div>
</div>
<ul class="nav nav-tabs">';

    if(isset($_POST['activetabDate']))
    {
        echo '<li  class="active"><a data-toggle="tab" href="#date'.$year.'" aria-expanded="true">Сроки сдачи</a></li>';
    }else{
        echo '<li><a data-toggle="tab" href="#date'.$year.'">Сроки сдачи</a></li>';
    }
    if(isset($_POST['activetabUnits']))
    {
        echo '<li  class="active"><a data-toggle="tab" href="#units'.$year.'" aria-expanded="true">Оборудование</a></li>';
    }else{
        echo '<li><a data-toggle="tab" href="#units'.$year.'">Оборудование</a></li>';
    }
    if(isset($_POST['deleteCommerc']) || isset($_POST['uploadCommerc']))
    {
        echo '<li class="active"><a data-toggle="tab" href="#commmerc'.$year.'" aria-expanded="true">Коммерческие предложения</a></li>';
    }else{
        echo '<li><a data-toggle="tab" href="#commmerc'.$year.'">Коммерческие предложения</a></li>';
    }
    if(isset($_POST['deleteProjectPdf']) || isset($_POST['uploadProjectPdf']))
    {
        echo '<li class="active"><a data-toggle="tab" href="#pdf'.$year.'" aria-expanded="true">Проект(PDF)</a></li>';
    }else{
        echo '<li><a data-toggle="tab" href="#pdf'.$year.'">Проект(PDF)</a></li>';
    }
    if(isset($_POST['deleteProjectDwg']) || isset($_POST['uploadProjectDwg']))
    {
        echo '<li class="active"><a data-toggle="tab" href="#dwg'.$year.'" aria-expanded="true">Проект(DWG)</a></li>';
    }else{
        echo '<li><a data-toggle="tab" href="#dwg'.$year.'">Проект(DWG)</a></li>';
    }
echo '</ul>

<div class="tab-content">';
    if(isset($_POST['activetabDate'])){
        echo '  <div id="date'.$year.'" class="tab-pane fade active in">  ';
    }else{
        echo '  <div id="date'.$year.'" class="tab-pane fade">  ';
    }
        echo'<br>
        <form method="POST" action="#" id="createexp">
            <div class="form-group">
                <label for="compsel">Сроки Стадии Проект</label>
                <br>
                <label for="compsel">Сдача МГ</label>
                <input type="date" placeholder="дата2" name="calendar" id="mgP" value="'.$objects[0]['dataP'][0]['mg_date'].'">
                <br>
                <br>
                <label for="compsel">Сдача КГС</label>
                <input type="date" placeholder="дата2" name="calendar" id="kgsP" value="'.$objects[0]['dataP'][0]['kgs_date'].'"> 
            </div>
            <div class="form-group">
                <label for="compsel">Сроки Стадии Рабочка</label>
                <br>
                <label for="compsel">Сдача МГ</label>
                <input type="date" placeholder="дата2" name="calendar" id="mgR" value="'.$objects[0]['dataR'][0]['mg_date'].'">
                <br>
                <br>
                <label for="compsel">Сдача КГС</label>
                <input type="date" placeholder="дата2" name="calendar" id="kgsR" value="'.$objects[0]['dataR'][0]['kgs_date'].'">
            </div>
                <input type="submit" class="btn btn-success" id="changeDate" value="Обновить даты"/>
        </form>
    </div>';
    if(isset($_POST['activetabUnits'])){
        echo '<div id="units'.$year.'" class="tab-pane fade  active in">';
    }else{
        echo '<div id="units'.$year.'" class="tab-pane fade">';
    }
    echo'
    <br>
        <form method="POST" action="#" id="createexp">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="compsel">Компрессор в объекте</label>
                        <input name="name" type="text" value="'.$objects[0]['com'][0]['com_name'].'" placeholder="Название объекта" id="name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="compsel">Выберите замену:</label>
                     '.$selectCom.'
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="compsel">Вак. станция в объекте</label>
                    <input name="name" type="text" value="'.$objects[0]['vak'][0]['vak_name'].'" placeholder="Название объекта" id="name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                <label for="compsel">Выберите замену:</label>
                '.$selectVak.'
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <label for="compsel">КГС в объекте</label>
                    <input name="name" type="text" value="'.$objects[0]['kgs'][0]['kgs_name'].'" placeholder="Название объекта" id="name" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                <label for="compsel">Выберите замену:</label>
                '.$selectKgs.'
                </div>
                <br>
            </div>
            <input type="hidden" id="comId'.$year.'"  value="">
            <input type="hidden" id="vacId'.$year.'"  value="">
            <input type="hidden" id="kgsId'.$year.'"  value="">
             <input type="submit" disabled class="btn btn-success" id="changeUnits'.$year.'" value="Сменить оборудование"/>
        </form>
    </div>';

    if(isset($_POST['deleteCommerc']) || isset($_POST['uploadCommerc'])){
        echo '<div id="commmerc'.$year.'" class="tab-pane fade  active in">';
    }else{
        echo '<div id="commmerc'.$year.'" class="tab-pane fade">';
    }
    echo'
    <br>
    <form id="MyForm" enctype="multipart/form-data" type="POST" class="form-horizontal" >
    
    ';
        $directorycommerc = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Коммерческие/';
        $dirforscript ='/files/'.$_POST['name'].'/Коммерческие/';
        $scandircommerc = scandir($directorycommerc);
        $pp=1;
        $btnComDelete=1;
        for($i=0; $i<count($scandircommerc); $i++)
        {   
         
            if($scandircommerc[$i] !='.' && $scandircommerc[$i] !='..' && strlen($scandircommerc[$i])>1)
            {   

                $url = '/files/'.$_POST['name'].'/Коммерческие/'.$scandircommerc[$i];
                $urlTodel = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Коммерческие/'.$scandircommerc[$i];
                echo'
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">'.$pp.'. '.$scandircommerc[$i].'</label>
                    <div class="col-sm-8">
                        <span><img class="pdficon" src="../image/pdf.png"></span>
                        <a href="'.$url.'" target="_tab"><span type="submit" id="submit" class="btn btn-success">Просмотр</span></a>
                        <span type="submit" id="delete'.$year.''.$i.'" class="btn btn-danger">Удалить</span>
                        <input type="hidden" id="pathDelete'.$year.''.$i.'"  value="'.$urlTodel.'">
                    </div>
                </div>
                ';
                $pp++;
            }
        }
    echo'      
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label ten">Загрузите новый файл</label>
            <div class="col-sm-8 eighteen">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input type="text" name="filename" id="filename'.$year.'" placeholder="Введите имя файла" required />     
                <input name="userfile" id="fileupload'.$year.'" type="file" />
                
            </div>
        </div>
        <input type="submit" class="btn btn-success" id="btnComUpload'.$year.'" value=Загрузить>
        </form>
    </div>';

    if(isset($_POST['deleteProjectPdf']) || isset($_POST['uploadProjectPdf'])){
        echo '<div id="pdf'.$year.'" class="tab-pane fade  active in">';
    }else{
        echo '<div id="pdf'.$year.'" class="tab-pane fade">';
    }
    echo' 
    <br>
    <form id="projectPdf" enctype="multipart/form-data" type="POST" class="form-horizontal" >
    
    ';
        $directoryProjectPdf = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Проект(PDF)/';
        $dirForScriptProjPDF ='/files/'.$_POST['name'].'/Проект(PDF)/';
        $scandirProjectPdf = scandir($directoryProjectPdf);
        $ppProjectPdf=1;
        $btnProjPdfDelete=1;
        for($i=0; $i<count($scandirProjectPdf); $i++)
        {   
         
            if($scandirProjectPdf[$i] !='.' && $scandirProjectPdf[$i] !='..' && strlen($scandirProjectPdf[$i])>1)
            {   

                $urlProjectPdf = '/files/'.$_POST['name'].'/Проект(PDF)/'.$scandirProjectPdf[$i];
                $urlTodelProjectPdf = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Проект(PDF)/'.$scandirProjectPdf[$i];
                echo'
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">'.$ppProjectPdf.'. '.$scandirProjectPdf[$i].'</label>
                    <div class="col-sm-8">
                        <span><img class="pdficon" src="../image/pdf.png"></span>
                        <a href="'.$urlProjectPdf.'" target="_tab"><span type="submit" id="submit" class="btn btn-success">Просмотр</span></a>
                        <span type="submit" id="deleteProjectPdf'.$year.''.$i.'" class="btn btn-danger">Удалить</span>
                        <input type="hidden" id="pathDeleteProjectPdf'.$year.''.$i.'"  value="'.$urlTodelProjectPdf.'">
                    </div>
                </div>
                ';
                $ppProjectPdf++;
            }
        }
    echo'      
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label ten">Загрузите новый файл</label>
            <div class="col-sm-8 eighteen">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input type="text" name="filenameProjectPdf" id="filenameProjectPdf'.$year.'" placeholder="Введите имя файла" required />     
                <input name="userfile" id="fileuploadProjectPdf'.$year.'" type="file" />
                
            </div>
        </div>
        <input type="submit" class="btn btn-success" id="btnProjectPdfUpload'.$year.'" value=Загрузить>
        </form>
    </div>';
    if(isset($_POST['deleteProjectDwg']) || isset($_POST['uploadProjectDwg'])){
        echo '<div id="dwg'.$year.'" class="tab-pane fade  active in">';
    }else{
        echo '<div id="dwg'.$year.'" class="tab-pane fade">';
    }
    echo' 
    <br>
    <form id="projectDwg" enctype="multipart/form-data" type="POST" class="form-horizontal" >
    
    ';
        $directoryProjectDwg = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Проект(DWG)/';
        $dirForScriptProjDwg ='/files/'.$_POST['name'].'/Проект(DWG)/';
        $scandirProjectDwg = scandir($directoryProjectDwg);
        $ppProjectDwg=1;
        $btnProjDwgDelete=1;
        for($i=0; $i<count($scandirProjectDwg); $i++)
        {   
         
            if($scandirProjectDwg[$i] !='.' && $scandirProjectDwg[$i] !='..' && strlen($scandirProjectDwg[$i])>1)
            {   

                $urlProjectDwg = '/files/'.$_POST['name'].'/Проект(DWG)/'.$scandirProjectDwg[$i];
                $urlTodelProjectDwg = $_SERVER['DOCUMENT_ROOT'].'/files/'.$_POST['name'].'/Проект(DWG)/'.$scandirProjectDwg[$i];
                echo'
                <div class="form-group">
                <label for="name" class="col-sm-2 control-label">'.$ppProjectDwg.'. '.$scandirProjectDwg[$i].'</label>
                    <div class="col-sm-8">
                        <span><img class="pdficon" src="../image/dwg.png"></span>
                        <a href="'.$urlProjectDwg.'" download><span type="submit" id="submit" class="btn btn-success">Скачать</span></a>
                        <span type="submit" id="btnDeleteProjectDwg'.$year.''.$i.'" class="btn btn-danger">Удалить</span>
                        <input type="hidden" id="pathDeleteProjectDwg'.$year.''.$i.'"  value="'.$urlTodelProjectDwg.'">
                    </div>
                </div>
                ';
                $ppProjectDwg++;
            }
        }
    echo'      
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label ten">Загрузите новый файл</label>
            <div class="col-sm-8 eighteen">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input type="text" name="filenameProjectDwg" id="filenameProjectDwg'.$year.'" placeholder="Введите имя файла" required />     
                <input name="userfile" id="fileuploadProjectDwg'.$year.'" type="file" />
                
            </div>
        </div>
        <input type="submit" class="btn btn-success" id="btnProjectDwgUpload'.$year.'" value=Загрузить>
        </form>
    </div>
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

<script>

<?php
if(isset($year)){
    echo '
    var timePeriodInMs = 2000;

setTimeout(function() 
{ 
    document.getElementById("hide'.$year.'").style.display = "none"; 
}, 
timePeriodInMs);
    ';
}

?>



function funcBeforeObject () {
    $("#objecthere<?php echo $_POST['year']?>").text ("Ожидаю данные...");
}

function funcSuccessObject (data) {
    $("#objecthere<?php echo $_POST['year']?>").html(data);
}

$(document).ready(function(){

    $('#yearSelect').change(function () {
        $("#yearId").val($(this).find(':selected').data('id'));
    });
    <?php
    echo'
    $("#comSelect'.$year.'").change(function () {
        $("#comId'.$year.'").val($(this).find(":selected").data("id"));
         document.getElementById("changeUnits'.$year.'").disabled = false;
    });

    $("#vacSelect'.$year.'").change(function () {
        $("#vacId'.$year.'").val($(this).find(":selected").data("id"));
        document.getElementById("changeUnits'.$year.'").disabled = false;
    });
    $("#kgsSelect'.$year.'").change(function () {
        $("#kgsId'.$year.'").val($(this).find(":selected").data("id"));
        document.getElementById("changeUnits'.$year.'").disabled = false;
    });
    ';
    ?>

    //Перемещение объекта в корзину
    $("#delObj").bind("click", function(){ 
        var objects_id = "<?php echo $_POST['id']?>";
        var delObj = 1;
        <?php
        echo'
        var id = "'.$id.'";
        var name = "'.$name.'";
        var year = "'.$year.'";
        ';
        ?>
        $.ajax ({
            type:"POST",
            url: "ajax/projectP/object.php",
            data: {
                   "id":id,
                   "name":name,
                   "objects_id":objects_id,
                   "year":year,
                   "delObj":delObj
                     },
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    //смена дат
    $("#changeDate").bind("click", function(){ 
        var objects_id = "<?php echo $_POST['id']?>";
        var dateMgP = document.getElementById("mgP").value;
        var dateKgsP = document.getElementById("kgsP").value;
        var dateMgR = document.getElementById("mgR").value;
        var dateKgsR = document.getElementById("kgsR").value;
        var activetabDate = 1;
        <?php
        echo'
        var id = "'.$id.'";
        var name = "'.$name.'";
        var year = "'.$year.'";
        ';
        ?>
        $.ajax ({
            type:"POST",
            url: "ajax/projectP/object.php",
            data: {
                   "id":id,
                   "name":name,
                   "objects_id":objects_id,
                   "year":year,
                   "dateMgP":dateMgP,
                   "dateKgsP":dateKgsP,
                   "dateMgR":dateMgR,
                   "dateKgsR":dateKgsR,
                   "activetabDate":activetabDate
                     },
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    //смена оборудования
    <?php echo '$("#changeUnits'.$year.'").bind("click", function(){'; ?> 
        var objects_id = "<?php echo $_POST['id']?>";
        <?php echo 'var comId'.$year.' = document.getElementById("comId'.$year.'").value;';?>
        <?php echo 'var vacId'.$year.' = document.getElementById("vacId'.$year.'").value;';?>
        <?php echo 'var kgsId'.$year.' = document.getElementById("kgsId'.$year.'").value;';?>
        // alert(comId);
        // var vacId = document.getElementById("vacId").value;
        // var kgsId = document.getElementById("kgsId").value;
        var activetabUnits = 1;
        <?php
        echo'
        var id = "'.$id.'";
        var name = "'.$name.'";
        var year = "'.$year.'";
        ';
        ?>
        $.ajax ({
            type:"POST",
            url: "ajax/projectP/object.php",
         <?php echo'   data: {
                   "id":id,
                   "name":name,
                   "objects_id":objects_id,
                   "year":year,
                   "comId":comId'.$year.',
                   "vacId":vacId'.$year.',
                   "kgsId":kgsId'.$year.',
                   "activetabUnits":activetabUnits
                     },
            ';?>
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });

    //Кнопка загрузки КП
    <?php echo'
    $("#btnComUpload'.$year.'").bind("click", function(){ 
        // var file'.$year.' = $("#filename'.$year.'")[0].files[0];
        var fd = new FormData;
        var file'.$year.' = $("#fileupload'.$year.'").prop("files")[0];

        var objects_id = "'.$_POST['id'].'";
        var filename'.$year.' = document.getElementById("filename'.$year.'").value;
        var saveDir = "'.$dirforscript.'";
        var uploadCommerc = 1;
        var id = "'.$id.'";
        var name = "'.$name.'";
        var year = "'.$year.'";
    
        fd.append("id",id);
        fd.append("name",name);
        fd.append("objects_id",objects_id);
        fd.append("year",year);
        fd.append("filename",filename'.$year.');
        fd.append("saveDir",saveDir);
        fd.append("uploadCommerc",uploadCommerc);
        fd.append("file",file'.$year.');
        $.ajax ({
            type:"POST",
            url: "ajax/projectP/object.php",
            processData: false,
            contentType: false,
            cache:false,
            data: fd,
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    ';
    ?>
    //Кнопка загрузки Проекта ПДФ
    <?php 
    echo'
    $("#btnProjectPdfUpload'.$year.'").bind("click", function(){ 
        // var file = $("#filename")[0].files[0];
        var fd1 = new FormData;
        var fileP'.$year.' = $("#fileuploadProjectPdf'.$year.'").prop("files")[0];

        var objects_id = "'.$_POST['id'].'";
        var filenameP'.$year.' = document.getElementById("filenameProjectPdf'.$year.'").value;
        var saveDirP = "'.$dirForScriptProjPDF.'";
        var uploadProjectPdf = 1;
        var id = "'.$id.'";
        var name = "'.$name.'";
        var year = "'.$year.'";
        fd1.append("id",id);
        fd1.append("name",name);
        fd1.append("objects_id",objects_id);
        fd1.append("year",year);
        fd1.append("filenameP",filenameP'.$year.');
        fd1.append("saveDirP",saveDirP);
        fd1.append("uploadProjectPdf",uploadProjectPdf);
        fd1.append("fileP",fileP'.$year.');
        $.ajax ({
            type:"POST",
            url: "ajax/projectP/object.php",
            processData: false,
            contentType: false,
            cache:false,
            data: fd1,
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    ';
    ?>
    //Кнопка загрузки Проекта DWG
    <?php
    echo'
    $("#btnProjectDwgUpload'.$year.'").bind("click", function(){ 
        // var file = $("#filename")[0].files[0];
        var fd2 = new FormData;
        var fileD'.$year.' = $("#fileuploadProjectDwg'.$year.'").prop("files")[0];

        var objects_id = "'.$_POST['id'].'";
        var filenameD'.$year.' = document.getElementById("filenameProjectDwg'.$year.'").value;
        var saveDirD = "'.$dirForScriptProjDwg.'";
        var uploadProjectDwg = 1;
        var id = "'.$id.'";
        var name = "'.$name.'";
        var year = "'.$year.'";
        fd2.append("id",id);
        fd2.append("name",name);
        fd2.append("objects_id",objects_id);
        fd2.append("year",year);
        fd2.append("filenameD",filenameD'.$year.');
        fd2.append("saveDirD",saveDirD);
        fd2.append("uploadProjectDwg",uploadProjectDwg);
        fd2.append("fileD",fileD'.$year.');
        $.ajax ({
            type:"POST",
            url: "ajax/projectP/object.php",
            processData: false,
            contentType: false,
            cache:false,
            data: fd2,
            //dataType: "html",
            beforeSend: funcBeforeObject,
            success: funcSuccessObject
        });
    });
    ';
    ?>
    //КНОПКИ УДАЛЕНИЯ
    <?php
    //Кнопка удаления КП
        for($i=0; $i<count($scandircommerc); $i++)
        {   
            
            if($scandircommerc[$i] !='.' && $scandircommerc[$i] !='..' && strlen($scandircommerc[$i])>1)
            {   
                echo'
                var pathDelete'.$year.''.$i.' = document.getElementById("pathDelete'.$year.''.$i.'").value;

                $("#delete'.$year.''.$i.'").bind("click", function(){ 
                        var objects_id = "';echo $_POST['id'];echo'";
                        var deleteCommerc = 1;';
                        echo'
                        var id = "'.$id.'";
                        var name = "'.$name.'";
                        var year = "'.$year.'";
                        ';
                        echo'
                        $.ajax ({
                            type:"POST",
                            url: "ajax/projectP/object.php",
                            data: {
                                "id":id,
                                "name":name,
                                "objects_id":objects_id,
                                "year":year,
                                "pathDelete":pathDelete'.$year.''.$i.',
                                "deleteCommerc":deleteCommerc
                                    },
                            //dataType: "html",
                            beforeSend: funcBeforeObject,
                            success: funcSuccessObject
                        });
                    });
                ';
            }
        }
    //Кнопка удаления Проекта ПДФ
        for($i=0; $i<count($scandirProjectPdf); $i++)
        {   
            
            if($scandirProjectPdf[$i] !='.' && $scandirProjectPdf[$i] !='..' && strlen($scandirProjectPdf[$i])>1)
            {   
                echo'
                var pathDeleteProjectPdf'.$year.''.$i.' = document.getElementById("pathDeleteProjectPdf'.$year.''.$i.'").value;

                $("#deleteProjectPdf'.$year.''.$i.'").bind("click", function(){ 
                        var objects_id = "';echo $_POST['id'];echo'";
                        var deleteProjectPdf = 1;';
                        echo'
                        var id = "'.$id.'";
                        var name = "'.$name.'";
                        var year = "'.$year.'";
                        ';
                        echo'
                        $.ajax ({
                            type:"POST",
                            url: "ajax/projectP/object.php",
                            data: {
                                "id":id,
                                "name":name,
                                "objects_id":objects_id,
                                "year":year,
                                "pathDeleteProjectPdf":pathDeleteProjectPdf'.$year.''.$i.',
                                "deleteProjectPdf":deleteProjectPdf
                                    },
                            //dataType: "html",
                            beforeSend: funcBeforeObject,
                            success: funcSuccessObject
                        });
                    });
                ';
            }
        }
    //Кнопка удаления Проекта DWG
        for($i=0; $i<count($scandirProjectDwg); $i++)
        {   
            
            if($scandirProjectDwg[$i] !='.' && $scandirProjectDwg[$i] !='..' && strlen($scandirProjectDwg[$i])>1)
            {   
                echo'
                var pathDeleteProjectDwg'.$year.''.$i.' = document.getElementById("pathDeleteProjectDwg'.$year.''.$i.'").value;

                $("#btnDeleteProjectDwg'.$year.''.$i.'").bind("click", function(){ 
                        var objects_id = "';echo $_POST['id'];echo'";
                        var deleteProjectDwg = 1;';
                        echo'
                        var id = "'.$id.'";
                        var name = "'.$name.'";
                        var year = "'.$year.'";
                        ';
                        echo'
                        $.ajax ({
                            type:"POST",
                            url: "ajax/projectP/object.php",
                            data: {
                                "id":id,
                                "name":name,
                                "objects_id":objects_id,
                                "year":year,
                                "pathDeleteProjectDwg":pathDeleteProjectDwg'.$year.''.$i.',
                                "deleteProjectDwg":deleteProjectDwg
                                    },
                            //dataType: "html",
                            beforeSend: funcBeforeObject,
                            success: funcSuccessObject
                        });
                    });
                ';
            }
        }
    ?>
    
});
</script>