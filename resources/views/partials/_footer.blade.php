<script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{ asset('vendors/is/is.min.js') }}"></script>
<script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
<script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
<script src="{{ asset('polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
<script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>

<script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/quill/quill.min.js') }}"></script>


<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow' // You can choose a different theme or customize it further
    });

    var textarea = document.getElementById('my-textarea');
    quill.on('text-change', function() {
        textarea.value = quill.root.innerHTML;
    });

    // Set initial content if needed
    var initialContent = '';
    quill.clipboard.dangerouslyPasteHTML(initialContent);

    var content = textarea.value;
</script>
