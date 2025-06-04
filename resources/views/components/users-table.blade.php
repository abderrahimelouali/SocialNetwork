<div>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>metier</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['nom'] }}</td>
                    <td>{{ $user['metier'] }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Pas des utilisateurs</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
