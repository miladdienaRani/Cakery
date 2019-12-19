<?php
session_start();
session_destroy();
$_SESSION['status'] = 0;

?>
<script>
        alert("Berhasil keluar");
        window.location="../index.php";
    </script>