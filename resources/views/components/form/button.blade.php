@props([
    'type' => 'submit', // type: String
    'block' => false, // type: Boolean
    'primary' => false, // type: boolean
    'success' => false, // type: boolean
    'secondary' => false, // type: boolean
    'warning' => false, // type: boolean
    'danger' => false, // type: boolean
    'info' => false, // type: boolean
])

<button type="submit" @class([
    'btn', //
    'btn-block' => $block,
    'btn-primary' =>
        $primary or
        !$primary and
            !$success and
            !$secondary and
            !$warning and
            !$danger and
            !$info,
    'btn-success' => $success,
    'btn-secondary' => $secondary,
    'btn-warning' => $warning,
    'btn-danger' => $danger,
    'btn-info' => $info,
])>
    {{ $slot }}
</button>
