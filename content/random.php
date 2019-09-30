<script >
            function testing() {

                $.ajax({

                    type: "GET",
                    url: <?php getComicURLRand(); ?>,
                    data: {"img"},
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
<button onClick="testing()" >New Comic</button>