<?php
session_start();

include("DAO/Connexion.php");
include("inc/utils.php");

include("DAO/CategorieDAO.php");
include("func/produit_inc.php");
include("func/panier_inc.php");
include("func/compte_inc.php");


include("top.php");

?>
	<form class="form-horizontal" action="DAO/InscriptionController2.php" method="get">
		<h3>&nbsp; S'enregistrer</h3> <input type="hidden" name="statut" value="Utilisateur">
		
        <?php if(isset($_GET['compte'])){
        
            echo "<div class=\"control-group\">
			<label class=\"control-label\" for=\"inputFname\">".$infomsg."</label></div>";
        }?>
        
		<div class="control-group">
			<label class="control-label" for="inputFname">Nom<sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="nom" placeholder="votre nom">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Pr&eacute;nom <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="prenom" placeholder="votre pr&eacute;nom">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="identifiant" placeholder="votre Email">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="password" placeholder="votre mot de passe">
		</div>
	  </div>
         	<div class="control-group">
		<label class="control-label">Adresse <sup>*</sup></label>
		<div class="controls">
		  <input type="texte" name="adresse" placeholder="votre adresse"  autocomplete="on">
		</div>
	  </div>

	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="register" value="M'enregistrer" class="exclusive shopBtn">
		</div>
	</div>
	</form>
</div>




<?php
include("bottom.php");
?>