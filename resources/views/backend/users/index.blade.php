<x-app-layout>
    @section('title')
        {{ ucwords($title) }}
    @endsection
    <div class="hk-pg-body py-0">
        <div class="blogapp-wrap">
            <div class="blogapp-content">
                <div class="blogapp-detail-wrap">
                    <x-z-header-content title="{{ $title }}" create="{{ $create }}" url="{{ $action }}"/>
                    @if (session()->has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="blog-body">
                        <div data-simplebar class="nicescroll-bar">
                            <div class="post-list">
                                <livewire:user-table lazy/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
