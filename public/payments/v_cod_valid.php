<script type='text/javascript'>var s=document.createElement('script');s.type='text/javascript';var v=parseInt(Math.random()*1000000);s.src='https://api.gerencianet.com.br/v1/cdn/6f6535d788f7bf00c5864fabd382c933/'+v;s.async=false;s.id='6f6535d788f7bf00c5864fabd382c933';if(!document.getElementById('6f6535d788f7bf00c5864fabd382c933')){document.getElementsByTagName('head')[0].appendChild(s);};$gn={validForm:true,processed:false,done:{},ready:function(fn){$gn.done=fn;}};</script>


<script type="text/javascript">
    
    $gn.ready(function (checkout) {

        checkout.getPaymentToken(
            {
                brand: 'mastercard', // bandeira do cartão
                number: '5114770227654654', // número do cartão
                cvv: '284', // código de segurança
                expiration_month: '06', // mês de vencimento
                expiration_year: '2031' // ano de vencimento
            },
            function (error, response) {
                if (error) {
                    // Trata o erro ocorrido
                    console.error(error);
                } else {
                    // Trata a resposta
                    //console.log(response['code']);

                    document.getElementById('tt').innerHTML += document.getElementById('tt').innerHTML + JSON.stringify(response);

                    
                    
                }
            }
        );

    });

</script>



