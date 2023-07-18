<div class="widget widget-table-two">

    <div class="widget-heading">
        <h5 class="">Minhas Co-produções</h5>
    </div>

    <div class="widget-content">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><div class="th-content">Invoice</div></th>
                        <th><div class="th-content">Nome</div></th>
                        <th><div class="th-content th-heading">Produtor (E-mail)</div></th>
                        <th><div class="th-content">Porcentagem</div></th>
                        <th><div class="th-content">Data</div></th>
                        <th><div class="th-content">Status</div></th>
                        <th><div class="th-content"></div></th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach ($coproducoes as $coprodutor)

                    <tr>

                        <td><div class="td-content product-brand"> #{{ $coprodutor['coprodutor']['id'] }} </div></td>
                        
                        <td><div class="td-content customer-name"><img src="{{ asset('storage') }}/{{ $coprodutor['produto']['avatar'] }}" alt="avatar">{{ $coprodutor['produto']['name'] }}</div></td>

                        <td><div class="td-content customer-name">{{ $coprodutor['user']['email'] }}</div></td>

                        <td><div class="td-content customer-name">{{ $coprodutor['coprodutor']['commission'] }}%</div></td>

                        <td><div class="td-content customer-name">{{ $coprodutor['coprodutor']['updated_at']->format('d/m/Y H:m') }}</div></td>

                        <td>
                            <div class="td-content customer-name">
                                @switch($coprodutor['coprodutor']['status'] )

                                    @case(0)
                                        <span class="badge badge-danger">Cancelado</span>        
                                        @break

                                    @case(1)
                                        <span class="badge badge-success">Ativo</span>
                                        @break

                                    @case(2)
                                        <span class="badge badge-warning">Pendente</span>
                                        @break                                                                
                                @endswitch
                            </div>
                        </td>

                        <td>
                            <div class="td-content customer-name">
                                @if($coprodutor['coprodutor']['status'] == 0)
                                
                                @elseif($coprodutor['coprodutor']['status'] == 1)
                                <a href="{{ route('editCoprodutor', ['id' => $coprodutor['coprodutor']['id'], 'type' => 0]) }}" class="btn btn-outline"  style="background-color: #f44336;color: white;">Recusar</a>

                                @else

                                <a href="{{ route('editCoprodutor', ['id' => $coprodutor['coprodutor']['id'], 'type' => 3]) }}" class="btn btn-outline-" style="background-color: #8bc34a;color: white;">Aceitar</a>
                                <a href="{{ route('editCoprodutor', ['id' => $coprodutor['coprodutor']['id'], 'type' => 0]) }}" class="btn btn-outline"  style="background-color: #f44336;color: white;">Recusar</a>
                                @endif
                            </div>
                        </td> 
                        
                    </tr>
                        
                    @endforeach

                    
                </tbody>
            </table>
        </div>
    </div>
</div>