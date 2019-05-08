<h1>Lista de Atividades</h1>
<hr>


@foreach($atividades as $atividade)
	<h3>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</h3>
	<p><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a> </p>
	<p>{{$atividade->title}}</p>
	<p>{{$atividade->description}}</p>
	<br>
@endforeach

<a href="/atividades/create">Criar Nova Atividade</a>
<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->


