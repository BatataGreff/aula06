<h1>Atividade {{$atividade->id}}</h1>
	<h3><b>ID:</b>{{$atividade->id}}</h3>
    <h3><b>Título:</b>{{$atividade->title}}</h3>
    <h3><b>Data do Evento:</b>{{$atividade->scheduledto}}</h3>
    <h3><b>Descrição:</b>{{$atividade->description}}</h3>
    <h3><b>Criada em:</b>{{$atividade->created_at}}</h3>
    <h3><b>Atualizada em:</b>{{$atividade->updated_at}}</h3>



<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->

<h1> mensagens relacionadas:</h1>
<table id="tabela" name="tabela"  class="table table-striped ">
            <thead>
               <tr>
                    <td>Data</td>
                    <td>Título</td>
                    <td>Texto</td>
                </tr>
            </thead>
            <tbody>
                @foreach($atividade->mensagens as $msg)
        	        <tr>
        	            <td>{{$msg->created_at->format("d/m/Y")}}</td>
        	            <td><a href="/mensagens/{{$msg->id}}">{{$msg->titulo}}</a></td>
        	            <td>{{$msg->texto}}</td>
        	        </tr>
                @endforeach
            </tbody>
</table>

<!-- \Carbon\Carbon::parse($a->scheduledto)->format('d/m/Y h:m')  -->