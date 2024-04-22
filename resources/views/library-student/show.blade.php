@extends('layouts.app_student')

@section('content')
    <div class="container">
        <div class="content">
            <div class="row g-3">
                <div class="col-mg-12 col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header position-relative">
                            <h3 class="mb-0 mt-1">Library Book</h3>
                            <div class="bg-holder d-none d-md-block bg-card"
                                style="
                      background-image: url({{ asset('assets/img/illustrations/corner-6.png') }});
                    ">
                            </div>
                            <!--/.bg-holder-->
                        </div>
                    </div>
                    <div class="row mb-3 g-3">
                        <article class="col-md-12">
                            <div class="card h-100 overflow-hidden">
                                <div class="card-body p-0 d-flex flex-column justify-content-between">
                                    <div class="p-3">
                                        <h2 class="fs-0 fw-bold mb-2">
                                            Name: {{ $library->name }}
                                        </h2>
                                        <h5 class="fs-0">
                                            Date: {{ $library->date_ }}
                                        </h5>
                                    </div>
                                    <div class="col-12 mb-2 p-3">

                                        <div class="col-12 mb-2">
                                            <iframe id="pdfViewer" src="{{ url('storage/' . $library->library_pdf) }}"
                                                style="width: 100%; height: 500px;" frameborder="0"></iframe>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Add PDF.js script -->
    <script src="{{ asset('node_modules/pdfjs-dist/build/pdf.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Disable right-click on the entire document
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
            });

            // Disable copy event
            document.addEventListener('copy', function(e) {
                e.preventDefault();
                alert('Copying is disabled on this webpage.');
            });

            // Disable keyboard shortcuts for copy, paste, and save
            document.addEventListener('keydown', function(e) {
                // Check for CTRL+C, CTRL+V, CTRL+S (and command key for Mac)
                if ((e.ctrlKey || e.metaKey) && (e.key === 'c' || e.key === 'v' || e.key === 's')) {
                    e.preventDefault();
                    alert(`Shortcut for ${e.key.toUpperCase()} is disabled.`);
                }
                // Optional: Disable CTRL+P for printing
                if ((e.ctrlKey || e.metaKey) && e.key === 'p') {
                    e.preventDefault();
                    alert('Printing is disabled on this webpage.');
                }
            });
        });


        // Function to render PDF using PDF.js
        function renderPDF(url, canvasContainer) {
            pdfjsLib.getDocument(url).promise.then(pdf => {
                // Fetch the first page
                pdf.getPage(1).then(page => {
                    // Set scale and viewport
                    const scale = 1.5;
                    const viewport = page.getViewport({
                        scale
                    });

                    // Get the canvas container for rendering the PDF
                    const canvas = document.createElement('canvas');
                    canvasContainer.appendChild(canvas);

                    // Set canvas dimensions
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Render the PDF page on the canvas
                    page.render({
                        canvasContext: canvas.getContext('2d'),
                        viewport: viewport
                    });
                });
            });
        }


        const pdfFrame = document.getElementById('pdfViewer');

        pdfFrame.contentDocument.oncontextmenu = function(event) {
            event.preventDefault();
            return false;
        };

        pdfFrame.contentDocument.onselectstart = function(event) {
            event.preventDefault();
            return false;
        };

        const overlayDiv = document.createElement('div');
        overlayDiv.style.position = 'absolute';
        overlayDiv.style.top = '0';
        overlayDiv.style.left = '0';
        overlayDiv.style.width = '100%';
        overlayDiv.style.height = '100%';
        overlayDiv.style.pointerEvents = 'none';
        overlayDiv.innerHTML = 'Copying is prohibited';
        pdfFrame.contentDocument.body.appendChild(overlayDiv);
    </script>
@endsection
