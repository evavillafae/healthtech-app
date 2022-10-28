<?=$header?>

    <h2 class="h4">Editar historia de paciente</h2>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Por favor ingresa los datos del paciente</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <input value="<?=$paciente['id']?>" required class="form-control" type="hidden" name="id">
                    </div>
                    <div class="form-group">
                        <label for="name" class=" fw-bold">Nombre:</label>
                        <input id="name" value="<?=$paciente['name']?>" required class="form-control" type="text" name="name">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="lastname" class=" fw-bold">Apellido:</label>
                        <input id="lastname" value="<?=$paciente['lastname']?>" required class="form-control" type="text" name="lastname">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="date_birth" class="fw-bold">Fecha de Nacimiento:</label>
                        <input id="date_birth" required value="<?=$paciente['date_birth'];?>" class="form-control" type="date" name="date_birth">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="gender" class=" fw-bold">Sexo:</label>
                        <input id="gender" required value="<?=$paciente['gender']?>" class="form-control" name="gender">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="height" class=" fw-bold">Estatura:</label>
                        <input id="height" required value="<?=$paciente['height']?>" class="form-control" type="number" name="height" min="0" step=".01">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="weight" class=" fw-bold">Peso:</label>
                        <input id="weight" required value="<?=$paciente['weight']?>" class="form-control" type="number" name="weight" min="0" step=".01">
                        <br />
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