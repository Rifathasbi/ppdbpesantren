      </div>

    </div>
    <!-- /main content -->

  </div>
  <!-- /page content -->

</div>
<!-- /page container -->
<?php
$user = $user->row();
$level = $user->level;
$nama    = $user->nama_lengkap;
$devep	= $user->dev;
$logo = (empty($user->logos) || !file_exists("fotoo/".$user->logos) )?"img/users.jpg":"fotoo/".$user->logos;
?>

<!-- Footer -->
<div class="navbar navbar-default navbar-fixed-bottom footer">
<ul class="nav navbar-nav visible-xs-block">
<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
</ul>

<div class="navbar-collapse collapse" id="footer">
<div class="navbar-text">
 &copy; <?php echo date('Y'); ?>. <a href="#" class="navbar-link">Panel Admin PPDB Online PONPES Mawaridussalam (RIFAT HASBI)</a>
</div>

<!-- <div class="navbar-right">
  <ul class="nav navbar-nav">
    <li><a href="#">About</a></li>
    <li><a href="#">Terms</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</div> -->
</div>
</div>
<!-- /footer -->

  <script type="text/javascript">
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
    return true;
  }
  </script>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
</body>
</html>
