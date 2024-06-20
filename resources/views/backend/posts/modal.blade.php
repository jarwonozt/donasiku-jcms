<div wire:ignore class="modal fade" id="showPostModal" tabindex="-1" role="op" aria-labelledby="exampleModalCenter" aria-hidden="true" style="z-index: 9999; overflow: visible !important; position: absolute !important;">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><h6 class="text-uppercase fw-bold" id="postTitle"></h6></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <img id="postImage" src="" alt="Image" style="float: left;
                margin: 5px; width:150px;height:150px;">
                <p id="postContent"></p>
                <div class="mt-4">
                    Author : <span class="fw-bold" id="postAuthor"></span><br>
                    Category : <span class="fw-bold" id="postCategory"></span><br>
                    Tags : <span class="fw-bold" id="postTags"></span>
                </div>
            </div>
			<div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<div wire:ignore class="modal fade" id="deleteConfirmModal" tabindex="-1" role="op" aria-labelledby="exampleModalCenter" aria-hidden="true" style="z-index: 9999;">
	<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"><h6 class="text-uppercase fw-bold">@lang('blog.delete')</h6></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                <p>@lang('blog.delete_confirm')</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" wire:click='deleted()'>@lang('blog.delete')</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">@lang('blog.cancel')</button>
			</div>
		</div>
	</div>
</div>
