 @props([
    'name', //all sub item name
    'icon' => 'far fa-circle', // all item icon
    'to' => '#', // url
    'isActive' => false, // item is active or /not
])

 <li class="nav-item">
     <a href="{{ $to }}" @class([
         'nav-link', // common all classes
         'active' => $isActive, // current item is active or/ not
     ])>
         <i class="nav-icon {{ $icon }}"></i>
         <p>{{ $name }}</p>
     </a>
 </li>
