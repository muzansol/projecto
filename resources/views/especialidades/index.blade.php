
@extends('layouts.layout')

@section('title', 'Agendamentos')

@section('content')


  <!--content-->

  <div class="app-content main-content">
    <div class="side-app main-container">
        @include('layouts.mensagens')
        <!--Page header-->
        <div class="page-header d-xl-flex d-block">
            <div class="page-leftheader">
                <div class="page-title">Especialidades</div>
            </div>
            <div class="page-rightheader ms-md-auto">
                <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                    <div class="btn-list">

                        <a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#eventmodal" class="btn btn-primary me-3">Nova Especialidade</a>
                        <!--<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                        <button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>-->
                        <button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                    </div>
                </div>
            </div>
        </div>
        <!--End Page header-->

      <!-- Row-->
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    @include('layouts.mensagens')


                    <div class="table-responsive">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="client-list">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#ID</th>
                                    <th class="border-bottom-0">Nome</th>
                                    <th class="border-bottom-0">Descrição</th>
                                    <th class="border-bottom-0">Acção</th>

                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($especialidades as $especialidade)

                                <tr>
                                    <td>{{ $especialidade->id }}</td>
                                    <td>{{ $especialidade->nome }}</td>
                                    <td>{{ $especialidade->descricao }}</td>

                                    <td>
                                        <div class="d-flex">

                                           <a   class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprof-{{ $especialidade->id }}">
                                                <i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                            </a>
                                            <a  class="action-btns1"  data-bs-toggle="modal" data-bs-target="#deleteprofissional-{{ $especialidade->id }}" ><i class="feather feather-trash-2 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i></a>
                                        </div>
                                    </td>


<!-- edit modal ... -->
<div class="modal fade"  id="editprof-{{ $especialidade->id }}">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar Agendamento #ID{{ $especialidade->id }} </h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('especialidade.update', $especialidade->id)}} " method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="form-label">Especialidade</label>
                        <input type="text" class="form-control" name="nome" value="{{$especialidade->nome}}" >
                    </div>

                    <div class="form-group">
                        <label class="form-label">Observação</label>
                        <textarea class="form-control" name="descricao" rows="3">{{$especialidade->descricao}}</textarea>
                    </div>



            </div>
            <div class="modal-footer">
                <button  class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</button>
                <button  class="btn btn-primary" onclick="not1()">Atualizar</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--edit Modal -->
<!--delete Modal -->
                                        <div class="modal fade"  id="deleteprofissional-{{ $especialidade->id }}">
                                            <div class="modal-dialog modal-md" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Eliminar Especialidade</h5>
                                                        <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('especialidade.destroy', $especialidade->id)}}" method="POST" >
                                                            @csrf
                                                            @method('DELETE')

                                                            <h4>Tem Certeza que deseja eliminar a especialidade {{$especialidade->nome}} do sistema ?</h4>


                                                    <div class="modal-footer">
                                                        <button  class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</button>
                                                        <button  class="btn btn-danger" type="submit">Excluir</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
<!--fim delete Modal -->

                                </tr>

                                @empty
                                    <span style="color: #f00;">Nenhum Registro encontrado!</span>
                                @endforelse


                            </tbody>
                        </table>
                    </div>





                </div>
            </div>
        </div>
    </div>
    <!-- End Row-->

    </div><!-- end app-content-->
</div>

><!-- end app-content-->

 <!--ANOVO-->
 <div class="modal fade"  id="eventmodal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nova especialidade</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('especialidade.store')}} " method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" id="id_user" name="id_user" value="1">




                    <div class="form-group">
                        <label class="form-label">Especialidade</label>
                        <input type="text" class="form-control" name="nome" >
                    </div>

                    <div class="form-group">
                        <label class="form-label">Observação</label>
                        <textarea class="form-control" name="descricao" rows="3">...</textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</a>
                <button  type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
        </div>
    </div>
</div>
 <!--End Add New Event Modal  -->


 @endsection


