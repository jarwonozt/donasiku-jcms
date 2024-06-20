<x-app-layout>
    @section('title')
        {{ ucwords($title) }}
    @endsection
    <div class="hk-pg-body py-0">
        <div class="blogapp-wrap">
            <div class="blogapp-content">
                <div class="blogapp-detail-wrap">
                    <livewire:file-upload />
                    <x-z-header-content title="{{ $title }}" url="{{ $action }}" />
                    @if (session()->has('message'))
                        <div class="alert alert-success mt-2" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if (session('delete'))
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ session('delete') }}
                        </div>
                    @endif
                    <div class="blog-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="post-list">
                                <livewire:files />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            window.addEventListener('editOpenModal', event => {
                $("#editOpenModal").modal('show');
            });
            window.addEventListener('deleteSelectedConfirmModal', event => {
                $("#deleteSelectedConfirmModal").modal('show');
            });

            window.addEventListener('closeDeleteSelectedConfirmModal', event => {
                $("#deleteSelectedConfirmModal").modal('hide');
            });
            window.addEventListener('deleteConfirmModal', event => {
                var myModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal'), {
                    keyboard: true,
                    backdrop: false,
                });
                myModal.show();
            });
            window.addEventListener('closeDeleteConfirmModal', event => {
                $("#deleteConfirmModal").modal('hide');
            });
        </script>
    @endpush
</x-app-layout>
