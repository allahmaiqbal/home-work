@props([
    'name', // item name
    'icon' => $slot->isNotEmpty() ? '' : 'far fa-circle', // item icon
    'to' => '#', // link url
    'isActive' => false, // current menu is active /not
])



@empty($name)
    @php
        throw new Exception('Name prop is required');
    @endphp
@endempty

<li @class([
    'nav-item', //  all common class
    'menu-open' => $isActive && $slot->isNotEmpty(),
])>
    <a href="{{ $to }}" @class([
        'nav-link', //all common class
        'active' => $isActive,
    ])>
        <i class="nav-icon {{ $icon }}"></i>
        <p>
            {{ $name }}
            @if ($slot->isNotEmpty())
                <i class="right fas fa-angle-left"></i>
            @endif
        </p>
    </a>

    @if ($slot->isNotEmpty())
        <ul class="nav nav-treeview">
            {{ $slot }}
        </ul>
    @endif
</li>
{{-- @props([
    'name', //name
    'icon' => 'fas fa-tachometer-alt', //icon
    'to' => '#', //url link
    'isActive' => false,
])
  <li @class([
      'nav-item', //  common  all class
      'menu-open' => $isActive,
  ])>
      <a href="{{ $to }}" @class([
          'nav-link', // common all class
          'active' => $isActive,
      ])>
          <i class="nav-icon fas {{ $icon }}"></i>
          <p>
              {{ $name }}
              @if ($slot->isNotEmpty())
                  <i class="right fas fa-angle-left"></i>
              @endif
          </p>
      </a>

      @if ($slot->isNotEmpty())
          <ul class="nav nav-treeview">
              {{ $slot }}
          </ul>
      @endif
  </li> --}}
