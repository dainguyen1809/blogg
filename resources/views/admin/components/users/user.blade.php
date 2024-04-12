<div class="col-lg-6 col-xl-3">
    <a href="{{ route('admin.users') }}">
        <div class="card shadow-lg bg-white rounded">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h4 class="text-muted font-weight-normal mt-0 text-truncate" title="Deals">
                            <span class="uil-user"></span>
                            {{ __('Users') }}
                        </h4>
                        <h3 class="text-muted my-2 py-1">{{ $userCount }}</h3>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <div id="deals-chart" data-colors="#3280e8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
