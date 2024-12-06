<form action="{{ url('pedido/'.$pedidos->id.'/edit') }}" method="POST" enctype=”multipart/form-data”>
   @csrf
	@method('PUT')
   <input type="number" name="codigo" placeholder="Codigo" required>

   <button type="submit">Update Pedido</button>
</form>
