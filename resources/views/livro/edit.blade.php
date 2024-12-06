<form action="{{ url('livro/'.$livros->id.'/edit') }}" method="POST" enctype=”multipart/form-data”>
   @csrf
	@method('PUT')
   <input type="text" name="titulo" placeholder="Titulo" required>
   <input type="text" name="autor" placeholder="Autor" required>

   <button type="submit">Update Livro</button>
</form>
