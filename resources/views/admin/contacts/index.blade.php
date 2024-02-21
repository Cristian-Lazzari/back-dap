<x-app-layout>
    <div class="mycontainer">

        <table class="table">
            <tr class="" >
                <th class="" >Id</th>
                <th class="" >Nome e Cognome</th>
                <th class="" >Mail</th>
                <th class="" >Messaggio</th>
                <th class="" >Data-ora invio</th>
            </tr>
            @foreach ($contacts as $item)
            <tr class="" >
                <td class="" >{{$item->id}}</td>
                <td class="" >{{$item->name}}</td>
                <td class="" >{{$item->mail}}</td>
                <td class="" >{{$item->message}}</td>
                <td class="" >{{$item->created_at}}</td>
            </tr>
    
            @endforeach
        </table>
    </div>
</x-app-layout>