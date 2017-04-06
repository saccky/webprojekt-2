<!--- Script start --->
<!--- evt se https://www.w3schools.com/w3css/w3css_slideshow.asp --->
<div class="SlideShow">
    
    <!--- kode fra W3 (manuell slideshow(se link)+timeout for automastisk effekt) start --->
    
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
            var x = document.getElementsByClassName("Slides");
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
                        
</div>
<div id="SlidesButtons">
        <button class="SlidesBtnPrev" type="button" onclick="plusDivs(-1)"> Prev </button>     
        <button class="SlidesBtnNext" type="button" onclick="plusDivs(1)"> Next </button>
</div>
<!--- Script slutt --->