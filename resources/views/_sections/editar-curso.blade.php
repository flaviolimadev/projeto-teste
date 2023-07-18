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
    
    <style>
        .border-tab .tab-content>.tab-pane {
            padding: 20px 20px;
        }
        
        ul#pills-tab {
            margin-bottom: 0px !important;
        }
        
        @media (max-width: 580px) {
            .col-sm-6.title-mod, .title-mod {
                padding: 0 15px !important;
            }
        }
    </style>
    
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <div class="widget-content widget-content-area border-tab">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-home-icon"
                        type="button" role="tab" aria-controls="pills-home-icon" aria-selected="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        Curso
                    </button>
                </li>
            
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-profile-icon"
                        type="button" role="tab" aria-controls="pills-profile-icon" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="18" x2="12" y2="12"></line>
                            <line x1="9" y1="15" x2="15" y2="15"></line>
                        </svg>
                        Módulos
                    </button>
                </li>
            
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-aulas-icon-tab" data-bs-toggle="pill" data-bs-target="#pills-aulas-icon"
                        type="button" role="tab" aria-controls="pills-aulas-icon" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="12" y1="18" x2="12" y2="12"></line>
                            <line x1="9" y1="15" x2="15" y2="15"></line>
                        </svg>
                        Aulas
                    </button>
                </li>
            </ul>
            
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home-icon" role="tabpanel" aria-labelledby="pills-home-icon-tab"
                    tabindex="0">
                    <form action="{{ route('updateCourse', ['id' => $course->id ]) }}" method="POST" enctype="multipart/form-data"
                        id="general-info" class="section general-info">
                        @csrf
                        <div class="info">
                            <h6 class="">Informações do seu curso</h6>
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                            <div class="profile-image">
                                                <div class="img-uploader-content">
                                                    <div class="profile-image">
                                                        <input type="file" name="avatar" class="dropify" data-default-file="{{ asset('storage') }}/{{ $course->avatar }}" value="" data-max-file-size="2M"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="fullName">Nome do curso</label>
                                                            <input type="text" class="form-control mb-4" name="name"
                                                                placeholder="Nome do curso" value="{{ $course->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="profession">Categoria</label>
                                                    <select class="form-control" id="country" name="category">
                                                        @foreach ($categorias as $categoria)
                                                        <option value="{{ $categoria->id }}" {{ $categoria->id ==
                                                            $course->category_id ? 'selected' : '' }}>{{ $categoria->name }}
                                                        </option>
                                                        @endforeach
            
                                                    </select>
                                                </div>
            
                                                <div class="form-group">
                                                    <label for="profession">Status do curso</label>
                                                    <select class="form-control" id="country" name="status">
            
                                                        <option value="1" {{ $course->status == 1 ? 'selected' : '' }}>Ativo
                                                        </option>
                                                        <option value="2" {{ $course->status == 2 ? 'selected' : '' }}>Bloqueado
                                                        </option>
            
            
                                                    </select>
                                                </div>
            
                                                <hr>
            
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="aboutBio">Descrição - Fale mais sobre seu curso</label>
                                                        <textarea class="form-control" id="aboutBio"
                                                            placeholder="Tell something interesting about yourself" rows="10"
                                                            name="description">{{ $course->description }}</textarea>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-12">
            
                                                    <button type="submit" class="mr-2 btn btn-primary  mixin">Atualizar</button>
            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="tab-pane fade" id="pills-profile-icon" role="tabpanel" aria-labelledby="pills-profile-icon-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">
            
                            @if(isset($_GET['edit_course']))
                            <form action="{{ route('updateModule', ['id' => $_GET['edit_course']]) }}" method="POST"
                                enctype="multipart/form-data" id="general-info" class="section general-info">
                                @csrf
                                <div class="info">
                                    <div class="form">
                                        <div class="col-xl-12 col-lg-12 col-md-4">
                                            <div class="profile-image">
                                                <div class="img-uploader-content">
                                                    <div class="profile-image">
                                                        <label for="profession">Capa do módulo</label>
                                                        <input type="file" name="avatar" class="dropify" data-default-file="{{ asset('storage') }}/{{ $module_edis->avatar }}" value="" data-max-file-size="2M"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 ">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Titulo</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Titulo do seu modulo" value="{{ $module_edis->name }}"
                                                                name="name">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group col-sm-6">
                                                        <label for="profession">Status do modulos</label>
                                                        <select class="form-control" id="country" name="status">
            
                                                            <option value="1" {{ $module_edis->status == 1 ? 'selected' : ''
                                                                }}>Ativo</option>
                                                            <option value="0" {{ $module_edis->status == 2 ? 'selected' : ''
                                                                }}>Bloqueado</option>
            
            
                                                        </select>
                                                    </div>
            
                                                    <div class="col-sm-12">
            
                                                        <div class="form-group">
                                                            <label for="fullName">Descrição</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Resumo do modulo"
                                                                value="{{ $module_edis->description }}" name="description">
                                                        </div>
            
                                                    </div>

                                                    <div class="col-sm-6 title-mod" style="padding: 3px;">
                                                        <label for="profession">Tipo de video</label>
                                                        <select class="form-control" id="country" name="type_video">
            
                                                            <option value="0">Não possui video</option>
                                                            <option value="1">Vimeo</option>
                                                            <option value="2">Youtube</option>
            
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 title-mod" style="padding: 3px;">
                                                        <label for="profession">Link do video</label>
                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder="Link do seu video " value="{{ $module_edis->url_video }}" name="url_video">
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
            
            
                                        <div class="col-md-12">
            
                                            <button type="" class="mr-2 btn btn-primary  mixin">Atualizar</button>
            
                                        </div>
                                    </div>
            
                                </div>
                            </form>
                            @else
            
                            <form action="{{ route('addModule', ['id' => $course->id]) }}" method="POST"
                                enctype="multipart/form-data" id="general-info" class="section general-info">
                                @csrf
                                <div class="info">
                                    <div class="form">

                                        <div class="col-xl-12 col-lg-12 col-md-4">
                                            <div class="profile-image">
                                                <div class="img-uploader-content">
                                                    <div class="profile-image">
                                                        <label for="profession">Capa do módulo</label>
                                                        <input type="file" name="avatar" class="dropify" data-default-file="" value="" data-max-file-size="2M"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6 title-mod" style="padding: 0px;">
                                                        <div class="form-group">
                                                            <label for="fullName">Titulo</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Titulo do seu modulo" value="{{ old('name') }}"
                                                                name="name">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group col-sm-6 title-mod" style="padding-right: 0px;">
                                                        <label for="profession">Status do modulo</label>
                                                        <select class="form-control" id="country" name="status">
            
                                                            <option value="1">Ativo</option>
                                                            <option value="0">Bloqueado</option>
            
            
                                                        </select>
                                                    </div>
            
                                                    <div class="col-sm-12" style="padding: 0px;">
            
                                                        <div class="form-group title-mod">
                                                            <label for="fullName">Descrição</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Resumo do modulo" value="{{ old('description') }}"
                                                                name="description">
                                                        </div>
            
                                                    </div>

                                                    <div class="col-sm-6 title-mod" style="padding: 3px;">
                                                        <label for="profession">Tipo de video</label>
                                                        <select class="form-control" id="country" name="type_video">
            
                                                            <option value="0">Não possui video</option>
                                                            <option value="1">Vimeo</option>
                                                            <option value="2">Youtube</option>
            
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 title-mod" style="padding: 3px;">
                                                        <label for="profession">Link do video</label>
                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder="Link do seu video " value="" name="url_video">
                                                    </div>
                                                    <br>

                                                </div>
                                            </div>
                                        </div>
            
            
                                        <div class="col-md-12" style="margin-top: 2%;">
                                            <button type="" class="mr-2 btn btn-primary  mixin">Adicionar</button>
                                        </div>
                                    </div>
            
                                </div>
                            </form>
            
                            @endif
            
                        </div>
            
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">
            
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Invoice</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Titulo</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Descrição</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Data</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Status</div>
                                                </th>
                                                <th>
                                                    <div class="th-content"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
            
                                            @foreach ($modules as $module)
            
                                            <tr>
            
                                                <td>
                                                    <div class="td-content product-brand"> #{{ $module->id }} </div>
                                                </td>
            
                                                <td>
                                                    <div class="td-content customer-name">{{ $module->name }}</div>
                                                </td>
            
                                                <td>
                                                    <div class="td-content customer-name">{{ $module->description }}</div>
                                                </td>
            
                                                <td>
                                                    <div class="td-content customer-name">{{ $module->created_at->format('d/m/Y
                                                        H:m') }}</div>
                                                </td>
            
                                                <td>
                                                    @switch($module->status )
            
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
                                                </td>
            
                                                <td>
                                                    <div class="td-content">
                                                        <a href="{{ route('editCourse', ['id' => $course->id, 'edit_course' => $module->id]) }}"
                                                            class="btn btn-outline"
                                                            style="background-color: #689f38;color: white;">Editar</a>
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
                </div>
                
                <div class="tab-pane fade" id="pills-aulas-icon" role="tabpanel" aria-labelledby="pills-aulas-icon-tab"
                    tabindex="0">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">
                            @if(isset($_GET['edit_classe']))
                            <form action="{{ route('updateClass', ['id' => $course->id]) }}" method="POST"
                                enctype="multipart/form-data" id="general-info" class="section general-info">
                                @csrf
                                <div class="info">
                                    <div class="form">
                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Titulo</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Titulo do seu modulo" value="{{ $classe_edis->name }}"
                                                                name="name">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label for="profession">Tipo de video</label>
                                                        <select class="form-control" id="country" name="type_video">
                                                            <option value="0" {{ $classe_edis->type_video == 0 ? 'selected' : ''
                                                                }}>Não possui video</option>
                                                            <option value="1" {{ $classe_edis->type_video == 1 ? 'selected' : ''
                                                                }}>Vimeo</option>
                                                            <option value="2" {{ $classe_edis->type_video == 2 ? 'selected' : ''
                                                                }}>Youtube</option>
            
                                                        </select>
                                                    </div>
            
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label for="fullName">Link do video</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Link do seu video "
                                                                value="{{ $classe_edis->url_video }}" name="url_video">
                                                        </div>
            
                                                    </div>
            
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Descrição</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Resumo do modulo"
                                                                value="{{ $classe_edis->description }}" name="description">
                                                        </div>
                                                    </div>
            
                                                    <div class="form-group col-sm-6">
                                                        <label for="profession">Status do modulo</label>
                                                        <select class="form-control" id="country" name="status">
                                                            <option value="1" {{ $classe_edis->status == 1 ? 'selected' : ''
                                                                }}>Ativo</option>
                                                            <option value="2" {{ $classe_edis->status == 2 ? 'selected' : ''
                                                                }}>Bloqueado</option>
                                                        </select>
                                                    </div>
            
                                                    <div class="form-group col-sm-12">
                                                        <label for="profession">Modulo desta aula</label>
                                                        <select class="form-control" id="country" name="module">
            
                                                            @foreach ($modules as $module)
                                                            <option value="{{ $module->id }}" {{ $classe_edis->module_id ==
                                                                $module->id ? 'selected' : '' }}>{{ $module->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
            
                                                    <div class="col-sm-12">
                                                        <textarea id="demo1" name="content">{{ $classe_edis->content }}</textarea>
                                                    </div>
            
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-md-12">
                                            <button type="" class="mr-2 btn btn-primary  mixin" value="{{ $classe_edis->id }}"
                                            name="classId">Atualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
            
                            @else
            
                            <form action="{{ route('addClass', ['id' => $course->id]) }}" method="POST"
                                enctype="multipart/form-data" id="general-info" class="section general-info">
                                @csrf
                                <div class="info">
                                    <div class="form">
                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0">
                                            <div class="form">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="fullName">Titulo</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Titulo do seu modulo" value="" name="name">
                                                        </div>
                                                    </div>
            
                                                    <div class="col-sm-3">
                                                        <label for="profession">Tipo de video</label>
                                                        <select class="form-control" id="country" name="type_video">
            
                                                            <option value="0">Não possui video</option>
                                                            <option value="1">Vimeo</option>
                                                            <option value="2">Youtube</option>
            
                                                        </select>
                                                    </div>
            
                                                    <div class="col-sm-3">
            
                                                        <div class="form-group">
                                                            <label for="fullName">Link do video</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Link do seu video " value="" name="url_video">
                                                        </div>
            
                                                    </div>
            
                                                    <div class="col-sm-6">
            
                                                        <div class="form-group">
                                                            <label for="fullName">Descrição</label>
                                                            <input type="text" class="form-control mb-4" id="fullName"
                                                                placeholder="Resumo do modulo" value="" name="description">
                                                        </div>
            
                                                    </div>
            
            
                                                    <div class="form-group col-sm-6">
                                                        <label for="profession">Status do modulo</label>
                                                        <select class="form-control" id="country" name="status">
            
                                                            <option value="1">Ativo</option>
                                                            <option value="2">Bloqueado</option>
            
            
                                                        </select>
                                                    </div>
            
                                                    <div class="form-group col-sm-12">
                                                        <label for="profession">Modulo desta aula</label>
                                                        <select class="form-control" id="country" name="module">
            
                                                            @foreach ($modules as $module)
                                                            <option value="{{ $module->id }}">{{ $module->name }}</option>
                                                            @endforeach
            
            
            
            
                                                        </select>
                                                    </div>
            
                                                    <div class="col-sm-12">
                                                        <textarea id="demo1" name="content"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-md-12" style="padding: 0px 15px !important;">
                                            <button type="" class="mr-2 btn btn-primary  mixin">Adicionar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>
            
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="th-content">Invoice</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Titulo</div>
                                                </th>
                                                <th>
                                                    <div class="th-content th-heading">Descrição</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Data</div>
                                                </th>
                                                <th>
                                                    <div class="th-content">Status</div>
                                                </th>
                                                <th>
                                                    <div class="th-content"></div>
                                                </th>
                                            </tr>
                                        </thead>
            
                                        <tbody>
                                            @foreach ($classes as $classe)
            
                                            <tr>
            
                                                <td>
                                                    <div class="td-content product-brand"> #{{ $classe->id }} </div>
                                                </td>
            
                                                <td>
                                                    <div class="td-content customer-name">{{ $classe->name }}</div>
                                                </td>
            
                                                <td>
                                                    <div class="td-content customer-name">{{ $classe->description }}</div>
                                                </td>
            
                                                <td>
                                                    <div class="td-content customer-name">{{ $classe->created_at->format('d/m/Y
                                                        H:m') }}</div>
                                                </td>
            
                                                <td>
                                                    @switch($classe->status )
            
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
                                                </td>
            
                                                <td>
                                                    <div class="td-content">
                                                        <a href="{{ route('editCourse', ['id' => $course->id, 'edit_classe' => $classe->id]) }}"
                                                            class="btn btn-outline"
                                                            style="background-color: #689f38;color: white;">Editar</a>
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
                </div>
            </div>
        </div>
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
    