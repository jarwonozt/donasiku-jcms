<x-app-layout>
    <div class="hk-pg-body py-0">
        <div class="blogapp-wrap">
            <div class="blogapp-content">
                <div class="blogapp-detail-wrap">
                    <x-z-header-form data="" title="{{ $title }}" action="{{ $action }}"
                        url="{{ $route }}" />
                    <x-error-alert/>
                    <div class="blog-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="post-list">
                                <div class="row">
                                    <div class="col">
                                        @include('backend.users.form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <link href="{{ asset('assets') }}/vendors/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css" />
    @endpush

    @push('scripts')
        <script type="module" src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
        <script type="module">
            $('#button-image').filemanager('image');
        </script>
        <script src="{{ asset('assets') }}/vendors/dropify/dist/js/dropify.min.js"></script>
        <script src="{{ asset('assets') }}/dist/js/dropify-data.js"></script>
    @endpush
</x-app-layout>
