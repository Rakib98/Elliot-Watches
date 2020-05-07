<div class="fixed-action-btn">
  <a href="javascript:startTour()" class="btn-floating btn-large deep-orange darken-1 tooltipped" data-position="left"
    data-tooltip="Click for help" style="font-size: 25px;">
    ?
  </a>
  <!--  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
  </ul> -->
</div>
<footer class="page-footer" style="background-color:rgb(199, 84, 34)">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Elliot Watches</h5>
        <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Sitemap</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="./index.php">Homepage</a></li>
          <li><a class="grey-text text-lighten-3" href="./about.php">About Us</a></li>
          <li><a class="grey-text text-lighten-3" href="./contact.php">Contact</a></li>
          <li><a class="grey-text text-lighten-3" href="./login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2020 Eliiot Watches
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.9/dist/sweetalert2.all.min.js"></script>
<script src="script/sweetAlert.js"></script>
<script src="script/nav.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="./script/intro.js"></script>
<script>
  jQuery(function ($) {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $('ul a').each(function () {
      if (this.href === path) {
        $(this).addClass('active');
      }
    });
  });

  /* function t() {
    introJs().setOption('showProgress', true).start();
  } */
  function startTour() {
    var tour = introJs();
    tour.start();
  }
</script>
</body>

</html>