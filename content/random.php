<script >
            function ChangeComic(){
                 //location.reload();

                $.ajax({

                    type: "GET",
                    url: <?php getComicURLRand(); ?>
                    data: { get_param: 'link'},
                    dataType: "json",
                    success: function (data) {
                        alert(data);
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });
            }
        </script>

<div> <?php getComicTitleRand(); ?> </div>
<div class="d-flex justify-content-center"><img src = <?php getComicImageRand(); ?>></div>
<button onClick="ChangeComic()" >New Comic</button>