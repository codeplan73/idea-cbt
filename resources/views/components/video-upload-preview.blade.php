<div class="mb-1">
    <label for="video_file" class="form-label">Upload Video <i class="bi-question-circle text-body ms-1"
            data-bs-toggle="tooltip" data-bs-placement="top"></i></label>

    <input type="file" accept="video/*" class="form-control @error('video_file') is-invalid @enderror" name="video_file"
        id="file" placeholder="Video File">

    <div id="file-preview" class="mt-2"></div>

    @error('video_file')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<script>
    // Get the file input element
    const fileInput = document.getElementById('file');

    // Get the preview div
    const previewDiv = document.getElementById('file-preview');

    // Event listener for file input change
    fileInput.addEventListener('change', function() {
        const file = fileInput.files[0]; // Get the selected file

        // Check if a file is selected
        if (file && file.type.startsWith('video/')) {
            const videoPreview = document.createElement('video'); // Create a video element for video preview
            videoPreview.width = '100%'; // Set the width to 100%
            videoPreview.controls = true; // Add controls to the video player

            const videoURL = URL.createObjectURL(file); // Create a blob URL for the selected video file
            videoPreview.src = videoURL; // Set the source of the video element to the blob URL

            // Clear any previous content in the preview div and append the video preview
            previewDiv.innerHTML = '';
            previewDiv.appendChild(videoPreview);
        } else {
            // Clear the preview div if no valid video file is selected
            previewDiv.innerHTML = '';
        }
    });
</script>
