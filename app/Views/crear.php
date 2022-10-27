<?=$header?>

    <h1>Crear historia de paciente</h1>

    <?php if(session('mensaje')){?>
    <div class="alert alert-danger" role="alert">
        <?php
            echo session('mensaje');
        ?>
    </div>
    <?php
    }
    ?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Por favor ingresa los datos del paciente</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" value="<?=old('name')?>"  class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="date_birth">Date of Birth</label>
                        <input id="date_birth" value="<?=old('date_birth')?>"  class="form-control" type="date" name="date_birth">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender" value="<?=old('gender')?>"  class="form-control" name="gender">
                        <option selected>Select one</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="height">Height</label>
                        <input id="height" value="<?=old('height')?>"  class="form-control" type="number" name="height" min="0" step=".01">
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input id="weight" value="<?=old('weight')?>"  class="form-control" type="number" name="weight" min="0" step=".01">
                    </div>
                    <div class="btn-group" role="group" aria-label="Button group">
                        
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </form>
            </p>
        </div>
    </div>

    
<?=$footer?>