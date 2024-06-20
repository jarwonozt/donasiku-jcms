<form class="edit-post-form" action="{{ $route }}" method="POST">
    @csrf
    @if ($row != null)
        @method('PUT')
    @endif
    <div class="form-group">
        <label class="form-label fw-bold">@lang('blog.form.title')</label>
        <input name="title" type="text" class="form-control" placeholder="@lang('blog.form.title')" value="{{ isset($row) ? $row->title : '' }}">
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">@lang('blog.form.category')</label>
        <select class="form-select" name="category_id">
            @foreach ($categories as $item)
                <option value="{{ $item->id }}" @isset($row) {{ $item->id == $row->category_id ? 'selected' : '' }} @endisset>{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">@lang('blog.form.preview')</label>
        <textarea name="preview" id="" rows="5" class="form-control">@isset($row){{ $row->preview }}@endisset</textarea>
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">@lang('blog.form.content')</label>
        <div class="card p-1">
            <textarea name="content" id="classic" rows="5">@isset($row){{ $row->content }}@endisset</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="form-label fw-bold">Upload Image</label>
        <div class="input-group mb-3">
            <input class="form-control" value="{{ isset($row) ? $row->image : '' }}" type="text" name="image" id="image" placeholder="Upload Image" required aria-label="Image" aria-describedby="button-image">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button" id="button-image"
                    data-input="image"><i
                        class="fas fa-folder-open"></i>
                    @lang('Browse')</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-6 col-lg-6">
            <div class="form-group">
                <label class="form-label fw-bold">Status</label>
                <select class="form-select" name="status">
                    <option value="active" @isset($row) {{ $row->status == 'active' ? 'selected' : '' }} @endisset>Active</option>
                    <option value="inactive" @isset($row) {{ $row->status == 'inactive' ? 'selected' : '' }} @endisset>Inactive</option>
                    <option value="pending" @isset($row) {{ $row->status == 'pending' ? 'selected' : '' }} @endisset>Pending</option>
                </select>
            </div>
        </div>
        <div class="col col-md-6 col-lg-6">
            <div class="form-group">
                <label for="tags" class="form-label fw-bold fw-bold">Tags</label>
                <select class="form-control select2" name="tags[]" multiple="multiple">
                    @isset($row)
                        @foreach ($row->tags as $item_tag_selected)
                            <option value="{{ $item_tag_selected->id }}" selected>{{ $item_tag_selected->name }}</option>
                        @endforeach
                    @endisset
                    @foreach ($tags as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="@lang('user.save')" class="btn btn-primary">
        <a class="btn btn-secondary" href="{{ route('posts.index') }}">@lang('user.back')</a>
    </div>
</form>
