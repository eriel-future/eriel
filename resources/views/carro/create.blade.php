<form action="{{ url('carro') }}" method="POST" enctype=”multipart/form-data”>
   @csrf
	@method('PUT')
   <input type="text" name="modelo" placeholder="Modelo" required>
   <input type="number" name="ano" placeholder="Ano" required>

   <button type="submit">Create Carro</button>
</form>

