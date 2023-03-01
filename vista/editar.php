<?php require "layout/header.php" ?>
<h1 style="text-align: center;">NUEVO</h1>
<hr>
<form action="">
	<?php foreach ($dato as $value): ?>
		<?php  foreach ($value as $v ): ?>
		<label for="">NOMBRE</label> <br>
		<input type="text" name="nombre" value="<?php echo $v['nombre'] ?>"><br>
		<label for="">PRECIO</label><br>
		<input type="text" name="precio" value="<?php echo $v['precio'] ?>"><br>	
		<input type="hidden" name="id" value="<?php echo $v['id'] ?>">
		<input type="submit" name="btn"  style="text-align: center;" value="ACTUALIZAR" >
		<?php endforeach ?>
	<?php endforeach ?>
	<input type="hidden" name="m" value="update">
</form>
<?php require "layout/footer.php" ?> 