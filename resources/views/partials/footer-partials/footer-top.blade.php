@php
    $links = [
        [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News'
        ],
        [
            'Shop DC',
            'Shop DC Collectibles',
        ],
        [
            'Terms Of Use',
            'Privacy policy(New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Workshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us'
        ],
        [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa',
        ],

    ]
@endphp


<section id="footer-top" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <ul>
                    <li class="fs-5 fw-bold text-uppercase">DC Comics</li>
                    @for ($i = 0; $i < count($links[0]); $i++)
                        <li>
                            <a href="#">{{$links[0][$i]}}</a>
                        </li>
                    @endfor
                </ul>
                <ul>
                    <li class="fs-5 fw-bold text-uppercase">Shop</li>
                    @for ($i = 0; $i < count($links[1]); $i++)
                        <li>
                            <a href="#">{{$links[1][$i]}}</a>
                        </li>
                    @endfor
                </ul>
            </div>

            <div class="col-2">
                <ul>
                    <li class="fs-5 fw-bold text-uppercase">DC</li>
                    @for ($i = 0; $i < count($links[2]); $i++)
                        <li>
                            <a href="#">{{$links[2][$i]}}</a>
                        </li>
                    @endfor
                </ul>
            </div>
            <div class="col-8">
                <ul>
                    <li class="fs-5 fw-bold text-uppercase">Sites</li>
                    @for ($i = 0; $i < count($links[3]); $i++)
                        <li>
                            <a href="#">{{$links[3][$i]}}</a>
                        </li>
                    @endfor
                </ul>
            </div>


            <div class="col-12">
                <p class="mb-0">
                    All Site Content TM and <i class="fa-regular fa-copyright"></i> 2020 DC Entertainment, unless otherwhise
                    <a href="#">noted here</a>. All Rights reserved.
                </p>
                <a href="#">Cookies Settings</a>
            </div>
        </div>
    </div>
</section>
