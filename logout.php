<?php
session_start();
if (isset($_SESSION['login'])) {
    unset($_SESSION);
    session_destroy();
}
echo "<script>
        alert('Anda telah logout');
        document.location='index.php';
      </script>";
?>




