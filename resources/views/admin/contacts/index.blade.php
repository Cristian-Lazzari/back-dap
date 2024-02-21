<x-app-layout>
    <div class="mycontainer">

        <table class="table">
            <tr class="" >
                <th class="" >Id</th>
                <th class="" >Nome e Cognome</th>
                <th class="" >Mail</th>
                <th class="" >telefono</th>
                <th class="" >N mail</th>
                <th class="" >Data-ora invio</th>
            </tr>
            @foreach ($contacts as $item)
            <tr class="" >
                <td class="" >{{$item->id}}</td>
                <td class="" >{{$item->name}}</td>
                <td class="" >{{$item->email}}</td>
                <td class="" >{{$item->phone}}</td>
                <td class="" >{{$item->counter}}</td>
                <td class="" >{{$item->created_at}}</td>
            </tr>
    
            @endforeach
        </table>
    </div>
</x-app-layout>