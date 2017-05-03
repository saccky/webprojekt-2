<?php 
    require 'header.php' 
?>

<main class="">
	<div class="">
	  	<form class="" action="store-test.php" method="post">
			<div class="">
			    <input class="" type="text" id="tite" name="title">
			    <label class="" for="sample1">Tittel</label>
		  	</div>
		  	<div class="">
			    <input class="" type="text" id="where" name="where">
			    <label class="" for="sample1">Hvor</label>
		  	</div>
		  	<div class="">
		    	<textarea class="" type="text" rows= "10" id="body" name="body"></textarea>
		    	<label class="" for="body">Body</label>
		  	</div>
			<div class="">
			    <input class="" type="text" id="image-path" name="image-path">
			    <label class="" for="sample1">Bilde-URL</label>
		  	</div>
			<div class="">
			    <input class="" type="text" id="tag" name="tag">
			    <label class="" for="sample1">Tag</label>
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