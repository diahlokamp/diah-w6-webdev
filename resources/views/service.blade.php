@extends('base.base')
@section('content')
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark">Our Packages</h1>
            <p class="lead text-muted">Choose the perfect photobooth package for your special moment</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Package -->
            @foreach ($pricing_package as $item)
                <div class="col-md-6 col-lg-4">

                    @if ($item['Package Name'] === 'Premium Joy')
                        <div class="card h-100 border-warning shadow border-2">
                            <div class="card-header bg-warning text-dark text-center py-3 position-relative">
                                <span
                                    class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark text-warning border border-warning px-3 py-2 shadow-sm">
                                    Most Popular
                                </span>
                                <h4 class="my-0 fw-bold mt-2">{{ $item['Package Name'] }}</h4>
                            </div>
                            <div class="card-body bg-white text-center d-flex flex-column">
                                <h1 class="card-title pricing-card-title h3">
                                    Rp {{ number_format($item['Price'], 0, ',', '.') }}
                                    <small class="text-muted fw-light">/{{ $item['Duration'] }} hours</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4 text-start">
                                    @foreach ($item['Benefits'] as $benefit)
                                        <li class="py-2 border-bottom text-muted">✔️ {{ $benefit }}</li>
                                    @endforeach
                                </ul>
                                <button type="button"
                                    class="w-100 btn btn-lg btn-warning mt-auto">{{ $item['Button'] }}</button>
                            </div>
                        </div>
                    @else
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-header bg-secondary text-white text-center py-3">
                                <h4 class="my-0 fw-normal">{{ $item['Package Name'] }}</h4>
                            </div>
                            <div class="card-body bg-white text-center d-flex flex-column">
                                <h1 class="card-title pricing-card-title h3">
                                    Rp {{ number_format($item['Price'], 0, ',', '.') }}
                                    <small class="text-muted fw-light">/{{ $item['Duration'] }} hours</small>
                                </h1>
                                <ul class="list-unstyled mt-3 mb-4 text-start">
                                    @foreach ($item['Benefits'] as $benefit)
                                        <li class="py-2 border-bottom text-muted">✔️ {{ $benefit }}</li>
                                    @endforeach
                                </ul>
                                <button type="button"
                                    class="w-100 btn btn-lg btn-outline-dark mt-auto">{{ $item['Button'] }}</button>
                            </div>
                        </div>
                    @endif

                </div>
            @endforeach

        </div>

    </div>
@endsection
