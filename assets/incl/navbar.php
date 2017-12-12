<!--- MAIN NAVIGATION START --->
      <nav class="navbar navbar-expand-lg navbar-dark navbar-colors navbar-fix fixed-top">
        <div class="container">

          <!--- NAV LOGO START --->
          <a class="navbar-brand" href="index.php">
              <h1>STØT<span>AFRIKA</span></h1>
              <img src="assets/img/logo(no-text).svg"/>
          </a>
          <!--- NAV LOGO END --->

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto navbar-colors">
              <li class="nav-item">
                <a class="nav-link" href="sponsors.php">SPONSORERE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.php">PRODUKTER</a>
              </li>
              <li class="nav-item">
<!--------------------------------------------------------------------------------------------
 -----------------------------------FIX TIL RIGTIG DOMÆNE!!!!!!-------------------------------
 -------------------------------------------------------------------------------------------->
                <a class="nav-link" href="index.php#livestream">LIVESTREAM</a>

              </li>
              <li class="nav-item">
                <a class="btn nav-btn" href="#" data-toggle="modal" data-target="#mpModal" role="button">STØT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- MODAL TIL MP -->
<div id="mpModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <img src="assets/img/canvas.png" width="100%" alt="MobilePay" srcset="assets/img/canvas.png">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
      </div>
    </div>

  </div>
</div>
