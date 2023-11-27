<!-- components/form-alert.blade.php -->
@if (session('message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'info',
                title: 'Notice!',
                text: '{{ session('message') }}'
            });
        });
    </script>
@endif
