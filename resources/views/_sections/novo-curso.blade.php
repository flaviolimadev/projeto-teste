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
    <link href="{{ asset('cork/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <form action="{{ route('addCourse') }}" method="POST" enctype="multipart/form-data" id="general-info" class="section general-info">
            @csrf
            <div class="info">
                <h6 class="">Informações do seu curso</h6>
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
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="fullName">Nome do curso</label>
                                                <input type="text" class="form-control mb-4" name="name" placeholder="Nome do curso" value="{{ old('name') }}">
                                            </div>
                                        </div>
    
                                            
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="profession">Categoria</label>
                                            <select class="form-control" name="category">
                                                @foreach ($categorias as $categoria)
                                                    <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                                @endforeach
    
                                            </select>
                                    </div>
    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="aboutBio">Descrição - Fale mais sobre seu curso</label>
                                            <textarea class="form-control" name="description" placeholder="Digite aqui..." rows="10">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
    
                                    <div class="col-md-12">
                                    
                                        <button type="submit" class="mr-2 btn btn-primary  mixin">Adicionar</button>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

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
    <script src="{{ asset('cork/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    