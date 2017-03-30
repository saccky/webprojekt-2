<?php
    require 'header.php'
?>

<h1>MAT</h1>

<!--- Script start --->
<div id="scriptArea">
    <script>
        <!--- Ideen bak image plus/min og switch er at man kan ha flere bilder, knappenes funksjoner vil vise bilde for nåværende var j, og øke eller minke j etter hvilken knapp som blir trykket på. Virker ikke helt 100%, det er noe merkelig jeg ikke kan sette fingeren på. --->
        var j = 0;
        function imagePlus()
        {
            j++;
            foodImage(j);
        }
        function imageMin()
        {
            j--;
            foodImage(j);
        }
        function foodImage(i) 
        {
            var pic;
            switch (i)
            {
                case 1:
                pic = "pictures/food-ex1.jpg";     
                break;
                case 2:
                pic = "pictures/food-ex2.jpg";
                break;
                default:
                pic = "pictures/berg.jpg";
            }
                    
            document.getElementById('myImage').src = pic;
        }
    </script>
                    
    <div id="scriptPicture">
        <img id="myImage" src="pictures/Einstein.jpg" width="400px" height="300px">
    </div>
                        
    <p>
        <button id="ImageButtonPrev" type="button" onclick="imageMin()"> Prev </button>
    </p>                        
    <p>
        <button id="ImageButtonNext" type="button" onclick="imagePlus()"> Next </button>
    </p>
    <p>
        <!--- NB: for testing --->
        <button id="ImageButtonReset" type="button" onclick="foodImage(1)"> Reset    </button>
    </p>
</div>
<!--- Script slutt --->

<?php
    require 'footer.php'
?>