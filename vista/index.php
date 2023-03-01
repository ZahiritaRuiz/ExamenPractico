<?php require "layout/header.php" ?>
<br>
<br>
<a href="index.php?m=nuevo" class="btn" style="text-align: center;" >NUEVO</a>
<br>
<br>
<table border="1">
	<tr>
		<td style="text-align: center;">ID</td>
		<td style="text-align: center;" >Nombre</td>
		<td style="text-align: center;">Precio</td>
		<td style="text-align: center;">Acción</td>
	</tr>

	    <?php 
        if (!empty($dato))
	    foreach ($dato as $key => $value)
	        foreach ($value as $va ):
	            echo "<tr><td>".$va['id']."</td><td>".$va['nombre']."</td><td>S./".$va['precio']."</td>";
	        	echo "<td><a href='index.php?m=editar&id=".$va['id']."'>ACTUALIZAR</a> <a href='index.php?m=eliminar&id=".$va['id']."'>ELIMINAR</a></td>";
	        	echo "</tr>";
	        endforeach;
	    ?>
</table>
<?php require "layout/footer.php" ?>