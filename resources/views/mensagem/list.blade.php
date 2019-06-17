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
	@auth
	<a href="/mensagens/{{$mensagem->id}}/edit"> Editar a mensagem {{$mensagem->id}}<a/>
	<a href="/mensagens/{{$mensagem->id}}/delete"> Deletar a mensagem {{$mensagem->id}}<a/>
	@endauth
@endforeach
@auth
<br>
<h2> <a href="/mensagens/create">Criar Nova Mensagem</a></h2>
<br>
@endauth
<h2> <a href="/atividades">ir para a Atividade</a></h2>
<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->

