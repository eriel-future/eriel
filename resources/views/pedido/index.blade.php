@foreach($pedido as $pedidos)
   <div>
       <h3>{{ $pedidos->codigo }}</h3>
       <a href="{{ url('pedido/'.$pedidos->id.'/edit') }}">Edit</a>
       <form action="{{ url('pedido/'.$pedidos->id) }}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">Delete</button>
       </form>
   </div>
@endforeach
