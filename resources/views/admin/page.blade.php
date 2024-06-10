@extends('admin.layout')

@section('content')
    <h1>Edit {{ ucfirst($page->slug) }} Page</h1>

    <form action="{{ route('admin.page.update', $page->slug) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="summernote">{!! $page->content !!}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        uploadImage(files[i]);
                    }
                }
            }
        });

        function uploadImage(file) {
            var formData = new FormData();
            formData.append('image', file);

            $.ajax({
                url: '{{ route('admin.upload') }}',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(data) {
                    var image = $('<img>').attr('src', data.url);
                    $('#summernote').summernote('insertNode', image[0]);
                },
                error: function(data) {
                    console.error(data);
                }
            });
        }
    });
</script>
@endsection
