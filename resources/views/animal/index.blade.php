@foreach($animal as $animais)
   <div>
       <h3>{{ $animais->name }}</h3>
       <p>{{ $animais->especie }}</p>
       <a href="{{ url('animal/'.$animais->id.'/edit') }}">Edit</a>
       <form action="{{ url('animal/'.$animais->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">Delete</button>
       </form>
   </div>
@endforeach
