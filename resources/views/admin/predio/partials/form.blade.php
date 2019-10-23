@foreach($users as $user)

<div class="form-row">
    
    <div class="form-group col-md-6">
      <label for="">Nombre de usuario</label>
      <input type="text" class="form-control" value="{{ $user->name }}"> 
    </div>
    
    <div class="form-group col-md-6">
      <label for="user_id">Tipo de usuario</label>
      <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $user->role->id }}"> 
    </div>

</div>

@endforeach

<div  class="form-row">

<div class="form-group col-md-6">
  <label for="category_id">Categoria</label>
  <select class="form-control">
     <option value="">Selecciona la categoria</option>
     @foreach($categories as $cat)
       <option name="category_id" id="category_id" value="{{ $cat->id }}">{{ $cat->title }}</option>
     @endforeach  
  </select>
</div>

<div class="form-group col-md-6">
  <label for="condicion_id">Condicion</label>
  <select class="form-control">
     <option value="">Selecciona una condicion</option>
     @foreach($condicion as $con)
       <option name="condicion_id" id="condicion_id" value="{{ $con->id }}">{{ $con->title }}</option>
     @endforeach  
  </select>
</div>


</div>

<div class="form-row">

<div class="form-group col-md-6">
  <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control"> 
</div>  

<div class="form-group col-md-6">
  <label for="precio">precio</label>
    <input type="text" name="precio" id="precio" class="form-control"> 
</div>  

</div>

<div class="form-row">

<div class="form-group col-md-6">
  <label for="modelo">modelo</label>
    <input type="text" name="modelo" id="modelo" class="form-control"> 
</div>  

<div class="form-group col-md-6">
  <label for="kilometraje">kilometraje</label>
    <input type="text" name="kilometraje" id="kilometraje" class="form-control"> 
</div>  


</div>

<div class="form-group">
  <label for="ubicacion">ubicacion</label>
    <input type="text" name="ubicacion" id="ubicacion" class="form-control"> 
</div>  

<div class="form-group">
  <label for="descripcion">descripcion</label>
    <textarea name="descripcion" id="descripcion" class="form-control"></textarea> 
</div>  

<div class="form-group">
  <label for="imgTrans">imgTrans</label>
    <input type="file" name="imgTrans" id="imgTrans"> 
</div>  
