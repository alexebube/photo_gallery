<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 </div>
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, Alexander Obi</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>