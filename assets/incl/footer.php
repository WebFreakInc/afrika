
<footer class="container-fluid text-center" style='background-color: #2C180F; height:200px'>
    <p>
    Se mere på Facebook: "Hjælp Afrika (TECHCOLLEGE)" fra d. 11.12.17
    <br>
    Eller på
    <br>
    <a href="http://www.techcollege.dk/">www.techcollege.dk</a>
    <br>

    For yderligere information, kontakt Projektleder, Anders Nørgaard: anpn@techcollege.dk
</p>
</footer>

<!-- JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>



<script>
var $grid = $('.grid').isotope({
              // options
              itemSelector: '.grid-item',
              layoutMode: 'fitRows',
            });

// change is-checked class on buttons
var $buttonGroup = $('.button-group');
$buttonGroup.on( 'click', 'button', function( event ) {
  $buttonGroup.find('.is-checked').removeClass('is-checked');
  var $button = $( event.currentTarget );
  $button.addClass('is-checked');
  var filterValue = $button.attr('data-filter');
  $grid.isotope({ filter: filterValue });
});
</script>



</body>
