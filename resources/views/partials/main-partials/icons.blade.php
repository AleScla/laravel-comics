
@php
    $icons = [
        [
            'url'=>'/images/buy-comics-digital-comics.png',
            'label' => 'Digital Comics',
        ],
        [
            'url'=>'/images/buy-comics-merchandise.png',
            'label' => 'DC Merchandise',
        ],
        [
            'url'=>'/images/buy-comics-subscriptions.png',
            'label' => 'Subscription',
        ],
        [
            'url'=>'/images/buy-comics-shop-locator.png',
            'label' => 'Comic Shop Locator',
        ],
        [
            'url'=>'/images/buy-dc-power-visa.svg',
            'label' => 'DC Power Visa',
        ],

    ]
@endphp
<section id="icons" class="py-5">
    <div class="container">
        <div class="row justify-content-between">
            @foreach($icons as $icon)
                <div class="my-col">
                    <div class="img-container">
                        <img src="{{$icon['url']}}" alt="{{$icon['label']}}">
                        <span class="font-uppercase">{{$icon['label']}}</span>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>
