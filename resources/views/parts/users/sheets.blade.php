<div class="col-lg-6 col-xxl-4 mb-5 d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <img style="height: 205px" class="card-img-top" src="{{asset('storage/assets/sheets.jpg')}}">
        <div class="card-body">
            <h5 class="card-title">{{ __('main.sheets') }}</h5>
            <p class="card-text">{{ __('main.summary') }} </p>
            <a href="{{ (route('sheets.index', ['locale' => $locale]) )}}"
               class="btn btn-primary">
                {{ __('main.sheets') }}
            </a>
        </div>
    </div>
</div>
