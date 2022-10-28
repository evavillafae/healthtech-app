<?= $header ?>
<?php if (session('mensajeExito')) { ?>
  <div class="alert alert-success " role="alert">
    <?php
    echo session('mensajeExito');
    ?>
  </div>
<?php
}
?>
<?php if (session('mensaje')) { ?>
  <div class="alert alert-danger " role="alert">
    <?php
    echo session('mensaje');
    ?>
  </div>
<?php
}
?>

<table class="table table-striped">
  <thead class="thead-light">
    <tr>
      <th class="ps-4">Nombre</th>
      <th>Apellido</th>
      <th>Fecha de nacimiento</th>
      <th>Sexo</th>
      <th>Estatura</th>
      <th>Peso</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pacientes as $paciente) : ?>
      <tr>
        <td class="ps-4"><?= $paciente['name']; ?></td>
        <td><?= $paciente['lastname']; ?></td>
        <td><?= $paciente['date_birth'] = date("d-m-Y", strtotime($paciente['date_birth'])); ?></td>
        <td><?= $paciente['gender']; ?></td>
        <td><?= $paciente['height']; ?> m</td>
        <td><?= $paciente['weight']; ?> kg</td>
        <td>
          <a href="<?= base_url('detalle/' . $paciente['id']) ?>" class="btn btn-warning" type="button"><i class="material-icons">visibility</i></a>
          <a href="<?= base_url('editar/' . $paciente['id']) ?>" class="btn btn-primary" type="button"><i class="material-icons">edit</i></a>
          <a href="<?= base_url('borrar/' . $paciente['id']) ?>" class="btn btn-danger" type="button"><i class="material-icons">delete</i></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?= $footer ?>