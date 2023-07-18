
@foreach ($products as $product)

<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 layout-spacing" >
    <div class="card component-card_9">
        <div class="area-img-produto">
            <div class="bg-produto">
                <img src="{{ asset('storage') }}/{{ $product->avatar }}" class="card-img-top"> 
            </div>
            <div class="img-produto">
                <img src="{{ asset('storage') }}/{{ $product->avatar }}" class="card-img-top" alt="widget-card-2" width="100%"> 
            </div>
        </div>
        <div class="card-body">
            <a href="#" class="btn-favoritar">
                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16 favorite-dropdown-card__icon _text-gray-800 _text-3"
                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 15px; height: 15px;"><path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 
                79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 
                187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path></svg>
            </a>
            <div class="header-card">
                <div class="avaliacao-card">
                    <span class="nt-avaliacao">5.0</span>
                    
                    <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" class="svg-inline--fa fa-star fa-w-18 _text-yellow _text-3" role="img"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="width: 12px; height: 12px;"><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9
                    171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5
                    8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg>
                    
                    <span class="qt-avaliacao">(2)</span>
                </div>
                <div class="temperatura-card">
                    <span>17°</span>
                    <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="fire" class="svg-inline--fa fa-fire fa-w-12 _text-red _text-3" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 384 512" style="width: 12px; height: 12px;"><path fill="currentColor" d="M216 23.86c0-23.8-30.65-32.77-44.15-13.04C48 191.85 224 200 224 288c0 35.63-29.11 64.46-64.85
                    63.99-35.17-.45-63.15-29.77-63.15-64.94v-85.51c0-21.7-26.47-32.23-41.43-16.5C27.8 213.16 0 261.33 0 320c0 105.87 86.13 192 192 192s192-86.13 192-192c0-170.29-168-193-168-296.14z"></path></svg>
                </div>
            </div>
            <h5 class="card-title">{{ $product->name }}</h5>
            
            <p class="card-text" style="min-height: 44px;">{{ $product->drescription }}</p>
            
            <div class="footer-card">
                <p class="card-text">Comissão de até</p>
                
                <h5 class="card-valor">R$ {{  ((($product->value / 100) * $product->commission))/100  }} ({{$product->commission }})%</h5>
                
                <p class="card-text">Preço máximo: R$ {{ $product->value/100 }}</p>
            </div>
            <div class="meta-info">
                <center>                    
                    <a href="{{ route('product', ['id' => $product->id]) }}" class="mr-2 btn btn-primary  mixin" >Ver produto</a>
                </center>        
            </div>
        </div>
    </div>
</div>

@endforeach
