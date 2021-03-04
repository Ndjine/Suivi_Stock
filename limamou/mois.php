<!DOCTYPE html>
<html>
<head>
	<title>LES 12 MOIS DE L'ANNEE</title>
</head>
<body>
<?php 
                $mois = array(
                	array('Numero','Libelle','Nombre du jour'),
                    array('1','Janvier','31'),
                    array('2','Fevrier','28-29'),
                    array('3','Mars','31'),
                	array('4','Avril','30'),
                    array('5','Mai','31'),
                    array('6','Juin','30'),
                    array('7','Juillet','31'),
                    array('8','Aout','31'),
                    array('9','Septembre','30'),
                    array('10','Octobre','31'),
                    array('11','Novembre','30'),
                    array('12','Decembre','31'),); ?>


                    <table width="50%" align="center" border="3">
                    	<thead style="background-color: #00B ;
                                       text-transform: uppercase; ">
                    		<th><?php echo $mois[0][0]; ?></th>
                    		<th><?php echo $mois[0][1]; ?></th>
                    		<th><?php echo $mois[0][2]; ?></th>
                    	</thead>
                    	<tbody style="text-align: center;
                                     text-transform: uppercase;"   >
                    		<tr style="background-color: #C00131 ">
                    			<td><?php echo $mois[1][0]; ?></td>
                    			<td><?php echo $mois[1][1]; ?></td>
                    			<td><?php echo $mois[1][2]; ?></td>
                    		</tr>
                    		<tr style="background-color:  #00C229">
                    			<td><?php echo $mois[2][0]; ?></td>
                    			<td><?php echo $mois[2][1]; ?></td>
                    			<td><?php echo $mois[2][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #654331">
                    			<td><?php echo $mois[3][0]; ?></td>
                    			<td><?php echo $mois[3][1]; ?></td>
                    			<td><?php echo $mois[3][2]; ?></td>
                    		</tr>
                    		<tr  style="background-color: #C65430">
                    			<td><?php echo $mois[4][0]; ?></td>
                    			<td><?php echo $mois[4][1]; ?></td>
                    			<td><?php echo $mois[4][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #500031 ">
                    			<td><?php echo $mois[5][0]; ?></td>
                    			<td><?php echo $mois[5][1]; ?></td>
                    			<td><?php echo $mois[5][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #666630 " >
                    			<td><?php echo $mois[6][0]; ?></td>
                    			<td><?php echo $mois[6][1]; ?></td>
                    			<td><?php echo $mois[6][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #317700" >
                    			<td><?php echo $mois[7][0]; ?></td>
                    			<td><?php echo $mois[7][1]; ?></td>
                    			<td><?php echo $mois[7][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #800031 " >
                    			<td><?php echo $mois[8][0]; ?></td>
                    			<td><?php echo $mois[8][1]; ?></td>
                    			<td><?php echo $mois[8][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #909030 " >
                    			<td><?php echo $mois[9][0]; ?></td>
                    			<td><?php echo $mois[9][1]; ?></td>
                    			<td><?php echo $mois[9][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #103101 " >
                    			<td><?php echo $mois[10][0]; ?></td>
                    			<td><?php echo $mois[10][1]; ?></td>
                    			<td><?php echo $mois[10][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #C01130" >
                    			<td><?php echo $mois[11][0]; ?></td>
                    			<td><?php echo $mois[11][1]; ?></td>
                    			<td><?php echo $mois[11][2]; ?></td>
                    		</tr>
                    		<tr style="background-color: #012C31 " >
                    			<td><?php echo $mois[12][0]; ?></td>
                    			<td><?php echo $mois[12][1]; ?></td>
                    			<td><?php echo $mois[12][2]; ?></td>
                    		</tr>
                    	</tbody>
                    </table>
</body>
</html>
