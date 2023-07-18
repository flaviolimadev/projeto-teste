    <link rel="stylesheet" href="{{ asset('cork/src/plugins/src/filepond/filepond.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImagePreview.min.css') }}">
    <link href="{{ asset('cork/src/plugins/src/notification/snackbar/snackbar.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('cork/src/plugins/src/sweetalerts2/sweetalerts2.css') }}">
    <link href="{{ asset('cork/src/plugins/css/light/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/assets/css/light/components/tabs.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/src/assets/css/light/elements/alert.css') }}">
    <link href="{{ asset('cork/src/plugins/css/light/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/plugins/css/light/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/src/assets/css/light/forms/switches.css') }}">
    <link href="{{ asset('cork/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork/src/assets/css/light/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/plugins/css/dark/filepond/custom-filepond.css') }}" rel="stylesheet" type="text/css" />
    <link href="cork/src/assets/css/dark/components/tabs.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/src/assets/css/dark/elements/alert.css') }}">
    <link href="{{ asset('cork/src/plugins/css/dark/sweetalerts2/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/plugins/css/dark/notification/snackbar/custom-snackbar.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('cork/src/assets/css/dark/forms/switches.css') }}">
    <link href="{{ asset('cork/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork/src/assets/css/dark/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
    
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <form action="{{ route('newProductSave') }}" method="POST" enctype="multipart/form-data" id="inputFile" class="section general-info">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="info">
                <h6 class="">Informações do seu produto</h6>
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-xl-2 col-lg-12 col-md-4">
                                <div class="profile-image">
                                    <div class="img-uploader-content">
                                        <input type="file" name="avatar" class="dropify" data-default-file="" data-max-file-size="2M">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                <div class="form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Nome do produto</label>
                                                <input type="text" class="form-control mb-4" name="name" id="name" placeholder="Nome do produto" value="">
                                            </div>
                                        </div>
    
                                            <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="fullName">Valor (R$)</label>
                                                <input type="number" class="form-control mb-4" name="value" id="value" placeholder="Valor do produto" value="">
                                            </div>
                                        </div>
    
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="fullName">Comissâo (%)</label>
                                                <input type="number" class="form-control mb-4" name="comission" id="comission" placeholder="Valor do produto" value="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="profession">Categoria</label>
                                            <select class="form-control" name="category" id="category">
                                            
                                            @foreach ($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="aboutBio">Descrição - Fale mais sobre seu Produto</label>
                                            <textarea class="form-control" name="bio" id="bio" placeholder="Tell something interesting about yourself" rows="10">...</textarea>
                                        </div>
                                    </div>
    
                                    <div class="col-md-12">
                                        <button type="reset" class="mr-2 btn btn-primary  mixin" onclick="teste()">Adicionar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <script>
        function teste(){
            if( document.getElementById('name').value == '' || 
                document.getElementById('value').value == '' ||
                document.getElementById('comission').value == '' ||
                document.getElementById('bio').value == ''){
                    
                Swal.fire(
                    'Error - campos em branco!',
                    'Todos os campos são obrigatorios.',
                    'error'
                )
            }else{
                
                var formData = new FormData(document.getElementById("inputFile"));
                formData.append('_token', '{{ csrf_token() }}');
                
                $.ajax({
                    url: "{{ route('newProductSave') }}",
                    type: "post",
                    data: formData,
                    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                    processData: false, // NEEDED, DON'T OMIT THIS
                    dataType: "html"
                }).done(function(resposta) {
                    console.log(resposta);
                    if(resposta == 200){
                        Swal.fire(
                            'Sucesso!',
                            'Produto adicionado com sucesso.',
                            'success'
                        )
                        setTimeout(function() {
                            window.location.href = "{{ route('myProducts') }}";
                        }, 2000);

                    }else{
                        Swal.fire(
                            'Error!',
                            'Seu Produto não pode ser criado.',
                            'error'
                        )
                    }
                });
            }
        }
   </script>
    <script src="{{ asset('cork/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/waves/waves.min.js') }}"></script>
    
    <script src="{{ asset('cork/src/plugins/src/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginFileValidateType.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImageExifOrientation.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImagePreview.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImageCrop.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImageResize.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/FilePondPluginImageTransform.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/filepond/filepondPluginFileValidateSize.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/notification/snackbar/snackbar.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/sweetalerts2/sweetalerts2.min.js') }}"></script>
    <script src="{{ asset('cork/src/assets/js/users/account-settings.js') }}"></script>
    