<div wire:ignore class="modal fade" id="editCategoryModal" tabindex="-1" role="op" aria-labelledby="exampleModalCenter" aria-hidden="true" style="z-index: 9999;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><h6 class="text-uppercase fw-bold">@lang('category.edit')</h6></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="@lang('category.form.name')" wire:model.defer="name" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" wire:click='edited()'>@lang('category.save')</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">@lang('category.cancel')</button>
            </div>
        </div>
    </div>
</div>
<div wire:ignore class="modal fade" id="deleteConfirmModal" tabindex="-1" role="op" aria-labelledby="exampleModalCenter" aria-hidden="true" style="z-index: 9999;">
	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><h6 class="text-uppercase fw-bold">@lang('category.delete')</h6></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <p>@lang('category.delete_confirm')</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" wire:click='deleted()'>@lang('category.delete')</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">@lang('category.cancel')</button>
			</div>
		</div>
	</div>
</div>
