<div class="widget widget-table-two">

    <div class="widget-heading">
        <h5 class="">Usuários afiliados aos seus produtos</h5>
    </div>

    <div class="widget-content">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><div class="th-content">Invoice</div></th>
                        <th><div class="th-content">Usuário</div></th>
                        <th><div class="th-content">Data</div></th>
                        <th><div class="th-content">Email</div></th>
                        <th><div class="th-content">Produto</div></th>
                        <th><div class="th-content"></div></th>

                    </tr>
                </thead>
                <tbody>
                     
                    @foreach ($affiliacoes as $affiliacao)

                    @if($affiliacao['affiliate']['status'] != 1)

                    <tr>
                        <td><div class="td-content">#{{ $affiliacao['affiliate']['id'] }}</div></td>

                        <td><div class="td-content customer-name"><img src="{{ asset('storage') }}/{{ $affiliacao['user']['avatar'] }}" alt="avatar">{{ $affiliacao['user']['name'] }}</div></td>

                        <td><div class="td-content product-brand"> {{ $affiliacao['affiliate']['created_at']->format('d/m/Y H:m') }} </div></td>

                        
                         <td><div class="td-content product-brand"> {{ $affiliacao['user']['email'] }}</div></td>

                        <td><div class="td-content customer-name"><img src="{{ asset('storage') }}/{{ $affiliacao['produto']['avatar'] }}" alt="avatar">{{ $affiliacao['produto']['name'] }}</div></td>

                        <td><div class="td-content">
                            <a href="{{ route('updateAffiliate', ['id' => $affiliacao['affiliate']['id'], 'type' => 1 ]) }}" class="btn btn-outline" style="background-color: #8bc34a;color: white;">Aceitar</a>
                            <a href="{{ route('updateAffiliate', ['id' => $affiliacao['affiliate']['id'], 'type' => 0 ]) }}" class="btn btn-outline"  style="background-color: #f44336;color: white;">Recusar</a></div></td>
                        
                    </tr>

                    @endif

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
        'Usuário agora é um afiliado.',
        'success'
    )
}

@elseif(isset($sucess) && $sucess == 0)

window.onload = function exampleFunction() { 
    Swal.fire(
        'Error!',
        'Dados não foram atualizados.',
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