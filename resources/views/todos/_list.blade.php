@foreach($todos as $todo)
    <div class="card">
        <div class="card-header" style="display: flex;">
			<form action="{{ route('todos.destroy', $todo) }}" method="post" style="margin-right: 1em;">
				@csrf
				@method('DELETE')
				<button class="btn btn-danger btn-sm">Delete</button>
			</form>

			<a href="{{ route('todos.update', $todo) }}" class="btn btn-primary btn-sm" style="margin-right: 1em;">Update</a>
			
			<form action="{{ route('todo.toggle.compelete', $todo) }}" method="post">
				@csrf
				@method('PATCH')
				<button class="btn btn-{{ $todo->isCompelete() ? 'warning' : 'info' }} btn-sm text-white" >
					{{ $todo->isCompelete() ? 'Un Compelete' : 'Compelete' }}
				</button>
			</form>
        </div>
        <div class="card-body">
			{{ $todo->todo }}
        </div>
    </div>
    <br/>
@endforeach