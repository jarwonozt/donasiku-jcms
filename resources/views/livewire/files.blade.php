<div>
    <div class="row mb-2">
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Search..."
                wire:model.live='search'>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">File Name</th>
                    <th scope="col">File Type</th>
                    <th scope="col">File Size</th>
                    <th scope="col">Upload By</th>
                    <th scope="col">Upload Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($files as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->size > 1048576 ? round($item->size / (1024 * 1024)).' MB' : round($item->size / 1024).' KB' }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="d-flex">
                                    <a class="btn btn-icon del-button"
                                        data-bs-toggle="tooltip" data-placement="top"
                                        title="" data-bs-original-title="Delete"
                                        href="#"
                                        wire:click='delete({{ $item->id }})'><svg
                                            viewBox="0 0 24 24" width="24"
                                            height="24" stroke="currentColor"
                                            stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="css-i6dzq1">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                        </svg>
                                    </a>
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
        {{ $files->links() }}
    </div>
</div>
