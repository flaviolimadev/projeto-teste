<!DOCTYPE html>
<html>
<head>
    <style>
        /* Cria um overlay de carregamento */
        #loading {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: white;
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /* Define um spinner de carregamento */
        .spinner {
            border: 16px solid #f3f3f3;
            border-top: 16px solid #3498db;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <script type='text/javascript'>
        var s = document.createElement('script');
        s.type = 'text/javascript';
        var v = parseInt(Math.random() * 1000000);
        s.src = 'https://sandbox.gerencianet.com.br/v1/cdn/6f6535d788f7bf00c5864fabd382c933/' + v;
        s.async = false;
        s.id = '6f6535d788f7bf00c5864fabd382c933';
        if (!document.getElementById('6f6535d788f7bf00c5864fabd382c933')) {
            document.getElementsByTagName('head')[0].appendChild(s);
        };
        $gn = { validForm: true, processed: false, done: {}, ready: function (fn) { $gn.done = fn; } };
    </script>

</head>
<body>
    <!-- Adiciona uma tela de carregamento -->
    <div id="loading">
        <div class="spinner"></div>
    </div>

    <h2>Console Output:</h2>
    <pre id="output"></pre>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        function hideLoadingScreen() {
            document.getElementById('loading').style.display = 'none';
        }

        $gn.ready(function (checkout) {

            checkout.getPaymentToken(
                {
                    brand: "{{ $_GET['brand']; }}",
                    number: "{{ $_GET['number']; }}",
                    cvv: "{{ $_GET['cvv']; }}",
                    expiration_month: "{{ $_GET['expiration_month']; }}",
                    expiration_year: "{{ $_GET['expiration_year']; }}",
                    reuse: false
                },
                function (error, response) {
                    if (error) {
                        //console.error(error);

                        window.history.back();
                        //document.getElementById('output').innerHTML += "Error: " + JSON.stringify(error, null, 4) + "\n";

                    } else {

                        var name = "{{ $_GET['nome']; }}";
                        var email = "{{ $_GET['email']; }}";
                        var cpf = "{{ $_GET['cpf']; }}";
                        var contato = "{{ $_GET['contato']; }}";
                        var parcelas = "{{ $_GET['parcelas']; }}";
                        var id = "{{ $_GET['id']; }}";
                        var tokenn = response.data.payment_token;

                        console.log(tokenn)


                        //window.location.href = "http://127.0.0.1:8000/gerencianet/payment-card?_token={{ csrf_token() }}&name="+name+"&email="+email+"&cpf="+cpf+"&contato="+contato+"&tokenn="+tokenn;

                        $.ajax({
                            url: "{{ route('payment_card') }}",
                            type: "post",
                            data: "_token={{ csrf_token() }}&name=" + name +
                            "&email=" + email +
                            "&cpf=" + cpf +
                            "&contato=" + contato +
                            "&parcelas=" + parcelas +
                            "&id=" + id +
                            "&tokenn=" + tokenn,
                            dataType: "html"
                        }).done(function(resposta) {

                            console.log(resposta);

                            window.location.href = resposta;
                            //window.history.back();
                            // Tratar a resposta aqui...
                        });
                    }
                }
            );


        });
    </script>


</body>
</html>
