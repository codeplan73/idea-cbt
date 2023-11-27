<!-- components/form-alert.blade.php -->
@if (session('message'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('message') }}'
            });
        });
    </script>
@endif
