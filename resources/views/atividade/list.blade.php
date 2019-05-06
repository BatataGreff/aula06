<h1>Lista de Atividades</h1>
<hr>

<!-- Exibe mens sucesso-->
@if (/Session::has('sucess')
<div class="container">
 <div class="alert alert-sucess">
   {{/Session::get('sucess')}}
   </div>
   </div>
   @endif

@foreach($atividades as $atividade)
	<h3>{{\Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')}}</h3>
	<h3>{{$atividade-> scheduletdo}}</h3>
	<p><a href="/$atividades/{{$atividade->id}}">{{$atividade->title}}</a> </p>
	<p>{{$a->title}}</p>
	<p>{{$a->description}}</p>
	<br>
@endforeach


<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->