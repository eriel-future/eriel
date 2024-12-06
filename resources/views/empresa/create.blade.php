<form action="{{ url('empresa') }}" method="POST">
   @csrf
   <input type="text" name="name" placeholder="Name" required>

   <button type="submit">Create Empresa</button>
</form>
