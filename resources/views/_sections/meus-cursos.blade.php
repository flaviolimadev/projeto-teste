<style>
    body .table tbody tr td {
        padding: 10px !important;
    }
</style>

<div class="col-xl-12 col-lg-12 col-md-12 layout-spacing widget widget-table-two">
    <div class="widget-content">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th class="text-center" scope="col">Status</th>
                        <th class="text-center" scope="col">Data</th>
                        <th class="text-center" scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $course)

                    <tr>
                        <td>
                            <div class="media">
                                <div class="avatar me-2">
                                    <img alt="avatar" src="{{ asset('storage') }}/{{ $course->avatar }}" class="rounded-circle" />
                                </div>
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0">{{ $course->name }}</h6>
                                    <span>ID #{{ $course->id }}</span>
                                </div>
                            </div>
                        </td>

                        <td class="text-center">
                            <p class="mb-0">
                                @switch($course->status )
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
                            </p>
                        </td>

                        <td class="text-center">
                            <span class="badge">{{ $course->created_at->format('d/m/Y H:m') }}</span>
                        </td>

                        <td class="text-center">
                            <div class="action-btns">
                                <a href="{{ route('editCourse', ['id'=> $course->id]) }}" class="action-btn btn-edit bs-tooltip me-2" data-toggle="tooltip"
                                    data-placement="top" title="Editar Curso">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-edit-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg>
                                </a>

                                <a href="{{ route('allcourses', ['curso' => $course->id, 'modulo' => 1]) }}" class="action-btn btn-view bs-tooltip me-2" data-toggle="tooltip"
                                    data-placement="top" title="Ver como Aluno">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                </a>
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
        'Curso adicionado com sucesso.',
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
