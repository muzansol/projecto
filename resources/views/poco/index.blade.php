
@extends('layouts.layout')

@section('title', 'pocos')

@section('content')


  <!--content-->

  <div class="app-content main-content">
    <div class="side-app main-container">
        @include('layouts.mensagens')
        <!--Page header-->
        <div class="page-header d-xl-flex d-block">
            <div class="page-leftheader">
                <div class="page-title">Poços</div>
            </div>
            <div class="page-rightheader ms-md-auto">
                <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                    <div class="btn-list">

                        <a  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#eventmodal" class="btn btn-primary me-3">Novo</a>
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
                                    <th class="border-bottom-0">Estado</th>
                                    <th class="border-bottom-0">latitude</th>
                                    <th class="border-bottom-0">longitude</th>
                                    <th class="border-bottom-0">Sector</th>
                                    <th class="border-bottom-0">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($pocos as $especialidade)

                                <tr>
                                    <td>{{ $especialidade->id}}</td>
                                    <td>{{ $especialidade->nome}}</td>
                                    <td>{{ $especialidade->estado}}</td>
                                    <td>{{ $especialidade->latitude}}</td>
                                    <td>{{ $especialidade->longitude}}</td>
                                    <td>{{ $especialidade->sector->nome}}</td>
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
                <h5 class="modal-title">Editar poço #ID {{ $especialidade->id }} </h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('poco.update', $especialidade->id)}} " method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="form-label">Nome Poço</label>
                        <input type="text" class="form-control" name="nome" value="{{$especialidade->nome}}" >
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label">Estado</label>
                            <input type="text" class="form-control" name="estado" value="{{$especialidade->estado}}">
                        </div>
    
                        <div class="form-group col-md-12">
                            <label class="form-label">Latitude</label>
                            <input type="text" class="form-control" name="latitude" value="{{$especialidade->latitude}}">
                        </div>
    
                        <div class="form-group col-md-12">
                            <label class="form-label">Longitude</label>
                            <input type="text" class="form-control" name="longitude" value="{{$especialidade->longitude}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="form-label">sector</label>
                            <input type="text" class="form-control" name="id_sector" value="{{$especialidade->sector->nome}}">
                        </div>
                        
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
                                                        <form action="{{route('poco.delete', $especialidade->id)}}" method="POST" >
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
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Novo Poço</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('poco.store')}} " method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" id="id_user" name="id_user" value="1">


                    <div class="row">

                        <div class="form-group col-md-12">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="form-label">Estado</label>
                            <input type="text" class="form-control" name="estado">
                        </div>

                        <div class="form-group col-md-12">
                            <label class="form-label">Latitude</label>
                            <input type="text" class="form-control" name="latitude" >
                        </div>
                   </div>   

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Longitude</label>
                            <input type="text"  class="form-control" name="longitude">
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <label class="form-label">sector</label>
                        <select class="form-control" name="id_sector" id="">
                            <option value="">Selecione o sector</option>
                            @foreach ($sectors as $options)
                                <option value="{{$options->id}}">{{$options->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    
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


