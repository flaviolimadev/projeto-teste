<div class="area-busca">
    <div class="left">
        <select class="form-select" aria-label="Default select example">
            <option selected>Todas as Categorias</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
            @endforeach

        </select>
        <form action="#">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </button>
            <input type="text" class="form-control" placeholder="Search...">
        </form>    
    </div>
    <div class="right">
        <a href="#" class="btn-favoritos">
            <span>Favoritos</span>
            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" class="svg-inline--fa fa-heart fa-w-16 favorite-dropdown-card__icon _text-gray-800 _text-3"
                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 15px; height: 15px;"><path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 
                79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 
                187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path>
            </svg>  
        </a>
    </div>
</div>