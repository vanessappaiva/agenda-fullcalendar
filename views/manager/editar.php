<?php include("../../config/config.php"); ?>
<?php include(DIRREQ . "lib/html/header.php"); ?>

<?php
$objEvents = new \Classes\ClassEvents();
$events = $objEvents->getEventsById($_GET['id']);

$date = new \DateTime($events['start']);
?>

<a id="delete" href="<?php echo DIRPAGE . 'controllers/ControllerDelete.php?id=' . $_GET['id']; ?>"><img src="<?php echo DIRPAGE . 'img/trash.svg'; ?>" class="img"></a>

<form name="formEdit" id="formEdit" action="<?php echo DIRPAGE . 'controllers/ControllerEdit.php'; ?>" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>" required><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>" required><br>
    Paciente: <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>" required><br>
    Queixa: <input type="text" name="description" id="description" value="<?php echo $events['description']; ?>" required><br>

    <br>
    <input type="submit" value="Confirmar Consulta">
</form>

<?php include(DIRREQ . "lib/html/footer.php"); ?>