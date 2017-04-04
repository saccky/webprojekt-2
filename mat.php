<?php
    require 'header.php'
?>

<h1>MAT</h1>

<!--- Script start --->
<!--- evt se https://www.w3schools.com/w3css/w3css_slideshow.asp --->
<div id="scriptArea">
    
    <!--- kode fra W3 (manuell slideshow(se link)+timeout for automastisk effekt) start --->
    <div id="W3SlideContainer">
        <img class="W3Slides" src="pictures/food-ex1.jpg" style="height: 200px">
        <img class="W3Slides" src="pictures/food-ex2.jpg" style="height: 200px">
        <img class="W3Slides" src="pictures/westguide-logo.png" style="height: 200px">
    </div>
    
    <script>
        var sIndex = 1;
        showDivs(sIndex);
        
        function plusDivs(n)
        {
            showDivs(sIndex += n);
        }
        function showDivs(n)
        {
            var i;
            var x = document.getElementsByClassName("W3Slides");
            if(n > x.length) 
            {
                sIndex = 1;
            }
            if(n < 1)
            {
                sIndex = x.length;    
            }
            for(i = 0; i < x.length; i++)
            {
                x[i].style.display = "none";
            }
            x[sIndex-1].style.display = "block";
            //setTimeout(plusDivs, 2000);
        }
    </script>
    <!--- w3 slutt --->
                        
    <p>
        <button id="ImageButtonPrev" type="button" onclick="plusDivs(-1)"> Prev </button>
    </p>                        
    <p>
        <button id="ImageButtonNext" type="button" onclick="plusDivs(1)"> Next </button>
    </p>
    
</div>
<!--- Script slutt --->

<?php
    require 'footer.php'
?>