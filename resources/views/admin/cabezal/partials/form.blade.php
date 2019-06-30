<div class="form-group">
	<label for="name_marca">name_marca</label>
    <input type="text" name="name_marca" id="name_marca" class="form-control"> 
</div>	

<div class="form-group">
	<label for="modelo">modelo</label>
    <input type="text" name="modelo" id="modelo" class="form-control"> 
</div>	

<div class="form-group">
	<label for="type_motor">type_motor</label>
    <input type="text" name="type_motor" id="type_motor" class="form-control"> 
</div>	

<div class="form-group">
	<label for="type_camarote">type_camarote</label>
    <input type="text" name="type_camarote" id="type_camarote" class="form-control"> 
</div>	

<div class="form-group">
	<label for="type_caja">type_caja</label>
    <input type="text" name="type_caja" id="type_caja" class="form-control"> 
</div>	

<div class="form-group">
	<label for="type_llantas">type_llantas</label>
    <input type="text" name="type_llantas" id="type_llantas" class="form-control"> 
</div>	

<div class="form-group">
	<label for="type_freno">type_freno</label>
    <input type="text" name="type_freno" id="type_freno" class="form-control"> 
</div>	

<div class="form-group">
	<label for="color">color</label>
    <input type="text" name="color" id="color" class="form-control"> 
</div>	

<div class="form-group">
	<label for="type_ejes">type_ejes</label>
    <input type="text" name="type_ejes" id="type_ejes" class="form-control"> 
</div>	

<div class="form-group">
	<label for="ubication">ubication</label>
    <input type="text" name="ubication" id="ubication" class="form-control"> 
</div>	

<div class="form-group">
	<label for="price">price</label>
    <input type="text" name="price" id="price" class="form-control"> 
</div>	

<div class="form-group">
	<label for="state_cabezal">state_cabezal</label>
    <input type="text" name="state_cabezal" id="state_cabezal" class="form-control"> 
</div>	


<div class="form-group">
@foreach($users as $user)
	<label for="user_id">Usuario</label>
    <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $user->id }}"> 
@endforeach
</div>	


<div class="form-group">
@foreach($categories as $cat)
	<label for="state_cabezal">Categoria</label>
    <input type="text" name="category_id" id="category_id" class="form-control" value="{{ $cat->id }}"> 
@endforeach
</div>	


<div class="form-group">
	<label for="imgCabezal">imgCabezal</label>
    <input type="file" name="imgCabezal" id="imgCabezal"> 
</div>	
