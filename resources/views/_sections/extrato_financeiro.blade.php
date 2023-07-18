<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
    <div class="widget widget-table-two">

        <form action="#" method="get">
            <div class="area-input-filter">

                <div class="input-search">
                    <input type="text" name="search" placeholder="Pesquisar . . .">
                    <button type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="data1">
                    <input type="date" name="data1">
                </div>

                <span class="date-input-tag">até</span>

                <div class="data2">
                    <input type="date" name="data2">
                </div>

            </div>
        </form>

        <div class="widget-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><div class="th-content">Referente</div></th>
                            <th><div class="th-content">Invoice</div></th>
                            <th><div class="th-content">Valor</div></th>
                            <th><div class="th-content">Descrição</div></th>
                            <th><div class="th-content">Data</div></th>
                            <th><div class="th-content">Status</div></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($extratro as $item)

                        <tr>

                            <td><div class="td-content customer-name"><img src="{{ asset('storage') }}/{{ App\Http\Controllers\inviteController::getUser( $item->user_ref )->avatar }}" alt="avatar">{{ App\Http\Controllers\inviteController::getUser( $item->user_ref )->name }}</div></td>
                            <td><div class="td-content">#{{ $item->id }} </div></td>
                            <td><div class="td-content"><span class=""> BRL {{ number_format($item->value/100,2,',','.') }}</span></div></td>
                            <td><div class="td-content">{{ $item->desciption }}</div></td>
                            <td><div class="td-content">{{ $item->updated_at->format('d/m/Y H:m') }}</div></td>
                            <td>
                                <div class="td-content">
                                 @switch($item->status )

                                    @case(0)
                                    <span class="badge badge-warning">Pendente</span>
                                        @break

                                    @case(1)
                                        <span class="badge badge-success">Confirmado</span>
                                        @break

                                    @case(2)
                                        <span class="badge badge-danger">Cancelado</span>

                                        @break
                                @endswitch
                                </div>
                            </td>

                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
