<table width="100%" style="text-align:center;"> 
	<tr style='background:#C3C3C3; height:100px;'>
		<td width="70%" style="font-size:300%; text-align:left; padding-left:100px;"><b><i><a href="index.php" style='text-decoration:none; color:Black;'>Az Predictive</a></i></b></td>
		<td width="15%" style="font-size:150%;"> <a href="add.php" style='text-decoration:none;'>Ajouter</a> </td>
		<td width="15%" style="font-size:150%;"> </td>
	</tr> 
	<tr>
		<td colspan="3" style='text-align:center;padding-top:30px;padding-bottom:20px;'>

			<form methode="GET">



				<?php
if (isset($_GET['motor_name'])){
$dbc=mysqli_connect("localhost","root","root","Predictive27");

	
	$motor_name=$_GET['motor_name'];
	$id_iot=$_GET['id_iot'];
	$model=$_GET['model'];
	$puissance=$_GET['puissance'];
	$tr_min=$_GET['tr_min'];
	


	$hall_val_min=$_GET['hall_val_min'];
	$hall_val_max=$_GET['hall_val_max'];

	$motor_temp_min=$_GET['motor_temp_min'];
	$motor_temp_max=$_GET['motor_temp_max'];


	$ambiant_temp_min=$_GET['ambiant_temp_min'];
	$ambiant_temp_max=$_GET['ambiant_temp_max'];
	
	$ambiant_h_min=$_GET['ambiant_h_min'];
	$ambiant_h_max=$_GET['ambiant_h_max'];
	


	$motor_temp_min=$_GET['motor_temp_min'];
	$motor_temp_max=$_GET['motor_temp_max'];

	$acx_min=$_GET['acx_min'];
	$acx_max=$_GET['acx_max'];

	$acy_min=$_GET['acy_min'];
	$acy_max=$_GET['acy_max'];
	
	$acz_min=$_GET['acz_min'];
	$acz_max=$_GET['acz_max'];
	
	$gyx_min=$_GET['gyx_min'];
	$gyx_max=$_GET['gyx_max'];
	
	$gyy_min=$_GET['gyy_min'];
	$gyy_max=$_GET['gyy_max'];
	
	$gyz_min=$_GET['gyz_min'];
	$gyz_max=$_GET['gyz_max'];
	

	$tmp_min=$_GET['tmp_min'];
	$tmp_max=$_GET['tmp_max'];


	

				

	if(mysqli_query($dbc,"INSERT INTO devices values(null,'$id_iot','$motor_name','$model','$puissance',
		'$tr_min','$hall_val_min','$hall_val_max','$motor_temp_min','$motor_temp_max',
		'$ambiant_temp_min','$ambiant_temp_max','$ambiant_h_min','$ambiant_h_max','$acx_min','$acx_max','$acy_min','$acy_max',
		'$acz_min','$acz_max','$tmp_min','$tmp_max','$gyx_min','$gyx_max','$gyy_min','$gyy_max','$gyz_min','$gyz_max')")){
		echo "<h1>Moteur Ajout&eacute; !</h1><br><br>";
				
	}else{
		echo "<h2>Errro ".mysqli_error($dbc)."<br><br>";
	}

}





?>

			<table width="90%" style='text-align:center'>
				<tr>
					<td width="20%" style="font-size:180%;"><b>Moteur:</b></td><td width="20%"> <input style="font-size:30px;" name="motor_name"></td>
					<td width="20%" style="font-size:180%;"><b>ID Iot:</b></td><td width="20%"> <input style="font-size:30px;" name="id_iot"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>Model:</b></td><td > <input style="font-size:30px;" name="model"></td>
					<td style="font-size:180%;"><b>Puissance:</b></td><td > <input style="font-size:30px;" name="puissance"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>trs/mn:</b></td><td > <input style="font-size:30px;" name="tr_min"></td>
					
				</tr>
				<tr>
					<td style="font-size:180%;"><b>Temp. Min:</b></td><td > <input style="font-size:30px;" name="motor_temp_min"></td>
					<td style="font-size:180%;"><b>Temp. Max:</b></td><td > <input style="font-size:30px;" name="motor_temp_max"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>Temp. Amb. Min:</b></td><td > <input style="font-size:30px;" name="ambiant_temp_min"></td>
					<td style="font-size:180%;"><b>Temp. Amb. Max:</b></td><td > <input style="font-size:30px;" name="ambiant_temp_max"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>Hall. Min:</b></td><td > <input style="font-size:30px;" name="hall_val_min"></td>
					<td style="font-size:180%;"><b>Hall. Max:</b></td><td > <input style="font-size:30px;" name="hall_val_max"></td>
				</tr>
			
				<tr>
					<td style="font-size:180%;"><b>H. Amb. Min:</b></td><td > <input style="font-size:30px;" name="ambiant_h_min"></td>
					<td style="font-size:180%;"><b>H. Amb. Max:</b></td><td > <input style="font-size:30px;" name="ambiant_h_max"></td>
				</tr>
			
				<tr>
					<td style="font-size:180%;"><b>AcX Min: </b></td><td > <input style="font-size:30px;" name="acx_min"></td>
					<td style="font-size:180%;"><b>AcX Max: </b></td><td > <input style="font-size:30px;" name="acx_max"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>AcY Min: </b></td><td > <input style="font-size:30px;" name="acy_min"></td>
					<td style="font-size:180%;"><b>AcY Max: </b></td><td > <input style="font-size:30px;" name="acy_max"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>AcZ Min: </b></td><td > <input style="font-size:30px;" name="acz_min"></td>
					<td style="font-size:180%;"><b>AcZ Max: </b></td><td > <input style="font-size:30px;" name="acz_max"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>GyX Min: </b></td><td > <input style="font-size:30px;" name="gyx_min"></td>
					<td style="font-size:180%;"><b>GyX Max: </b></td><td > <input style="font-size:30px;" name="gyx_max"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>GyY Min: </b></td><td > <input style="font-size:30px;" name="gyy_min"></td>
					<td style="font-size:180%;"><b>GyY Max: </b></td><td > <input style="font-size:30px;" name="gyy_max"></td>
				</tr>
				<tr>
					<td style="font-size:180%;"><b>GyZ Min: </b></td><td > <input style="font-size:30px;" name="gyz_min"></td>
					<td style="font-size:180%;"><b>GyZ Max: </b></td><td > <input style="font-size:30px;" name="gyz_max"></td>
				</tr><tr>
					<td style="font-size:180%;"><b>tmp Min: </b></td><td > <input style="font-size:30px;" name="tmp_min"></td>
					<td style="font-size:180%;"><b>tmp Max: </b></td><td > <input style="font-size:30px;" name="tmp_max"></td>
				</tr>
				<tr><td colspan="4"><br><br><button style='font-size:30px;'>Enregistrer</button></td></tr>
			
			
			</table>
			</form>

		</td>
	  
	</table>