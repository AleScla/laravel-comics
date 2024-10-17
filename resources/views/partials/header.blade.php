@php
    $links = [
        [
            'url' => '#',
            'label' => 'CHARACTERS',

        ],
        [
            'url' => '#',
            'label' => 'COMICS',

        ],
        [
            'url' => '#',
            'label' => 'MOVIES',
        ],
        [
            'url' => '#',
            'label' => 'TV',
        ],
        [
            'url' => '#',
            'label' => 'GAMES',
        ],
        [
            'url' => '#',
            'label' => 'COLLECTIBLES',
        ],
        [
            'url' => '#',
            'label' => 'VIDEOS',
        ],
        [
            'url' => '#',
            'label' => 'FANS',
        ],
        [
            'url' => '#',
            'label' => 'NEWS',
        ],
        [
            'url' => '#',
            'label' => 'SHOP',
        ],
    ];
@endphp

<header>
    <section id="links">
        <div class="container text-end">
            <span class="me-5">
                <a class="text-white text-decoration-none" href="#">DC POWER VISA</a>
            </span>
            <span>
                <a class="text-white text-decoration-none" href="#">ADDITIONAL DC SITES </a>
            </span>
        </div>
    </section>
    <section class="my-navbar">
        <div class="container">
            <nav class="w-100 d-flex align-items-center py-2">
                <div class="logo-container">
                    <a href="#">
                        <img src="/images/dc-logo.png" alt="DC_LOGO">
                    </a>
                </div>
                <ul class="d-flex w-100 flex-wrap justify-content-end">
                    @foreach ($links as $key => $link)
                        @if($key == 1)
                        <li>
                            <a class="text-decoration-none p-3 link-border" href="{{$link['url']}}">
                                {{$link['label']}}
                            </a>
                        </li>
                        @else
                        <li>
                            <a class="text-decoration-none p-3" href="{{$link['url']}}">
                                {{$link['label']}}
                            </a>
                        </li>
                        @endif

                    @endforeach
                    <li class="my-searchbar">
                        <input type="search" placeholder="Search">
                        <span class="input-group-search" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </li>
                </ul>

            </nav>
        </div>
    </section>
</header>
