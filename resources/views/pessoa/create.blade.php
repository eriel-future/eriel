
<form action="{{ url('pessoa') }}" method="POST">
   @csrf
   <input type="text" name="name" placeholder="Name" required>
   <input type="number" name="idade" placeholder="Idade" required>

   <button type="submit">Create Pessoa</button>
</form>
