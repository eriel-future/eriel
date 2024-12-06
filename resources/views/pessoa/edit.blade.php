
<form action="{{ url('pessoa/'.$pessoas->id.'/edit') }}" method="POST" enctype=”multipart/form-data”>
   @csrf
	@method('PUT')
   <input type="text" name="name" placeholder="Name" required>
   <input type="number" name="idade" placeholder="Idade" required>

   <button type="submit">Update Pessoa</button>
</form>
