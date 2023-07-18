<div class="widget widget-table-two">

    <div class="widget-heading">
        <h5 class="">Solicitações de Affiliação</h5>
    </div>

    <div class="widget-content">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><div class="th-content">Invoice</div></th>
                        <th><div class="th-content">Nome</div></th>
                        <th><div class="th-content">Produtor (Email)</div></th>
                        <th><div class="th-content">Valor</div></th>
                        <th><div class="th-content">Comição</div></th>
                        <th><div class="th-content">Data</div></th>
                        <th><div class="th-content">Status</div></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($affiliacoes as $affiliacao)

                    <tr>

                        <td><div class="td-content product-brand"> #{{ $affiliacao['produto']['id'] }} </div></td>

                        <td><div class="td-content customer-name"><img src="{{ asset('storage') }}/{{ $affiliacao['produto']['avatar'] }}" alt="avatar">{{ $affiliacao['produto']['name'] }}</div></td>

                        <td><div class="td-content product-name"> {{ explode(" ", $affiliacao['user']['name'])[0] }} ({{ $affiliacao['user']['email'] }}) </div></td>

                        <td><div class="td-content customer-name">R$ {{ number_format($affiliacao['produto']['value']/100, 2, ',', ' ') }}</div></td>

                        <td><div class="td-content customer-name">{{ $affiliacao['produto']['commission']/100 }}%</div></td>

                        <td><div class="td-content customer-name">{{ $affiliacao['affiliate']['updated_at']->format('d/m/Y H:m') }}</div></td>

                        <td>
                            <div class="td-content customer-name">
                                @switch($affiliacao['affiliate']['status'] )

                                    @case(0)
                                        <span class="badge badge-danger">Cancelado</span>
                                        @break

                                    @case(1)
                                        <a href=""><span class="badge badge-success">Ativo</span></a>
                                        @break

                                    @case(2)
                                        <span class="badge badge-warning">Pendente</span>
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


<script>
@if (isset($sucess) && $sucess == 1)

window.onload = function exampleFunction() {
    Swal.fire(
        'Atualizado!',
        'Solicitação foi concluida.',
        'success'
    )
}

@elseif(isset($sucess) && $sucess == 0)

window.onload = function exampleFunction() {
    Swal.fire(
        'Error!',
        'Solicitação não pode ser concluida.',
        'error'
    )
}

@elseif(isset($sucess) && $sucess == 3)

window.onload = function exampleFunction() {
    Swal.fire(
        'Error - Email invalido!',
        'Email Informado não está cadastrado.',
        'error'
    )
}

@elseif(isset($sucess) && $sucess == 4)

window.onload = function exampleFunction() {
    Swal.fire(
        'Error!',
        'Email Informado já é um coprodutor.',
        'error'
    )
}

@endif



</script>
