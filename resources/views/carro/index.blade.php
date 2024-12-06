@foreach($carro as $carros)
   <div>
       <h3>{{ $carros->modelo }}</h3>
       <p>{{ $carros->ano }}</p>
       <a href="{{ url('carro/'.$carros->id.'/edit') }}">Edit</a>
       <form action="{{ url('carro/'.$carros->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">Delete</button>
       </form>
   </div>
@endforeach
