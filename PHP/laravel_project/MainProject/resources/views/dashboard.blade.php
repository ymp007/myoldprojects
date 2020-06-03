
		<h1>Todo list</h1>
		@foreach($tasks as $t)
			<h1>{{$t->title}}</h1>
			<p>{{$t->description}}</p>
			<h3>{{$t ->deadline}}</h3>
		@endforeach
