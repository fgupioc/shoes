<!DOCTYPE html>
<html lang="en">
	@if (Auth::user()->administrador->type_admin->abreviado== 'AG')
		@include('admin.admin-general')
	@elseif(Auth::user()->administrador->type_admin->abreviado == 'AI')
		@include('admin.admin-institucion')
	@else
		@include('admin.admin-tienda')
	@endif
</html>
