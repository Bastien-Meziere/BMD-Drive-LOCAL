<div> 
	<form method = "POST" action ="">
		<p>
			<input type="text" name ="pseudo" placeholder ="Votre pseudo *" Required>
		</p>
		
		<p>
			<input type="text" name ="mdp" placeholder ="Votre mot de passe *" Required>
		</p>
		
		<!-- Image -->
		
		<p class="form-group col-md-12 col-xs-12">
			<input type="hidden" name="MAX_FILE_SIZE" value="1024000">
			<input class ="form-group col-mid-12 col-xs-12" type="file" name="images" id="image" accept=".png, .jpg, .jpeg, .PNG">
			<p class="help-block text-danger">Chargez une image de taille 100ko sous le format png, jpg, jpeg</p>
		</p>
		
		<p>
			<input type="text" name ="nom" placeholder ="Votre nom *" Required>
		</p>
		
		<p>
			<input type="text" name ="prenom" placeholder ="Votre prenom *" Required>
		</p>
		
		<p>
			<input type="text" name ="rue" placeholder ="Votre rue *" Required>
		</p>
		<p>
			<input type="text" name ="cp" placeholder ="Votre cp *" Required>
		</p>
		<p>
			<input type="text" name ="ville" placeholder ="Votre ville *" Required>
		</p>
		<p>
			<input type="text" name ="telephone" placeholder ="Votre telephone *" Required>
		</p>
		<p>
			<input type="textaera" name ="description" placeholder ="Votre description *" Required>
		</p>
		
		<p><button type="submit">ENVOYER </button></p>
	</form>	
</div>	