<script>
           $(document).ready(function(){
  $("button").click(function(){
                 //location.reload();

                $.ajax({

                    type: "post",
                    url: "/includes/randomFunction.php",
                    data: {'random': true},
                    dataType: "HTML",
                    success: function (data) {
                        document.getElementById('randomComic').innerHTML = data;
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });
                return false;
            });
           });
        </script>
<div class="d-flex justify-content-center">
<br>
<button class="d-flex justify-content-center" id="change"  >New Comic</button>
<div id="randomComic">
<div> <?php getComicRand(); ?> </div>
</div>
</div>

