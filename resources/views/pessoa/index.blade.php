
@foreach($pessoa as $pessoas)
   <div>
       <h3>{{ $pessoas->name }}</h3>
       <p>{{ $pessoas->idade }}</p>
       <a href="{{ url('pessoa/'.$pessoas->id.'/edit') }}">Edit</a>
       <form action="{{ url('pessoa/'.$pessoas->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">Delete</button>
       </form>
   </div>
@endforeach

