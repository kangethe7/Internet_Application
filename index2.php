<?php
require_once('load.php');
$Objlayout->heading();
$Objmenus->main_menu();
$Objlayout->footer();
$Objheadings->main_banner();
$Objcontent->content();
?>
    <!-- <h1>This is my first page</h1> -->
    <?php
    require_once('load.php'); // require_once() function is used to include and evaluate the specified file only once
    // print $obj->user_age("Alex", 2004);
    ?>
</body>
</html>