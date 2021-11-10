<head>

<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

<link rel="stylesheet" type="text/css" href="css/style_one.css">

</head>

<body>


<div class="slideshow-container">

    <div class="slide_content fade">
        <div id="image">

            <img src="images/soup.png" width="600px" height="">

        </div>

        <div id="title_one">
            <h2> Dreams </h2>
        </div>

        <div class="line_one"> </div>

        <div id="title_two">
            <h1 id="big"> Spice Your Moods </h1>
            <span id="small"> Spicy Vegetable Soup </span>

            

            <p> Molestie ac feugiat sed lectus.
                 Cursus sit amet dictum sit amet. 
                  Egestas diam in arcu cursus euismod quis viverra. 
                Eget gravida  cum sociis natoque penatibus et magnis.
             </p>
       

             <button class="button_one"> View Menu </button>
             <div class="line_two"> </div>
             

             <h3> Breakfast </h3>

             <p  id="breakfast"> 9:00 am - 11:00 am </p>
            
            

        </div>


    </div>



    <div class="slide_content fade">
        <div id="image">

            <img src="images/chicken.png" width="600px" height="">

        </div>

        <div id="title_one">
            <h2> Dreams </h2>
        </div>

        <div class="line_one"> </div>

        <div id="title_two">
            <h1 id="big"> Tingle your Tastebuds </h1>
            <span id="small"> Grilled Chicken </span>

            

            <p>Molestie ac feugiat sed lectus.
             Cursus sit amet dictum sit amet. Egestas diam 
             in arcu cursus euismod quis viverra. Eget gravida  cum sociis natoque penatibus et magnis.
             </p>
       

             <button class="button_one"> View Menu </button>
             <div class="line_two"> </div>
             

             <h3> Lunch </h3>

             <p  id="breakfast"> 12:00 pm - 4:00 pm </p>
            
             

        </div>


    </div>


    <div class="slide_content fade">
        <div id="image">

            <img src="images/kaboos.png" width="600px" height="">

        </div>

        <div id="title_one">
            <h2> Dreams </h2>
        </div>

        <div class="line_one"> </div>

        <div id="title_two">
            <h1 id="big"> Layer over Layers </h1>
            <span id="small"> Chicken Kabobs </span>

            

            <p>Molestie ac feugiat sed lectus.
             Cursus sit amet dictum sit amet. Egestas diam 
             in arcu cursus euismod quis viverra. Eget gravida  cum sociis natoque penatibus et magnis.
             </p>
       

             <button class="button_one"> View Menu </button>
             <div class="line_two"> </div>
             

             <h3> Snack </h3>

             <p  id="breakfast"> 4:00 pm - 6:00 pm </p>
            

        </div>



    </div>
    <a class="next" onclick="plusSlides(1)"> <span class="line_three"> </span> &#10095;</a>


</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide_content");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
