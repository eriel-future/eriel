<form action="{{ url('empresa/'.$empresas->id.'/edit') }}" method="POST" enctype=”multipart/form-data”>
   @csrf
	@method('PUT')
   <input type="text" name="name" placeholder="Name" required>

   <button type="submit">Update Empresa</button>
</form>
