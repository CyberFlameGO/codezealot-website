    <footer>
      <ul>
        <li><a href="#" class="social-item"><i class="fab fa-linkedin"></i>LinkedIn</a></li>
        <li><a href="#" class="social-item"><i class="fab fa-angellist"></i>Angel List</a></li>
        <li><a href="#" class="social-item"><i class="fab fa-youtube"></i>YouTube</a></li>
        <li><a href="#" class="social-item"><i class="fab fa-discord"></i>Discord</a></li>
        <li><a href="#" class="social-item"><i class="fab fa-facebook-square"></i>Facebook</a></li>
        <li><a href="#" class="social-item"><i class="fab fa-instagram"></i>Instagram</a></li>
        <li><a href="#" class="social-item"><i class="fab fa-twitter-square"></i>Twitter</a></li>
      </ul>
      <small>© Code_Zealot 2019</small>
    </footer>

      
  <?php wp_footer(); ?>

  <script src="https://kit.fontawesome.com/3f5a46caf6.js" crossorigin="anonymous"></script>

  <script>
    //mobile menu
    var $ = jQuery.noConflict();
    function openMenu() {
      //document.getElementById("mobile-menu").style.height = "100%";
      $("#mobile-menu").css("height", "98%"); //less than 100% to show border-bottom
      $("#mobile-menu").css("border-top", "8px solid #FF884D");
      $("#mobile-menu").css("border-bottom", "8px solid #FF884D");
      //document.getElementById("mobile-menu").style.border-top = "8px solid $orange";
      //document.getElementById("mobile-menu").style.border-bottom = "8px solid $orange";
    }

    function closeMenu() {
      //document.getElementById("mobile-menu").style.height = "0%";
      //document.getElementById("mobile-menu").style.border-top = "0px solid $orange";
      //document.getElementById("mobile-menu").style.border-bottom = "0px solid $orange";
      $("#mobile-menu").css("height", "0%");
      $("#mobile-menu").css("border-top", "0px solid #FF884D");
      $("#mobile-menu").css("border-bottom", "0px solid #FF884D");
    }
	</script>

  <script>
    var $ = jQuery.noConflict();
    $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1200);
  });
  </script>

  <script type="text/javascript">
    /*
    var str = "cat welcome.txt ",
    i = 0,
    isTag,
    text;

    (function type() {

        text = str.slice(0, ++i);
        if (text === str) return;
        
        document.getElementById('typewriter').innerHTML = text;

        var char = text.slice(-1);
        if( char === '<' ) isTag = true;
        if( char === '>' ) isTag = false;

        if (isTag) return type();
        setTimeout(type, 100);
    }());
    */
</script>

<script type="text/javascript">
  /*
  var $ = jQuery.noConflict();
  var str = "./contact-form.sh ",
  i = 0,
  isTag,
  text;


  $(document).ready(function() {
    function showTerminalContents(){
      $('.hidden').delay(2000).show(0);
    }

    function type(){
      text = str.slice(0, ++i);
      if (text === str) return;
      
      document.getElementById('typewriter').innerHTML = text;

      var char = text.slice(-1);
      if( char === '<' ) isTag = true;
      if( char === '>' ) isTag = false;

      if (isTag) return type();
      setTimeout(type, 100);
    }
    if($("#terminal").scrollTop() == 0) {
      setTimeout(type, 3000)
      setTimeout(showTerminalContents, 3000)
    }
      
    });
    */
</script>

</body>
