@extends('admin.layout')

@section('content')
    <h1>Edit {{ ucfirst($page->slug) }} Page</h1>

    <div class="mb-3">
        <button id="save-button" class="btn btn-primary">Save Changes</button>
        <button id="reset-button" class="btn btn-warning ml-2">Reset to Original</button>
    </div>

    <div id="editable-content" class="editable">
        {!! $content !!}
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var editor = new MediumEditor('#editable-content', {
            toolbar: {
                buttons: ['bold', 'italic', 'underline', 'anchor', 'h2', 'h3', 'quote']
            },
            placeholder: {
                text: 'Type your content here'
            }
        });

        $('#save-button').click(function() {
            var content = $('#editable-content').html();
            var images = [];

            $('#editable-content img').each(function(index) {
                var src = $(this).attr('src');
                if (src.startsWith('data:image')) {
                    images.push(src.split(',')[1]);
                }
            });

            $.ajax({
                url: '{{ route("admin.page.update", $page->slug) }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    content: content,
                    images: images
                },
                success: function(response) {
                    if (response.success) {
                        alert('Content saved successfully!');
                    }
                },
                error: function() {
                    alert('An error occurred while saving the content.');
                }
            });
        });

        $('#reset-button').click(function() {
            if (confirm('Are you sure you want to reset to the original content?')) {
                location.reload();
            }
        });

        // Image upload handling
        $(document).on('click', '#editable-content img', function() {
            var $img = $(this);
            var input = $('<input type="file" accept="image/*" style="display: none;">');
            input.click();

            input.on('change', function() {
                var file = this.files[0];
                var formData = new FormData();
                formData.append('image', file);
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    url: '{{ route("admin.upload") }}',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $img.attr('src', 'data:image/png;base64,' + response.data);
                    },
                    error: function() {
                        alert('An error occurred while uploading the image.');
                    }
                });
            });
        });
    });
</script>
@endsection
