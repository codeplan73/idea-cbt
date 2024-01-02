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

{{-- <script>
    console.log(file.type);

    // Get the file input element
    const fileInput = document.getElementById('file');

    // Get the preview div
    const previewDiv = document.getElementById('file-preview');

    // Event listener for file input change
    // ... (existing code)

    // Event listener for file input change
    fileInput.addEventListener('change', function() {
        const file = fileInput.files[0]; // Get the selected file

        console.log('File:', file); // Log the file object

        // Check if a file is selected
        if (file && file.type.startsWith('video/')) {
            console.log('File type is video.'); // Log that the file is recognized as a video

            const reader = new FileReader(); // Create a new FileReader object

            // Read the file as Data URL
            reader.readAsDataURL(file);

            const title = file.name;
            const size = file.size

            console.log(title, size)

            // Event listener when file reading is completed
            reader.onloadend = function() {
                console.log('File reading completed.'); // Log that file reading is completed

                const videoPreview = document.createElement(
                    'video'); // Create a video element for video preview
                videoPreview.src = reader
                    .result; // Set the source of the video element to the video data URL
                videoPreview.width = '100%'; // Set the width to 100%
                videoPreview.controls = true; // Add controls to the video player

                // Clear any previous content in the preview div and append the video preview
                previewDiv.innerHTML = '';
                previewDiv.appendChild(videoPreview);
            };
        } else {
            console.log('No valid video file selected.'); // Log that no valid video file is selected

            // Clear the preview div if no valid video file is selected
            previewDiv.innerHTML = '';
        }
    });
</script> --}}
