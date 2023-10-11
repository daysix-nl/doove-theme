<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>


<script type='text/javascript'>

  (function(d,t) {

    _scoopi = {'onload': function() { this.trkDocumentLoad(); }};

    var s=d.getElementsByTagName(t)[0], js=d.createElement(t); js.async=1;

    js.src='//api.salesfeed.com/v3/bootstrap.js?aid=doove18';

    s.parentNode.insertBefore(js,s);

  })(document,'script');

</script>


<?php wp_footer(); ?>
</body>
</html>
