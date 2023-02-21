<div class="car-wrap rounded ftco-animate fadeInUp ftco-animated">
    <div class="img rounded d-flex align-items-end"
        style="background-image: url(/landing-page/images/car-{{ rand(1, 12) }}.jpg);">
    </div>
    <div class="text">
        <h2 class="mb-0"><a href="car-single.html">{{ $car->car_name }}</a></h2>
        <div class="d-flex mb-3">
            <span class="cat">{{ $car->car_type }}</span>
            <p class="price ml-auto">$ {{ $car->car_price }}<span>/day</span></p>
        </div>
        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book
                now</a> <a href="{{ route('main.detail', [
                    'car' => $car->id,
                ]) }}"
                class="btn btn-secondary py-2 ml-1">Details</a></p>
    </div>
</div>
