
	<br><br><br>
	<form method="POST" action="">
	<fieldset id="newAccount">
        <legend style="font-family: maiandra GD; font-size: 25px;">INSCRIPTION</legend>
            <table class="tab_complet">
                <tr>
                    <td class="formul_tab">
                    	<input type="text" placeholder="NOM DU PRODUIT" name="nomProduit" class="champsNewC" required/>
                    </td>
                    <td class="formul_tab">
                    	<input type="number" placeholder="QUANTITE" name="qte" class="champsNewC" required/>
                    </td>
                </tr>   
                <tr>
                    <td class="formul_tab">
                    	<input type="text" placeholder="PRIX UNITAIRE" name="prixU" class="champsNewC" required/>
                    </td>
                    <td class="formul_tab">
                    	<input type="date" placeholder="DATE ARRIVEE" name="dateArrivee" value="<?= date('Y-m-d') ?>" class="champsNewC" readonly required/>
                    </td>
                </tr>  
                <tr>
                    <td class="formul_tab" colspan="2">
                    	<select class="champsNewC" name="categorie" id="classe">       <option>CATEGORIE</option>
                    	</select>
                    </td>
                </tr>  
        </table>
    </fieldset>
    <br><br>
    <div class="aligner"><input class="btn" type="submit" name="inscription" value="Valider" id="inscription" disabled></div>
</form>