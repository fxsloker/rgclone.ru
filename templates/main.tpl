<?php include('header.tpl'); ?>

<div id="middle-form">
	<center>
		<form enctype="multipart/form-data" action="/" method="post" id="upload_form">
			<input type="file" size="50" name="file" id="choose">
			<input type="submit" value="Отправить" name="commit" id="commit" class="btn upload">
		</form>
	</center>
</div>

<?php include('footer.tpl'); ?>
