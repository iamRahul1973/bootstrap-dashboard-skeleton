<li class="nav-item">
    @php
        $active = (\Request::route()->getPrefix() === $prefix);
    @endphp
    <a href="{{ route($route) }}" 
        class="nav-link {{ $active ? 'active' : 'text-white' }} {{ !empty($subMenus) ? 'collapsed hassubmenu' : '' }}" 
        @if (!empty($subMenus))
            data-bs-toggle="collapse" data-bs-target="#{{ Str::slug($label) }}-collapse" aria-expanded="{{ $active ? 'true' : 'false' }}"
        @else
            aria-current="page"
        @endif>
        <svg class="bi me-2" width="16" height="16">
            <use xlink:href="{{ asset('icons/bootstrap-icons.svg') }}#{{ $icon }}" />
        </svg>
        {{ $label }}
    </a>
    @if (!empty($subMenus))
        <div class="collapse {{ $active ? 'show' : '' }}" id="{{ Str::slug($label) }}-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1">
                @foreach ($subMenus as $key => $value)
                    <li>
                        <a href="{{ route($key) }}" class="text-white {{ ($active && (\Request::route()->getName() === $key)) ? 'active' : '' }}">
                            <svg class="bi me-2 mt-1" width="12" height="12">
                                <use xlink:href="{{ asset('icons/bootstrap-icons.svg') }}#chevron-right" />
                            </svg>
                            {{ $value }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</li>