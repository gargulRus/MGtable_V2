<?php
    setcookie("login", "");

    echo '
    <link rel="stylesheet" href="/plugins/fontawesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="stylesheet" href="../css/main.css">
    <div class="showon">
    <div class="formpositionhello  form-horizontal">
    <h1>До свидания! <i class="fa fa-spinner fa-spin" style="font-size:48px"></i></h1>
    </div>
    </div>
    ';
echo "
<script type='text/javascript'>
function ToAuth() {
    location='../index.php';
    }
    setTimeout('ToAuth()', 2000);
</script>
";

?>
