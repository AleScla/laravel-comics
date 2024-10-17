@php
    $socialIcons = [
        '/images/footer-facebook.png',
        '/images/footer-periscope.png',
        '/images/footer-pinterest.png',
        '/images/footer-twitter.png',
        '/images/footer-youtube.png',
    ]
@endphp
<section id="footer-bottom" class="d-flex w-100 justify-content-between py-4">
    <div class="footer-left ps-5">
        <button class="text-uppercase">
            Sign-up now!
        </button>
    </div>
    <div class="footer-right pe-5 d-flex align-items-center">
        <h5 class="text-uppercase m-0 me-4">
            Follow Us
        </h5>
        @for ($i = 0; $i < count($socialIcons); $i++)
            <span class="px-2">
                <a href="#">
                    <img src="{{$socialIcons[$i]}}">
                </a>
            </span>
        @endfor
    </div>

</section>
