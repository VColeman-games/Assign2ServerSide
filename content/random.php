<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
$.ajax(
{
type: 'post',  //whats your request type
url: "random.php",  // whats your php file
data: {}, //what data are you sending via JSON
dataType:"json", // what type of data are you getting back
success: function(data)
{
$("img").attr('src',<?php getComicImageRand(); ?>);
//what are you going to do with what you get
}
});
});
}); // Ajax close
</script>

<div> <?php getComicTitleRand(); ?> </div>
<div class="d-flex justify-content-center"><img src = <?php getComicImageRand(); ?>></div>
<button >New Comic</button>