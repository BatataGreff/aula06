<h1>Mensagem {{$mensagem->id}}</h1>
<hr>
<h3><b>Ref. Ativ.:</b> {{$mensagem->atividade->id}}</h3>
<br>
<h3><b>ID:</b> {{$mensagem->id}}</h3>
<h3><b>Autor:</b> {{$mensagem->autor}}</h3>
<h3><b>Título:</b> {{$mensagem->titulo}}</h3>
<h3><b>Texto:</b> {{$mensagem->texto}}</h3>
<h3><b>Atividade:</b> <a href="/atividades/{{$mensagem->atividade->id}}">{{$mensagem->atividade->id}} - {{$mensagem->atividade->title}}</a>
<h3><b>Criada em:</b> {{$mensagem->created_at}}</h3>
<h3><b>Atualizada em:</b> {{$mensagem->updated_at}}</h3>


    <!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->


