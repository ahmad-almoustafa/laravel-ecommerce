@props(['columns'])
<thead>

    <tr>
        @foreach ($columns as $column )
         <th class="border px-4 py-2">{{$column}}</th>   
        @endforeach
    </tr>
</thead>