<div>
    <header class="blog-header">
        <div class="d-flex align-items-center">
            <a class="blogapp-title link-dark" href="#">
                <h1>{{ ucwords($title) }}</h1>
            </a>
        </div>
        <div class="blog-options-wrap">
        </div>
    </header>
    <div class="blog-body">
        <div data-simplebar class="nicescroll-bar">
            <form class="row" wire:submit='save'>
                <div class="col-12">
                    @error('files')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="input-group has-validation">
                        <input class="form-control" wire:model='files' type="file" wire:ignore>
                    </div>
                </div>
                <div class="col-4">
                    <button class="btn btn-primary" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
