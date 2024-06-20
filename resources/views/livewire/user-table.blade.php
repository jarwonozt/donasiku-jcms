<div>
    <div class="row mb-2">
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Search..." wire:model.live='search'>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Avatar</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $item)
                <tr>
                    <th scope="row">
                        {{-- {{ $item->id }} --}}
                        <div class="avatar avatar-rounded avatar-xs">
                            <img src="{{ $item->image ?? $item->avatar }}" alt="user" class="avatar-img">
                        </div>
                    </th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <div class="badge badge-dark">{{ $item->getRoleNames()[0] ?? 'null' }}</div>
                    </td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="d-flex">
                                <a class="btn btn-icon" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Edit" href="{{ route('users.edit', $item->id) }}"><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                                <a class="btn btn-icon del-button" data-bs-toggle="tooltip" data-placement="top" title="" data-bs-original-title="Delete" href="#" wire:click='delete({{ $item->id }})'><svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center p-2">Data not found !</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div>
        {{ $users->links() }}
    </div>
</div>
