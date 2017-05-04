<?php 
    require 'header.php' 
?>

<br>
<main class="form-new">
	<div class="">
	  	<form class="" action="store-event.php" method="post">
			<div class="">
			    <input class="" type="text" id="new-title" name="new-title">
			    <label class="">Tittel</label>
		  	</div>
		  	<div class="">
			    <input class="" type="text" id="new-where" name="new-where">
			    <label class="">Hvor</label>
		  	</div>
		  	<div class="">
			    <input class="" type="text" id="new-where-link" name="new-where-link">
			    <label class="">Link til hvor (null)</label>
		  	</div>
		  	<div class="">
		    	<textarea class="" type="text" rows= "10" id="new-body" name="new-body"></textarea>
		    	<label class="" for="body">Body</label>
		  	</div>
			<div class="">
			    <input class="" type="text" id="new-image-path" name="new-image-path">
			    <label class="">Bilde-URL</label>
		  	</div>
			<div class="">
			    <input class="" type="text" id="new-tag" name="new-tag">
			    <label class="">Tag</label>
		  	</div>
		  	<button class="">
			  	Legg til
			</button>
		</form>
	</div>
</main>

<?php 
    require 'footer.php'; 
?>