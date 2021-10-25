@csrf
@include('hospital.partials.validation-error')

<div class="container center">
    <div class="center">
        <div class="form-group">
            <input type="text" name="rut" id="rut" placeholder="Ingrese el rut" 
            value="{{ old('rut', $doctor->rut) }}">
        </div>
        
        <div class="form-group">
        <input type="text" name="doctor_name" id="doctor_name" placeholder="Ingrese el nombre del doctor" 
        value="{{ old('doctor_name', $doctor->doctor_name) }}">
        </div>
        
        
        <div class="form-group">
            <input type="text" name="doctor_lastname" id="doctor_lastname" placeholder="Ingrese apellidos del doctor" 
            value="{{ old('doctor_lastname', $doctor->doctor_lastname) }}">
        </div>
        
        <div class="form-group">
            <input type="text" name="email" id="email" placeholder="Ingrese el correo del doctor" 
            value="{{ old('email', $doctor->email) }}">
         </div>
        
        
        <div class="form-group">
            <input type="text" name="direccion" id="direccion" placeholder="Ingrese la direccion del doctor" 
            value="{{ old('direccion', $doctor->direccion) }}">
         </div>
        
        
        <div class="form-group">
            <select name="especialidad" id="especialidad">
                <option selected>Corazon</option>
                <option selected>cirugias</option>
                <option selected>cerebros</option>
            </select>
        </div>
        
        <div class="row">
            <div class="col s6">
                <button type="" class="btn btn-success">editar</button>
            </div>
            <div class="col s6" >
                <button type="submit" class="btn btn-success ">Confirmar</button>
            </div>
        </div>
    </div>
</div>
    
    




