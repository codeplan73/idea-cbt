<!-- file-upload-preview.blade.php -->

<div class="mb-1">
    <label for="library_pdf" class="form-label">Upload File <i class="bi-question-circle text-body ms-1"
            data-bs-toggle="tooltip" data-bs-placement="top" title="Enter The Library Book as a pdf format"></i></label>

    <input type="file" accept=".pdf, .doc, .docx" class="form-control @error('library_pdf') is-invalid @enderror"
        name="library_pdf" id="file" placeholder="Library Document">

    <div id="file-preview" class="mt-2"></div>

    @error('library_pdf')
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
        if (file) {
            const reader = new FileReader(); // Create a new FileReader object

            // Read the file as Data URL
            reader.readAsDataURL(file);

            // Event listener when file reading is completed
            reader.onloadend = function() {
                const pdfPreview = document.createElement(
                    'embed'); // Create an embed element for PDF preview
                pdfPreview.src = reader.result; // Set the source of the embed element to the PDF data URL
                pdfPreview.width = '100%'; // Set the width to 100%
                pdfPreview.height = '400px'; // Set the height (adjust as needed)

                // Clear any previous content in the preview div and append the PDF preview
                previewDiv.innerHTML = '';
                previewDiv.appendChild(pdfPreview);
            };
        } else {
            // Clear the preview div if no file is selected
            previewDiv.innerHTML = '';
        }
    });
</script>
