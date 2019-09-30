<script >
            function testing() {
                  document.getElementById("demo").innerHTML = "Hello World";
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
<button onClick="testing()" >New Comic</button>