<?php
    require_once 'src/model/DB.php';
?>

<html>
<body>
    <select name='produit'>
        <?php
            $sql = 'SELECT nomProduit, id FROM produit ORDER BY id';
            $result = mysql_query($sql) ;
            while ( $row = mysql_fetch_array($result))
            {
        ?>
         <option value=' <?php echo $row[0] ;?>' ><?php echo $row[1] ;?>
        <?php
            }
        ?>
    </select>
<br/>
<br/>
<input type=text name=' produit' id=' produit'>

</body>
</html>

<script language=javascript>
function changeproduit() 
{ 
    produit = document.getElementById('produit').value; 
    switch (produit) 
    { 
    <?php 
        /*On recherche tous les types dans les catégories qui créerons les 'case'*/
        $sql = "SELECT DISTINCT(id) FROM produit"; 
 $result = mysql_query($sql); 
 while ( $row = mysql_fetch_array( $result ) ) 
 { 
    ?> 
    case ('<?php echo $row[0];?>'): 
    <?php 
        /*Pour chaque type on cherche tous les ingrédients associés que l'on met dans une variable*/ 
//         $valeur = "'"; 
//  $sql2 = "SELECT nomProduit FROM produit WHERE TYPE='".$row[0]."'"; 
//  $result2 = mysql_query($sql2); 
//  while ( $row2 = mysql_fetch_array($result2)) 
//  { 
//      $valeur = $valeur." ".$row2[0]; 
//  } 
//      $valeur = $valeur."'"; 
//     ?> 
//     document.getElementById('produit').value = ""; 
//     document.getElementById('produit').value = <?php// echo $valeur;?>; 
//     break; 
    <?php 
        } 
    ?> 
    } 
} 
</script> 
......... 
<select name='produit' id='produit' onchange='changeproduit()'> 