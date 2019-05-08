<h1>Lista de Mensagens</h1>
<hr>

@if (\Session::has('sucess'))
<div class="container">
 <div class="alert alert-sucess">
   {{\Session::get('sucess')}}
   </div>
   </div>
 @endif

@foreach($mensagens as $mensagem)
	<h3><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->titulo}}</a> </h3>
	<p>{{$mensagem->texto}}</p>
	<p>{{$mensagem->autor}}</p>
	<br>
@endforeach

<a href="/mensagens/create">Criar Nova Mensagem</a>
<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->

