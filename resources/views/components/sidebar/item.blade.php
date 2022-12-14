  @props([
    'name', //name
    'icon' => 'fa-tachometer-alt', //icon
    'to' => '#', //url link
])

  <li class="nav-item menu-open">
      <a href="{{ $to }}" class="nav-link active">
          <i class="nav-icon fas {{ $icon }}"></i>
          <p>
              {{ $name }}
              <i class="right fas fa-angle-left"></i>
          </p>
      </a>
      @if ($slot->isNotEmpty())
          <ul class="nav nav-treeview">
              {{ $slot }}
          </ul>
      @endif

  </li>
