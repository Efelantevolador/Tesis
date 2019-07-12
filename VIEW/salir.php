<script>
    function inicio(){
        window.location="perfil.php";
    }
</script>
<?php
session_start();
session_destroy();
echo "<script>inicio()</script>";
?>