<?=$header?>

<?php if(session('mensajeExito')){?>
        <div class="alert alert-success" role="alert">
            <?php
                echo session('mensajeExito')," ","<a href='/'>Volver al inicio</a>";
            ?>
        </div>
    <?php
        }
    ?>

<?php if(session('mensaje')){?>
        <div class="alert alert-danger" role="alert">
            <?php
                echo session('mensaje');
            ?>
        </div>
    <?php
        }
    ?>

    <h1>Crear historia de paciente</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Por favor ingresa los datos del paciente</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class=" fw-bold">Nombre:</label>
                        <input id="name" value="<?=old('name')?>"  class="form-control" type="text" name="name">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="lastname" class=" fw-bold">Apellido:</label>
                        <input id="lastname" value="<?=old('lastname')?>" class="form-control" type="text" name="lastname">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="date_birth" class=" fw-bold">Fecha de Nacimiento:</label>
                        <input id="date_birth" value="<?=old('date_birth')?>"  class="form-control" type="date" name="date_birth">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="gender" class=" fw-bold">Sexo:</label>
                        <select id="gender" value="<?=old('gender')?>" required class="form-control" name="gender">
                        <option selected>Select one</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="height" class=" fw-bold">Estatura:</label>
                        <input id="height" value="<?=old('height')?>"  class="form-control" type="number" name="height" min="0" step=".01">
                        <br />
                    </div>
                    <div class="form-group">
                        <label for="weight" class=" fw-bold">Peso:</label>
                        <input id="weight" value="<?=old('weight')?>" class="form-control" type="number" name="weight" min="0" step=".01">
                    </div>
                    <br />
                    <div class="btn-group" role="group" aria-label="Button group">
                        <button class="btn btn-primary" type="submit">Crear</button>
                    </div>
                    
                </form>
            </p>
        </div>
    </div>

    
<?=$footer?>