<?php include("../../config/config.php"); ?>
<?php include(DIRREQ . "lib/html/header.php"); ?>

<?php $date = new \DateTime($_GET['date'], new \DateTimeZone('America/Sao_Paulo')); ?>


<form name="formAdd" id="formAdd" action="<?php echo DIRPAGE . 'controllers/ControllerAdd.php'; ?>" method="post">
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>" required><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>" required><br>
    Paciente: <input type="text" name="title" id="title" required><br>
    Queixa: <input type="text" name="description" id="description" required><br>
    Quanto tempo deseja de atendimento:
    <select name="horaAtendimento" id="horaAtendimento" required>
        <option value="">Selecione</option>
        <option value="1">1h</option>
        <option value="2">2h</option>
        <option value="3">3h</option>
    </select>
    <br>
    <input type="submit" value="Marcar Consulta">
</form>

<?php include(DIRREQ . "lib/html/footer.php"); ?>