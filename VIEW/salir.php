<script>
    function inicio(){
        window.location="perfil.php";
    }
</script>
<?php
session_start();
session_destroy();
return "<script>inicio()</script>";
?>