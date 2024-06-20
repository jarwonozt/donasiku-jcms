<form class="edit-post-form" action="{{ $row != null ? $update : $store }}" method="POST">
    @csrf
    @if ($row != null)
        @method('PUT')
    @endif
    <div class="form-group">
        <label class="form-label">Application Name</label>
        <input name="name" type="text" class="form-control" placeholder="JCMS Laravel"
            value="{{ isset($row) ? $row->name : '' }}">
    </div>
    <div class="form-group">
        <label class="form-label">Email CS</label>
        <input name="email" type="email" class="form-control" placeholder="admin@jcms.laravel"
            value="{{ isset($row) ? $row->email : '' }}">
    </div>
    <div class="form-group">
        <label class="form-label">Phone CS</label>
        <input name="phone" type="number" class="form-control" placeholder="0812345678"
            value="{{ isset($row) ? $row->phone : '' }}">
    </div>
    <div class="form-group">
        <label class="form-label">Logo</label>
        <span class="badge badge-dark ms-1"><i class="fa fa-info-circle"></i> Direkomendasikan ukuran logo 300 x 70 pixel</span>
        <div class="py-2">
            <img src="{{ isset($row) ? $row->logo : asset('assets/dist/img/Jampack.svg') }}" alt="Image">
        </div>
        <div class="input-group mb-3">
            <input class="form-control" value="{{ isset($row) ? $row->logo : '' }}" type="text" name="logo"
                id="image" placeholder="Upload Image" required aria-label="Image" aria-describedby="button-image">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-image" data-input="image"><i
                        class="fas fa-folder-open"></i>
                    @lang('Browse')</button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="form-label">Address</label>
        <textarea name="address" class="form-control" id="address" cols="5" rows="3"
            placeholder="Jl. Sampoerna Hijau, Banyumas, Jawa Tengah 71237">{{ isset($row) ? $row->address : '' }}</textarea>
    </div>
    <div class="form-group">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control" id="description" cols="5" rows="3"
            placeholder="JCMS Laravel merupakan content management system yang dibuat untuk aplikasi laravel versi terbaru">{{ isset($row) ? $row->description : '' }}</textarea>
    </div>
    <div class="form-group">
        <label class="form-label">Keyword</label>
        <textarea name="keyword" class="form-control" id="keyword" cols="5" rows="3"
            placeholder="jcms, laravel, application, web, site, jarwonozt">{{ isset($row) ? $row->keyword : '' }}</textarea>
    </div>
    <div class="form-group">
        <label class="form-label">Author</label>
        <select class="form-select" name="author">
            @isset($authors)
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            @endisset
        </select>
    </div>

    <div class="form-group">
        <input type="submit" value="@lang('user.save')" class="btn btn-primary">
        <input type="submit" value="@lang('user.back')" class="btn btn-secondary">
    </div>
</form>
@push('scripts')
    <script type="module" src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script type="module">
        $('#button-image').filemanager('logo');
    </script>
@endpush
