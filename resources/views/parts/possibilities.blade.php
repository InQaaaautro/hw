<div class="col-lg-6 col-xxl-4 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img style="height: 205px" class="card-img-top" src="{{asset('assets/nir.jpg')}}">
        <div class="card-body">
            <h5 class="card-title">{{ __('main.nir') }}</h5>
            <p class="card-text">{{ __('main.summary') }} </p>
            <a href="{{ (route('scientific_works.index', ['locale'=>$locale]) )}}" class="btn btn-primary">{{ __('main.nir') }}</a>
        </div>
    </div>
</div>
