<?php 
    require 'header.php';
?>

<main class="form-edit">
	<div class="">
	  	<form class="" action="update-event.php" method="post">
			<div class="">
			    <input class="" type="text" id="edit-title" name="edit-title">
			    <label class="">Tittel</label>
		  	</div>
		  	<div class="">
			    <input class="" type="text" id="edit-where" name="edit-where">
			    <label class="">Hvor</label>
		  	</div>
		  	<div class="">
			    <input class="" type="text" id="edit-where-link" name="edit-where-link">
			    <label class="">Link til hvor (null)</label>
		  	</div>
		  	<div class="">
		    	<textarea class="" type="text" rows= "10" id="edit-body" name="edit-body"></textarea>
		    	<label class="" for="body">Body</label>
		  	</div>
			<div class="">
			    <input class="" type="text" id="edit-image-path" name="edit-image-path">
			    <label class="">Bilde-URL</label>
		  	</div>
			<div class="">
			    <input class="" type="text" id="edit-tag" name="edit-tag">
			    <label class="">Tag</label>
		  	</div>
		  	<button class="">
			  	Endre
			</button>
            <input type="hidden" name="edit-event-id" value="<?= $_GET['id']?>"> <!--- Henter ID og sender den videre --->
		</form>
	</div>
</main>

<?php
    require 'footer.php'; 
?>