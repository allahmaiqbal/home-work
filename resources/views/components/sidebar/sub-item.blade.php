     @props([
    'name', //name
    'icon' => 'far fa-circle', //icon
    'to' => '#', //url link
    'isActive' => true,
])
     <li class="nav-item">
         <a href="{{ $to }}" @class([
             'nav-link', //common class
             'active' => $isActive, //current value active or/not
         ])>
             <i class="{{ $icon }} nav-icon"></i>
             <p>{{ $name }}</p>
         </a>
     </li>
