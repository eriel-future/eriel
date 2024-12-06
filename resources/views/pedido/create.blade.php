<form action="{{ url('pedido') }}" method="POST">
   @csrf
   <input type="number" name="codigo" placeholder="codigo" required>

   <button type="submit">Create Pedido</button>
</form>
