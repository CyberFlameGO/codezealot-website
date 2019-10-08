    <footer>
      <ul>
        <li><a href="https://linkedin.com/in/tyler-phass/" class="social-item"><i class="fab fa-linkedin"></i>LinkedIn</a></li>
        <li><a href="https://angel.co/code_zealot" class="social-item"><i class="fab fa-angellist"></i>Angel List</a></li>
        <li><a href="https://youtube.com/c/CodeZealot" class="social-item"><i class="fab fa-youtube"></i>YouTube</a></li>
        <li><a href="https://discord.gg/tPpsTDh" class="social-item"><i class="fab fa-discord"></i>Discord</a></li>
        <li><a href="https://www.facebook.com/CodeZealotTutorials/" class="social-item"><i class="fab fa-facebook-square"></i>Facebook</a></li>
        <!--<li><a href="#" class="social-item"><i class="fab fa-instagram"></i>Instagram</a></li>-->
        <li><a href="https://twitter.com/CodeZealotTuts" class="social-item"><i class="fab fa-twitter-square"></i>Twitter</a></li>
      </ul>
      <small>© Code_Zealot 2019</small>
    </footer>

      
  <?php wp_footer(); ?>

  <script src="https://kit.fontawesome.com/3f5a46caf6.js" crossorigin="anonymous"></script>

  <script>
    //mobile menu
    var $ = jQuery.noConflict();
    function openMenu() {
      $("#mobile-menu").css("height", "100%");
    }

    function closeMenu() {
      $("#mobile-menu").css("height", "0%");
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
