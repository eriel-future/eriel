<form action="{{ url('livro') }}" method="POST">
   @csrf
   <input type="text" name="titulo" placeholder="Titulo" required>
   <input type="text" name="autor" placeholder="Autor" required>

   <button type="submit">Create Livro</button>
</form>

