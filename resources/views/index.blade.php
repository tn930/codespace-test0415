<table>
     <thead>
        <tr>
            <th>名前</th>
            <th>アドレス</th>
        </tr>
     </thead>
     <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
     </tbody>
</table>
