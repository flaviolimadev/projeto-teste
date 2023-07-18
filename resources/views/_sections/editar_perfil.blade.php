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
        .section {
            border: 0px;
        }
    </style>
    
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <form action="modules/edit_perfil.php" method="POST" enctype="multipart/form-data" id="inputFile" class="section general-info">
            <div class="info">
                <h6 class="">Informações Gerais</h6>
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-xl-2 col-lg-12 col-md-4">
                                <div class="profile-image">
                                    <div class="img-uploader-content">
                                        
                                        
                                        <input type="file" name="avatar" class="dropify" data-default-file="{{ asset('storage') }}/{{ $AuthUser->avatar }}" value="{{ asset('storage') }}/{{ $AuthUser->avatar }}" data-max-file-size="2M"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-8 col-lg-12 col-md-12 mt-md-0 mt-4">
                                <div class="form">
                                    <div class="row">

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="fullName">Nome completo</label>
                                                <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" value="{{ $AuthUser->name }}" name="nome" disabled>
                                            </div>
                                        </div>
                                        
                                        @if($AuthUser->birth_date == 0)
                                    
                                        <div class="col-sm-6">
                                            <label class="dob-input">Data de Nascimento</label>
                                            <div class="d-sm-flex d-block">
                                                
                                                <input type="date" class="form-control mb-4" id="birth_date" required>
                                                   
                                            </div>
                                        </div>

                                        @else

                                        <div class="col-sm-6">
                                            <label class="dob-input">Data de Nascimento (Não pode ser alterado)</label>
                                            <div class="d-sm-flex d-block">
                                                
                                                <input type="date" class="form-control mb-4" id="birth_date" value="{{ $AuthUser->birth_date }}" disabled="">
                                                   
                                            </div>
                                        </div>

                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="profession">Profissão</label>
                                        <select class="form-control" id="profission" name="profission">
                                            <option>Outros</option>
                                            <option>Web Design</option>
                                            <option>Gestor de Trafego</option>
                                            <option>Programador</option>
                                            <option>Design Grafico</option>
                                            <option>Editor de videos</option>
                                            <option>Produtor</option>
                                            <option>Autonomo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <form action="modules/edit_perfil.php" method="POST" id="about" class="section about">
            <div class="info">
                <h5 class="">Sobre</h5>
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <div class="form-group">
                            <label for="aboutBio">Bio - Um resumo sobre quem é você</label>
                            <textarea class="form-control" id="biography" placeholder="Digite aqui..." rows="10" name="bio">{{ $AuthUser->biography }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <form action="modules/edit_perfil.php" method="POST" id="contact" class="section contact">
            <div class="info">
                <h5 class="">Contato</h5>
                <div class="row">
                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            
                            @if($Adress)

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">País</label>
                                    <select class="form-control" id="pais" name="uf">
                                        <option>All Countries</option>
                                        <option>United States</option>
                                        <option>India</option>
                                        <option>Japan</option>
                                        <option>China</option>
                                        <option selected="">Brazil</option>
                                        <option>Norway</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Endereço</label>
                                    <input type="text" class="form-control mb-4" id="adress" placeholder="addresses" value="{{ $Adress[0]['addresses'] }}" name="end">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Cidade</label>
                                    <input type="text" class="form-control mb-4" id="city" placeholder="Location" value="{{ $Adress[0]['city'] }}" name="cidade">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Telefone</label>
                                    <input type="number" class="form-control mb-4" id="telephone" placeholder="Write your phone number here" value="{{ $AuthUser->telephone }}" name="contato">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control mb-4" id="email" placeholder="Write your email here" value="{{ $AuthUser->email }}" name="email">
                                </div>
                            </div>                                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website1">CEP</label>
                                    <input type="text" class="form-control mb-4" id="cep" placeholder="Write your website here" value="{{ $Adress[0]['zip_code'] }}" name="cep">
                                </div>
                            </div>

                            @else


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">País</label>
                                    <select class="form-control" id="pais" name="uf">
                                        <option>All Countries</option>
                                        <option>United States</option>
                                        <option>India</option>
                                        <option>Japan</option>
                                        <option>China</option>
                                        <option selected="">Brazil</option>
                                        <option>Norway</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Endereço</label>
                                    <input type="text" class="form-control mb-4" id="adress" placeholder="Seu endereço completo" value="" name="end">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="location">Cidade</label>
                                    <input type="text" class="form-control mb-4" id="city" placeholder="Cidade onde mora atualmente" value="" name="cidade">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Telefone</label>
                                    <input type="number" class="form-control mb-4" id="telephone" placeholder="Whatsapp de preferencia" value="{{ $AuthUser->telephone }}" name="contato">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control mb-4" id="email" placeholder="Write your email here" value="{{ $AuthUser->email }}" name="email">
                                </div>
                            </div>                                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website1">CEP</label>
                                    <input type="text" class="form-control mb-4" id="cep" placeholder="Código da sua cidade" value="" name="cep">
                                </div>
                            </div>


                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!--
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <form action="modules/edit_perfil.php" method="POST" id="social" class="section social">
            <div class="info">
                <h5 class="">Social</h5>
                <div class="row">

                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group social-linkedin mb-3">
                                    <div class="input-group-prepend mr-3">
                                        <span class="input-group-text" id="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="linkedin Username" aria-label="Username" aria-describedby="linkedin" value="" name="linkedin">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group social-tweet mb-3">
                                    <div class="input-group-prepend mr-3">
                                        <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Twitter Username" aria-label="Username" aria-describedby="tweet" value="" name="twitter">
                                </div>
                            </div>                                                        
                        </div>
                    </div>

                    <div class="col-md-11 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group social-fb mb-3">
                                    <div class="input-group-prepend mr-3">
                                        <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="" name="facebook">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-group social-github mb-3">
                                    <div class="input-group-prepend mr-3">
                                        <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Github Username" aria-label="Username" aria-describedby="github" value="" name="github">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                
            </div>
            
        </form>
    </div>
    -->
    
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <button class="btn btn-primary btn-block mb-4 mr-2"  onclick="teste()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save"><path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path><polyline points="17 21 17 13 7 13 7 21"></polyline><polyline points="7 3 7 8 15 8"></polyline></svg> Salvar</button>
    </div>
    
    <!--
    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
        <div id="skill" class="section skill">
            <div class="info">
                <h5 class="">Skills - suas expecialidades</h5>
                <div class="row progress-bar-section">

                    <div class="col-md-12 mx-auto">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-11 mx-auto">
                                    <div class="input-form">
                                        <input type="text" class="form-control" id="skills" placeholder="Adicionar uma nova habilidade" value="">
                                        <button id="add-skills" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-11 mx-auto">
                        <div class="custom-progress top-right progress-up" style="width: 100%">
                            <p class="skill-name">PHP</p>
                            <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="25">
                            <div class="range-count"><span class="range-count-number" data-rangecountnumber="25">25</span> <span class="range-count-unit">%</span></div>
                        </div>
                    </div>
                    <div class="col-md-11 mx-auto">
                        <div class="custom-progress top-right progress-up" style="width: 100%">
                            <p class="skill-name">Wordpress</p>
                            <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="50">
                            <div class="range-count"><span class="range-count-number" data-rangecountnumber="50">50</span> <span class="range-count-unit">%</span></div>
                        </div>
                    </div>
                    <div class="col-md-11 mx-auto">
                        <div class="custom-progress top-right progress-up" style="width: 100%">
                            <p class="skill-name">Javascript</p>
                            <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="70">
                            <div class="range-count"><span class="range-count-number" data-rangecountnumber="70">70</span> <span class="range-count-unit">%</span></div>
                        </div>
                    </div>
                    <div class="col-md-11 mx-auto">
                        <div class="custom-progress top-right progress-up" style="width: 100%">
                            <p class="skill-name">jQuery</p>
                            <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="60">
                            <div class="range-count"><span class="range-count-number" data-rangecountnumber="60">60</span> <span class="range-count-unit">%</span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    -->
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    
    <script>
        function teste(){
            if(document.getElementById('birth_date').value == ''){

                Swal.fire(
                    'Error - Nascimento!',
                    'Data é um campo obrigatorio.',
                    'error'
                )
            }else{


                var formData = new FormData(document.getElementById("inputFile"));

                formData.append('birth_date', document.getElementById('birth_date').value);
                //formData.append('avatar', document.getElementById('avatar').value);
                formData.append('profission', document.getElementById('profission').value);
                formData.append('biography', document.getElementById('biography').value);
                formData.append('pais', document.getElementById('pais').value);
                formData.append('city', document.getElementById('city').value);
                formData.append('telephone', document.getElementById('telephone').value);
                formData.append('cep', document.getElementById('cep').value);
                formData.append('adress', document.getElementById('adress').value);
                formData.append('likedin', 'required');
                formData.append('twitter', 'required');
                formData.append('facebook','required');
                formData.append('required', 'required');
                formData.append('_token', '{{ csrf_token() }}');



                $.ajax({

                    url: "{{ route('editProfileSave') }}",
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
                            'Seus dados foram atualizados.',
                            'success'
                        )

                    }else{
                        
                        Swal.fire(
                            'Error!',
                            'Seus dados não foram atualizados.',
                            'error'
                        )

                    }

                }).fail(function(jqXHR, textStatus ) {
                    
                    console.log("Request failed: " + textStatus);

                    Swal.fire(
                            'Error!',
                            'E necessario informar todos os campos.',
                            'error'
                        )

                });


            }


        }
    
   </script>
   
    <script src="{{ asset('cork/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cork/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
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
 