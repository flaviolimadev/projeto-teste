<style>
    .card-footer span {
        font-size: 12px;
    }
    body.dark .card {
        border: 1px solid #191e3a;
        border-radius: 10px;
        background: #191e3a;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
    }
    body .card {
        border: 1px solid #e0e6ed;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
    }
    body.dark .card-footer {
        color: #e0e6ed;
    }
    body .card-footer {
        color: #3b3f5c;
    }
    @media (max-width: 600px) {
        .row {
            padding: 0px;
        }
    }
</style>

<div class="row">
    <h5>Minhas compras</h5>
</div>

<div class="row">
    @foreach ($compras as $compra)

    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-4">
        <a class="card style-6" href="{{ route('allcourses', ['curso' => 2, 'modulo' => 1]) }}">

            <span class="badge badge-danger"></span>

            <img src="{{ asset('storage') }}/{{ \App\Models\Product::find($compra->product_id)->avatar  }}" class="card-img-top" alt="...">

            <div class="card-footer">
                <div class="row">
                    <div class="col-12 mb-2">
                        <b>{{ \App\Models\Product::find($compra->product_id)->name }}</b>
                    </div>
                    <div class="col-12">
                        <span>Curso Online</span>
                    </div>
                </div>
            </div>

        </a>
    </div>

    @endforeach
</div>
