@foreach($empresa as $empresas)
   <div>
       <h3>{{ $empresas->name }}</h3>
       <a href="{{ url('empresa/'.$empresas->id.'/edit') }}">Edit</a>
       <form action="{{ url('empresa/'.$empresas->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">Delete</button>
       </form>
   </div>
@endforeach
