<form class="edit-post-form" action="{{ $route }}" method="POST">
    @csrf
    @if ($row != null)
        @method('PUT')
    @endif
    <div class="form-group">
        <label class="form-label">Name</label>
        <input name="name" type="text" class="form-control" placeholder="name" value="{{ isset($row) ? $row->name : '' }}">
    </div>
    <div class="form-group">
        <label class="form-label">Email</label>
        <input name="email" type="email" class="form-control"
            placeholder="example@user.com" value="{{ isset($row) ? $row->email : '' }}">
    </div>
    <div class="form-group">
        <label class="form-label">Upload Image</label>

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
    <div class="form-group">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">Role</label>
                    <select class="form-select" name="role">
                        <option value="employee">Employee</option>
                        <option value="guest">Guest</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="@lang('user.save')" class="btn btn-primary">
        <input type="submit" value="@lang('user.back')"
            class="btn btn-secondary">
    </div>
</form>
