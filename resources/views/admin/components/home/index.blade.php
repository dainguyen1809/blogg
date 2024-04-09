@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">
                                Campaign Sent
                            </h5>
                            <h3 class="my-2 py-1">9,184</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <div id="campaign-sent-chart" data-colors="#3280e8"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="New Leads">
                                New Leads
                            </h5>
                            <h3 class="my-2 py-1">3,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <div id="new-leads-chart" data-colors="#40c391"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Deals">
                                Deals
                            </h5>
                            <h3 class="my-2 py-1">861</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <div id="deals-chart" data-colors="#3280e8"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Booked Revenue">
                                Booked Revenue
                            </h5>
                            <h3 class="my-2 py-1">$253k</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <div id="booked-revenue-chart" data-colors="#40c391"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection
