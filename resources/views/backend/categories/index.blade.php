<x-app-layout>
    @section('title')
        {{ ucwords($title) }}
    @endsection
    <div class="hk-pg-body py-0">
        <div class="blogapp-wrap">
            <div class="blogapp-content">
                <div class="blogapp-detail-wrap">
                    <header class="blog-header">
                        <div class="d-flex align-items-center">
                            <a class="blogapp-title link-dark" href="#">
                                <h1>Data {{ ucwords($title) }}</h1>
                            </a>
                        </div>
                        <div class="blog-options-wrap">
                            <a href="#" class="btn btn-gradient-dark btn-animated ms-3" id="openCreateCategoryModal">{{ $create }}</a>
                            <div class="modal fade" id="createCategoryModal" tabindex="-1" role="op" aria-labelledby="exampleModalCenter" aria-hidden="true" style="z-index: 9999;">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"><h6 class="text-uppercase fw-bold">@lang('category.create')</h6></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('categories.store') }}" method="POST">
                                            <div class="modal-body">
                                                @csrf
                                                <input type="text" name="name" placeholder="@lang('category.form.name')" class="form-control">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">@lang('category.save')</button>
                                                <button class="btn btn-secondary" data-bs-dismiss="modal">@lang('category.cancel')</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover hk-navbar-togglable flex-shrink-0  d-lg-inline-block d-none"
                                href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                data-bs-original-title="Collapse">
                                <span class="icon">
                                    <span class="feather-icon"><i data-feather="chevron-up"></i></span>
                                    <span class="feather-icon d-none"><i data-feather="chevron-down"></i></span>
                                </span>
                            </a>
                        </div>
                    </header>
                    @if (session()->has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="blog-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="post-list">
                                <livewire:category-table lazy/>
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

        // create category
        document.getElementById('openCreateCategoryModal').addEventListener('click', function () {
            var myModal = new bootstrap.Modal(document.getElementById('createCategoryModal'), {
                keyboard: true,
                backdrop: false,
                focus: true,
            });
            myModal.show();
        });

        // edit category
        window.addEventListener('editCategoryModal', event => {
            var myModal = new bootstrap.Modal(document.getElementById('editCategoryModal'), {
                    keyboard: true,
                    backdrop: false,
                    focus: true,
                });
            myModal.show();
        });
        window.addEventListener('closeEditedConfirmModal', event => {
            $("#editCategoryModal ").modal('hide');
        });

        // delete category
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
