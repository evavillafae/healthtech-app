<?=$header?>

        <table class="table table-light" >
            <thead class="thead-light" >
                <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pacientes as $paciente): ?>
                <tr>
                    <td><?=$paciente['name']; ?></td>
                    <td><?=$paciente['date_birth']; ?></td>
                    <td><?=$paciente['gender']; ?></td>
                    <td><?=$paciente['height']; ?></td>
                    <td><?=$paciente['weight']; ?></td>
                    <td>
                        <a href="<?=base_url('editar/'.$paciente['id'])?>" class="btn btn-primary" type="button"><i class="material-icons">edit</i></a>
                        <a href="<?=base_url('borrar/'.$paciente['id'])?>" class="btn btn-danger" type="button"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<?=$footer?>