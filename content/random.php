<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
$.ajax(
{
type: 'POST',  //whats your request type
url: "random.php",  // whats your php file
data: {}, //what data are you sending via JSON
dataType:"", // what type of data are you getting back
success: function(data)
{
window.location.reload();
//what are you going to do with what you get
},
error: function()
{
//what to do if it fails
}
});
});
}); // Ajax close
</script>

<div> <?php getComicTitleRand(); ?> </div>
<div class="d-flex justify-content-center"><img src = <?php getComicImageRand(); ?>></div>
<button >New Comic</button>