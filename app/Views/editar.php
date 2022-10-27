<?=$header?>

    <h1>Editar historia de paciente</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Por favor ingresa los datos del paciente</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <input value="<?=$paciente['id']?>" required class="form-control" type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" value="<?=$paciente['name']?>" required class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellido:</label>
                        <input id="lastname" value="<?=$paciente['lastname']?>" required class="form-control" type="text" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="date_birth">Date of Birth</label>
                        <input id="date_birth" required value="<?=$paciente['date_birth'];?>" class="form-control" type="date" name="date_birth">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input id="gender" required value="<?=$paciente['gender']?>" class="form-control" name="gender">
                    </div>
                    <div class="form-group">
                        <label for="height">Height</label>
                        <input id="height" required value="<?=$paciente['height']?>" class="form-control" type="number" name="height" min="0" step=".01">
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input id="weight" required value="<?=$paciente['weight']?>" class="form-control" type="number" name="weight" min="0" step=".01">
                    </div>
                    <br />
                    <div class="btn-group" role="group" aria-label="Button group">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                    
                </form>
            </p>
        </div>
    </div>
<?=$footer?>