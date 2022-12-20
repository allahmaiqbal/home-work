  @props([
    'name', //name
    'icon' => 'fas fa-tachometer-alt', //icon
    'to' => '#', //url link
])
  @empty($name)
      @php
          throw new Exception('name is required');
      @endphp
  @endempty

  <li class="nav-item menu-open">
      <a href="{{ $to }}" class="nav-link active">
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
