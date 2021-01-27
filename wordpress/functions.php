<?php
    function marcodm_post_meta() {
    echo '<time datetime="' . get_the_date('c') . '">' .
            get_the_date() . "</time>";
    echo 'By ' . get_the_author();
    }
?>