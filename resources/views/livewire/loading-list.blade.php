
<div>
    <div class="table-responsive">
        <table class="table table-bordered border-gray-800">
            <thead class="bg-slate-100">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody class="bg-slate-100">
                @foreach($users as $user)
                    <trvkey={{ $user->id }}>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    {{-- In work, do what you enjoy. --}}

