
<div class="widget-header">                                
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <form action="#" method="" enctype="multipart/form-data" id="general-info" class="section general-info">
            <div class="info">
                <h6 class="">Dados Financeiros</h6>
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="row">
                            <!--
                            <div class="col-xl-2 col-lg-12 col-md-4">
                                <div class="upload mt-4 pr-md-4">
                                    <div class="dropify-wrapper has-preview"><div class="dropify-message"><span class="file-icon"></span> <p>Click to Upload or Drag n Drop</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader" style="display: none;"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" id="input-file-max-fs" class="dropify" data-default-file="uploads/avatar.jpeg" data-max-file-size="2M" name="avatar"><button type="button" class="dropify-clear"><i class="flaticon-close-fill"></i></button><div class="dropify-preview" style="display: block;"><span class="dropify-render"><img src="uploads/avatar.jpeg"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner">avatar.jpeg</span></p><p class="dropify-infos-message">Upload or Drag n Drop</p></div></div></div></div>
                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Avatar</p>
                                </div>
                            </div>
                            -->
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div class="form">

                                    <div class="form-group">
                                        <label for="profession">Tipo de Recebimento:</label>
                                        <select class="form-control" id="type_key" name="profission">
                                            <option value="0">Chave PIX</option>
                                            <option value="1">Carteira BTC</option>
                                            <option value="2">Carteira ETH</option>
                                            <option value="3">Carteira USDT</option>
                                        </select>
                                    </div>

                                    <div class="row">

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="" id="text_base1" style="display:flex;">Informe sua chave (<img src="https://devtools.com.br/img/pix/logo-pix-png-icone-520x520.png" style="max-width: 20px;margin-right: 0.5%;"> PIX):</label>
                                                <label for="" id="text_base2" style="display:none;">Informe sua Carteira (<img src="https://s2.coinmarketcap.com/static/img/coins/200x200/1.png" style="max-width: 20px;margin-right: 0.5%;"> BTC):</label>
                                                <label for="" id="text_base3" style="display:none;">Informe sua Carteira (<img src="https://s2.coinmarketcap.com/static/img/coins/200x200/1027.png" style="max-width: 20px;margin-right: 0.5%;"> ETH):</label>
                                                <label for="" id="text_base4" style="display:none;">Informe sua Carteira (<img src="https://s2.coinmarketcap.com/static/img/coins/200x200/825.png" style="max-width: 20px;margin-right: 0.5%;"> USDT):</label>
                                                <input type="text" class="form-control mb-4" id="key" placeholder="Informe aqui" value="" name="nome">
                                            </div>
                                        </div>
                                        
                                    
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing" style="padding: 0px;">
            <button class="btn btn-primary btn-block mb-4 mr-2"  onclick="teste()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                </svg>
                Adicionar
            </button>
        </div>
        <div class="widget widget-table-two">

            <div class="widget-heading">
                <h5 class="">Carteiras Adicionadas</h5>
            </div>
        
            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><div class="th-content">Id</div></th>
                                <th><div class="th-content">Tipo de Recebimento</div></th>
                                <th><div class="th-content">Criada</div></th>
                                <th><div class="th-content">Atualizada</div></th>
                                <th><div class="th-content">Status</div></th>
                                <th><div class="th-content"></div></th>

                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($wallets as $wallet)
                        
                            <tr>
                                <td><div class="td-content product-brand"> #{{ $wallet['id'] }} </div></td>

                                <td>
                                    <div class="td-content customer-name">

                                        @switch($wallet['type'])

                                            @case(0)
                                                <img src="https://devtools.com.br/img/pix/logo-pix-png-icone-520x520.png" >        
                                                @break

                                            @case(1)
                                                <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/1.png">
                                                @break

                                            @case(2)
                                                <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/1027.png">
                                                @break

                                            @case(3)
                                                <img src="https://s2.coinmarketcap.com/static/img/coins/200x200/825.png">
                                                @break
                                            
                                        @endswitch

                                        {{ $wallet['account'] }}

                                    </div>
                                </td>

                                <td><div class="td-content product-brand"> {{ $wallet['created_at']->format('d/m/Y H:m:i') }} </div></td>

                                <td><div class="td-content product-brand"> {{ $wallet['updated_at']->format('d/m/Y H:m:i') }} </div></td>
                               
                                <td>

                                    <div class="td-content">
                                        @if($wallet['status'] == 0)

                                        <span class="badge badge-warning">Em Análise</span>

                                        @elseif($wallet['status'] == 1)

                                        <span class="badge badge-success">Aprovada</span>

                                        @elseif($wallet['status'] == 2)
                                        
                                        <span class="badge badge-danger">Cancelada</span>

                                        @elseif($wallet['status'] == 3)
                                        
                                        <span class="badge badge-dark">Deletada</span>

                                        @endif
                                    </div>
                                </td> 

                                <td>
                                    <div class="td-content">
                                        <a href="#" class="btn btn-outline" style="background-color: #f44336;color: white;" onclick="excluiraccont({{ $wallet['id'] }})">Excluir</a>
                                    </div>
                                </td>

                            </tr>

                            @endforeach
                    
                    </table>
                </div>
            </div>
        </div>

        
    </div>
