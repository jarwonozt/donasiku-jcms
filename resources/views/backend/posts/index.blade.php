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
                                <livewire:post-table lazy/>
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

        window.addEventListener('showPostModal', event => {
            // console.log(event.detail[0].post);
            let post = event.detail[0].post;
            let title = post.title;
            let slug = post.slug;
            let content = post.content;
            let imageUrl = post.image;
            let author = post.created_by.name;
            let category = post.category.name;
            let tags = post.tags;

            // Update isi modal dengan data yang diterima
            document.getElementById('postTitle').innerText = title;
            document.getElementById('postContent').innerHTML = content;
            document.getElementById('postAuthor').innerHTML = author;
            document.getElementById('postCategory').innerHTML = category;

            // Update src atribut dari elemen gambar dan tampilkan gambar jika URL ada
            let postImage = document.getElementById('postImage');
            if (imageUrl) {
                postImage.src = imageUrl;
                postImage.style.display = 'block';
            } else {
                postImage.style.display = 'none';
            }

            // Tampilkan tags
            let postTags = document.getElementById('postTags');
            postTags.innerHTML = ''; // Kosongkan konten sebelumnya
            if (tags && tags.length > 0) {
                tags.forEach(tag => {
                    let tagElement = document.createElement('span');
                    tagElement.innerText = tag.name; // Asumsikan setiap objek tag memiliki properti name
                    tagElement.classList.add('badge', 'bg-secondary', 'me-1'); // Tambahkan kelas Bootstrap untuk styling
                    postTags.appendChild(tagElement);
                });
            }

            var showPost = new bootstrap.Modal(document.getElementById('showPostModal'), {
                    keyboard: true,
                    backdrop: false,
                });
                showPost.show();
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
