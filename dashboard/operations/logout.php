<?php
session_start();
session_unset();
session_destroy();
?>
<script type="text/javascript">
window.location.href="../../index.php";
</script>
<?php
exit;
?>