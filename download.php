<?php


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("файлы из csv");
?><!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<div class="container content">
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="file.php">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Название файла</label>
            <div class="col-sm-8">
                <input type="text" id="name" class="form-control" name="name" placeholder="Название файла">
            </div>
        </div>
        <div class="form-group">
            <label for="file" class="col-sm-2 control-label">Файл</label>
            <div class="col-sm-8">
                <input type="file" name="file" id="file">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" id="submit" class="btn btn-primary">Отправить</button>
                <div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>