</div>

<script>

    setInterval(function(){
        
        if(document.getElementById('type_key').value == 0){

            document.getElementById('text_base1').style.display = 'flex';
            document.getElementById('text_base2').style.display = 'none';
            document.getElementById('text_base3').style.display = 'none';
            document.getElementById('text_base4').style.display = 'none';

        }

        if(document.getElementById('type_key').value == 1){

            document.getElementById('text_base1').style.display = 'none';
            document.getElementById('text_base2').style.display = 'flex';
            document.getElementById('text_base3').style.display = 'none';
            document.getElementById('text_base4').style.display = 'none';

        }

        if(document.getElementById('type_key').value == 2){

            document.getElementById('text_base1').style.display = 'none';
            document.getElementById('text_base2').style.display = 'none';
            document.getElementById('text_base3').style.display = 'flex';
            document.getElementById('text_base4').style.display = 'none';

        }

        if(document.getElementById('type_key').value == 3){

            document.getElementById('text_base1').style.display = 'none';
            document.getElementById('text_base2').style.display = 'none';
            document.getElementById('text_base3').style.display = 'none';
            document.getElementById('text_base4').style.display = 'flex';

        }

    },500);

    function teste(){

    

        $.ajax({

            url: "{{ route('financeDataSave') }}",
            type: "post",
            data: {
                _token: '{{ csrf_token() }}',
                type_key: document.getElementById('type_key').value,
                key: document.getElementById('key').value,
                },

            dataType: "html"

        }).done(function(resposta) {

            console.log(resposta);
            if(resposta == 200){

                Swal.fire(
                    'Adicionado!',
                    'Novas carteiras ficam em analises por até 48 Horas',
                    'warning'
                )

                 location.reload();

            }else{
                
                Swal.fire(
                    'Error!',
                    'Carteira informada já foi cadastrada.',
                    'error'
                )

            }

        });

    }

    
    function excluiraccont(id){

        swal.fire({
        title: "Tem certeza que deseja excluir?",
        text: "Você não podera usa-la novamente",
        icon: "warning",
        showCancelButton: true,
        }).then((result) => {
            if(result['value']){
                console.log(result);
                $.ajax({

                    url: "{{ route('financeDataDel') }}",
                    type: "post",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                        },

                    dataType: "html"

                });

                Swal.fire(
                    'Deletado!',
                    'Carteira excluida com sucesso.',
                    'success'
                )

                location.reload();
            }
            
            
            
        });

    

    }


</script>
<!--
$.ajax({

                url: "{{ route('financeDataDel') }}",
                type: "post",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                    },

                dataType: "html"

            });
-->