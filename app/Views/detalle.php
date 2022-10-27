<?=$header?>

    
    <main>
        <section class="container">
            <h1>Detalle de historia</h1>
            <div class="row">
                <div class="col">
                    <h5 class="card-title"><?=$paciente['name']?> <?=$paciente['lastname']?></h5>
                    <p class="card-text" style="width: 32rem">
                        <div>
                            <input value="<?=$paciente['id']?>" required class="form-control" type="hidden" name="id">
                        </div>
                        <div class="card" style="width: 32rem;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item " >
                                    <h6 class="h6 fw-bold">Nombre:</h6>
                                    <p><?=$paciente['name']?></p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="h6 fw-bold">Apellido:</h6>
                                    <p><?=$paciente['lastname']?></p>
                                </li>
                                <li class="list-group-item ">
                                    <h6 class="h6 fw-bold">Fecha de nacimiento:</h6>
                                    <p><?=$paciente['date_birth'] = date("d-m-Y", strtotime($paciente['date_birth']));?></p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="h6 fw-bold">Sexo:</h6>
                                    <p><?=$paciente['gender']?></p>
                                </li>
                                <li class="list-group-item ">
                                    <h6 class="h6 fw-bold">Estatura:</h6>
                                    <p><?=$paciente['height']?></p>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="h6 fw-bold">Peso:</h6>
                                    <p><?=$paciente['weight']?></p>
                                </li>
                            </ul>
                        </div>
                        <br />
                        <a href="<?=base_url('editar/'.$paciente['id'])?>" class="btn btn-primary" type="button"><i class="material-icons">edit</i></a>
                        <a href="<?=base_url('borrar/'.$paciente['id'])?>" class="btn btn-danger" type="button"><i class="material-icons">delete</i></a>
                    </p>
                </div>
                <div class="col">
                    <h5>Recomendación</h5>
                    <div class="alert alert-warning" role="alert">

                        <?php 
                            $fecha_paciente=$paciente['date_birth'];
                            function edad ($fecha_nacimiento){
                                $nacimiento= new DateTime($fecha_nacimiento);

                                $fecha_actual = new DateTime (date("d-m-Y"));

                                $edad = $fecha_actual->diff($nacimiento);

                                return $edad->format("%y");
                            }
                            //printf(edad($fecha_paciente));

                            $sexo=$paciente['gender'];
                            function sexo ($sexo){
                                if($sexo=="femenino"){
                                    return $pronombre= 'una';
                                } else{
                                    return $pronombre= 'un';
                                }
                            }

                            $peso=$paciente['weight'];
                            function comer ($peso){
                                if($peso>30.00){
                                    return $comer= 'menos';
                                } else{
                                    return $comer= 'más';
                                }
                            }
                            $altura=$paciente['height'];
                            // function fibonacci($n)
                            // {
                            
                            // for($i=0;$i<=$n;$i++)
                            //     {
                            //         $fibonacci = $i + $i;

                            //     }

                            // }

                            function fibonacci($fn){
                                return round(pow((sqrt(5)+1)/2, $fn) / sqrt(5));
                            };

                            $cantidad = $altura;
                            function plural ($cantidad){
                                if ($cantidad>1){
                                    return $plural='s';
                                } else {
                                    return $plural='';
                                }
                            };

                            $fecha=$paciente['date_birth'];
                            function correr($fecha){
                                $nacimiento= new DateTime($fecha);
                                $year= $nacimiento->format("y");
                                $km= round(sqrt($year),2);
                                return $km;
                            }
                            
                            if(edad($fecha_paciente)>18){
                                echo "Hola ",$paciente['name'],", eres ",sexo($sexo)," persona muy saludable, te recomiendo comer ",comer($peso)," y salir a correr ",correr($fecha)," km diario",plural(correr($fecha)),".";
                            } else {
                                
                                echo "Hola ",$paciente['name'],", eres ",sexo($sexo)," joven muy saludable, te recomiendo comer ",comer($peso)," y salir a jugar al aire libre durante ",fibonacci($altura)," hora",plural(fibonacci($altura))," diaria",plural(fibonacci($altura)),".";
                            }
                        ?>
                    </div>
                </div>
            </div>
            
        </section>
    </main>
    
    
            
<?=$footer?>