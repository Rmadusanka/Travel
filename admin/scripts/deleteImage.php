<?php
    if ($_GET['del']) {
        unlink("../".$_GET['del']);
        echo "<script type=\"text/javascript\">
                window.location = \"../gallery.php\"
            </script>";	
    }
?>