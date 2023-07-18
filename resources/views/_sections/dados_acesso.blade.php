<div class="col-xl-12 col-md-12 col-sm-12 col-12 data-acess">
    <form class="form-vertical" action="#" style="margin-top: 2%;margin-bottom: 2%;margin-left: 2%;margin-right: 2%;">
        
        <div class="form-group mb-4">
            <label class="control-label">Email de Acesso:</label>
            <div class="input-group"> 
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
                <input type="text" value="{{ $AuthUser->email }}" class="form-control" disabled=""> 
            </div> 
        </div>
        
        <div class="form-group mb-4">
            <label class="control-label">Senha Atual:</label>
            <div class="input-group mb-4">
                <input type="password" name="senha" class="form-control" id="at_senha"> 
                <span class="input-group-addon"><i class="icon-user"></i></span> 
            </div>
        </div>
        <div class="form-group mb-4">
            <label class="control-label">Nova Senha:</label>
            <div class="input-group">
                <input type="password" name="nova_senha" class="form-control" id="nv_senha">
                <span class="input-group-addon"><i class="icon-user"></i></span> 
            </div>
        </div>

        <div class="form-group mb-4">
            <label class="control-label">Confirmar Nova Senha:</label>
            <div class="input-group">
                <input type="password" name="nova_senha" class="form-control" id="nv_senha2">
                <span class="input-group-addon"><i class="icon-user"></i></span> 
            </div>
        </div>

            <button type="reset" class="btn btn-primary" value="" id="btn_a" style="display: block;" onclick="teste()">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg>
                Salvar
            </button>
            
            <button type="reset" class="btn btn-primary btn-lg mr-3" id="btn_b" style="display: none;" >
                <div class="spinner-border text-success align-self-center"></div>
            </button> 
    </form>
</div>

<script>

function teste(){

    senha_atual = document.getElementById('at_senha').value;
    nova_senha = document.getElementById('nv_senha').value;
    nova_senha_confirm = document.getElementById('nv_senha2').value;

    if(senha_atual == '' ||  nova_senha == '' || nova_senha_confirm == ''){

         Swal.fire(
            'Error!',
            'Todos os campos são obrigatorios.',
            'error'
        )

    }else if(nova_senha != nova_senha_confirm){

         Swal.fire(
            'Error!',
            'Senhas Atuais não correspondem.',
            'error'
        )
    
    }else{

        $.ajax({

        url: "{{ route('accountSecuritySave') }}",
        type: "post",
        data: {
            _token: '{{ csrf_token() }}',
            password: senha_atual,
            new_password: nova_senha,
            new_password_confirm: nova_senha_confirm
            },

        dataType: "html"

        }).done(function(resposta) {

            console.log(resposta);
            if(resposta == 200){

                Swal.fire(
                    'Alterada!',
                    'Senha Alterada com sucesso',
                    'success'
                )


            }else if(resposta == 401){
                
                Swal.fire(
                    'Error!',
                    'Senha Informada é invalida.',
                    'error'
                )
            
            
            }else{
                
                Swal.fire(
                    'Error!',
                    'Carteira informada já foi cadastrada.',
                    'error'
                )

            }

        });

    }

}
</script>