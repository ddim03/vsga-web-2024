<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $breadcrump->title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach ($breadcrump->list as $key => $value)
                    @if ($key < count($breadcrump->list) - 1)
                        <li class="breadcrumb-item active">{{ $value }}</li>
                        @else
                        <li class="breadcrumb-item">{{ $value }}</li>
                        @endif
                        @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>