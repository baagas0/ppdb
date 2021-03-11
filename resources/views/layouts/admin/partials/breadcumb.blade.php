<div class="row">
    <div class="col-lg-12">
        <div class="card  bg-light no-card-border">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="m-r-10">
                        <img src="{{ asset(Auth::user()->avatar) }}" alt="user" width="60" class="rounded-circle" />
                    </div>
                    <div>
                        <h3 class="m-b-0">Welcome back!</h3>
                        <span>{{ date('D, d F Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.alert')