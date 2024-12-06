@foreach($livro as $livros)
   <div>
       <h3>{{ $livros->titulo }}</h3>
       <p>{{ $livros->autor }}</p>
       <a href="{{ url('livro/'.$livros->id.'/edit') }}">Edit</a>
       <form action="{{ url('livro/'.$livros->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">Delete</button>
       </form>
   </div>
@endforeach
