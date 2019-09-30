<script >
            function ChangeComic(){
                 location.reload();
/*
                $.ajax({

                    type: "POST",
                    url: <?php getComicURLRand(); ?>,
                    data: {"link": ""},
                    dataType: "json",
                    success: function (data) {
                        alert(data);
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });*/
            }
        </script>

<div> <?php getComicTitleRand(); ?> </div>
<div class="d-flex justify-content-center"><img src = <?php getComicImageRand(); ?>></div>
<button onClick="ChangeComic()" >New Comic</button>