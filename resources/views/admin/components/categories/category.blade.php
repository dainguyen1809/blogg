<div class="col-lg-6 col-xl-3">
    <a href="{{ route('admin.categories') }}">
        <div class="card shadow-lg bg-white rounded">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h4 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">
                            <span class="uil-file-info-alt"></span>
                            {{ __('Categories') }}
                        </h4>
                        <h3 class="my-2 py-1 text-muted">{{ $categoryCount }}</h3>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <div id="campaign-sent-chart" data-colors="#3280e8"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
