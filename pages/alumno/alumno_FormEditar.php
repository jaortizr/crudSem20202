<p>&nbsp;</p>
<div class="row">
    <form id="formEditAlumno">
    <div class="col s12 m4 input-field">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $infInfBoleta[1]; ?>">
    </div>
    <div class="col s12 m4 input-field">
        <label for="primerApe">Primer apellido</label>
        <input type="text" id="primerApe" name="primerApe" value="<?php echo $infInfBoleta[2]; ?>">
    </div>
    <div class="col s12 m4 input-field">
        <label for="segundoApe">Segundo apellido</label>
        <input type="text" id="segundoApe" name="segundoApe" value="<?php echo $infInfBoleta[3]; ?>">
    </div>
    <div class="col s12 m4 input-field">
        <label for="correo">Correo</label>
        <input type="text" id="correo" name="correo" value="<?php echo $infInfBoleta[5]; ?>">
    </div>
    <div class="col s12 m4 input-field">
        <label for="fechaNac">Fecha de nacimiento</label>
        <input type="text" id="fechaNac" name="fechaNac" value="<?php echo $infInfBoleta[6]; ?>">
    </div>
    <div class="col s12 m4 input-field">
        <input type="submit" class="btn deep-orange accent-2" style="width:100%" value="Editar">
    </div>
    </form>
</div>