<?php
include("config/config.php");
include(DIRREQ . "lib/html/header.php");
?>

<a href="<?php echo DIRPAGE . 'views/user'; ?>">Calendário do Usuário</a>
<a href="<?php echo DIRPAGE . 'views/manager'; ?>">Calendário do Gerente</a>

<?php
include(DIRREQ . "lib/html/footer.php");
?>