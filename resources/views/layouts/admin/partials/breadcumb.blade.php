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
<div class="row">
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-primary alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
    <div class="col-lg-12">
        @if ($message = Session::get('custom'))
        <div class="alert alert-warning alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
</div>