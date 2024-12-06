<form action="{{ url('animal/'.$animais->id.'/edit') }}" method="POST" enctype=”multipart/form-data”>
   @csrf
	@method('PUT')
   <input type="text" name="name" placeholder="Name" required>
   <input type="text" name="especie" placeholder="Especie" required>

   <button type="submit">Update Animal</button>
</form>
