<!DOCTYPE html>
<html lang="ru">
<head>
	<script src="http://localhost/libs/ckeditor.js"></script>
	<script src="http://localhost/libs/adapters/jquery.js"></script>
	<script src="http://localhost/libs/styles.js"></script>
	<script src="http://localhost/libs/ru.js"></script>

 </head>
<body>
<div class="page" style="min-height: 850">
	
<form id="writeText" method="post" action="">
	<div id="headerWrite">
	Название<br><input type="text" name="titleText" placeholder="Введите название статьи/гайда/объявления">
</div>
	<textarea  name="editor1">
		
	</textarea>
	<script>
		CKEDITOR.replace('editor1');
		function chg(el){
			var displaying = (el.options[el.selectedIndex].innerHTML);
   			if(displaying== 'Объявление'){
   	$('#selectType').fadeIn(200);

   }
   else
   	$('#selectType').fadeOut(200);
}
	</script>
	<select form="writeText" selected value="Выберите тип публикации" id="select" onchange="chg(this)" name = "typeOfPublication">
		<option disabled selected value="Выберите тип публикации">Выберите тип публикации</option>
		<option  value="1">Объявление</option>
		<option value="2">Гайд</option>
		<option value="3">Статья</option>
		<option value="4">Анекдот</option>
	</select>
	<select form="writeText" selected value="Выберите тип товара" style="display: none; border: 2px solid #757575;" id="selectType" name = "type">
		<option disabled selected value="Выберите тип товара">Выберите тип товара</option>
		<option  value="coil">Намотка</option>
		<option value="plate">плата</option>
		<option value="mech">Мехмод</option>
		<option value="drip">Дрипка</option>
		<option value="back">Бак</option>
		<option value="rdtsomething" name="rdtsomething">Дрипкобак</option>
		<option value="ego">Егошка</option>
		<option value="water">Жижа</option>
		<option value="other">Не указывать</option>

	</select>
	<br><input type="submit" name="writeThis" class="submitWriting" value="Опубликовать">
</form>
</div>
<?php
include_once "libs/rb.php";//подключаем rb.php
require_once "setting.php";//подключаем файл с настройками setting.php
require_once "db.php";// коннект ту датабейз 
$data=$_POST;
require_once 'parts/PostAdvertSCR.php';
if(isset($data['writeThis']))
{
  verifyPostAdvert($data);
}
?>
</body>
</html>
