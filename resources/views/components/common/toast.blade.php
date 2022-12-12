@props([
      'message',
    'type' => 'info',
    'confirmation' => false,
    'autoHide' => false,
    'timer' => 3000,
    'position' => 'top-end',
])
@push('script')
      <script type="module">
      $(document).ready(function() {

          const Toast = Swal.mixin({
              toast: true,
              position: '{{ $position }}',
              showConfirmButton: {{ $confirmation ? 'true' : 'false' }},
              timer: {{ $autoHide ? $timer : 'false' }},
          });

          Toast.fire({
              icon: '{{ $type }}',
              title: '{{ $message }}'
          })
      })
   </script>
@endpush

