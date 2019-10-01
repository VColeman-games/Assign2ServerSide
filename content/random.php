<script>
           $(document).ready(function(){
  $("button").click(function(){
                 //location.reload();

                $.ajax({

                    type: "post",
                    url: "/includes/functions.php",
                    data: {'random': true},
                    dataType: "HTML",
                    success: function (data) {
                        alert(data);
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });
                return false;
            });
           });
        </script>
<div id="randomComic">
<div> <?php getComicTitleRand(); ?> </div>
<div class="d-flex justify-content-center"><img src = <?php getComicImageRand(); ?>></div>
</div>
<button id="change" >New Comic</button>
