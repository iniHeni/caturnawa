<?php
        session_start();
    session_destroy();
    echo '<script>window.location={{url('edc/exit') }}</script>';
?>