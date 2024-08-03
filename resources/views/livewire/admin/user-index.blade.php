<div>
    <div class="card">
        <div class="card-header">
            <input wire:model.live="search" type="text" class="form-control"
                placeholder="Ingrese el nombre o correo de un usuario...">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <strong>No se encontraron registros...</strong>
            </div>
        @endif
    </div>
</div>
