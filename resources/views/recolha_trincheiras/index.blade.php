
@extends('layouts.layout')

@section('title', 'Equipamentos')

@section('content')


  <!--content-->

  <div class="app-content main-content">
    <div class="side-app main-container">
        @include('layouts.mensagens')
        <!--Page header-->
        <div class="page-header d-xl-flex d-block">
            <div class="page-leftheader">
                <div class="page-title">Poços recolhidos</div>
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
                                    <th class="border-bottom-0">area</th>
                                    <th class="border-bottom-0">expressura esteril</th>
                                    <th class="border-bottom-0">expressura cascálho</th>
                                    <th class="border-bottom-0">Volume esteril</th>
                                    <th class="border-bottom-0">Volume cascálho</th>
                                    <th class="border-bottom-0">diluição</th>
                                    <th class="border-bottom-0">Empolamento</th>
                                    <th class="border-bottom-0">Tipo de rocha</th>
                                    <th class="border-bottom-0">Tipo de depósito</th>
                                    <th class="border-bottom-0">Trincheira</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($recolhatrincheira as $especialidade)

                                <tr>
                                    <td>{{ $especialidade->id}}</td>
                                    <td>{{ $especialidade->area}}</td>
                                    <td>{{ $especialidade->ee}}</td>
                                    <td>{{ $especialidade->ec}}</td>
                                    <td>{{ $especialidade->ve}}</td>
                                    <td>{{ $especialidade->vc}}</td>
                                    <td>{{ $especialidade->diluicao}}</td>
                                    <td>{{ $especialidade->empolamento}}</td>
                                    <td>{{ $especialidade->tipo_rocha}}</td>
                                    <td>{{ $especialidade->tipo_deposito}}</td>
                                    <td>{{ $especialidade->id_trincheira }}</td>
                                   
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
                <form action="{{route('pocoRecolhidos.update', $especialidade->id)}} " method="POST" enctype="multipart/form-data" >
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
                                                        <form action="{{route('pocoRecolhidos.delete', $especialidade->id)}}" method="POST" >
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Recolha diaria de trincheira</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('trincheiraRecolhidos.store')}} " method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" id="id_user" name="id_user" value="1">


                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Diluição</label>
                            <input type="text" class="form-control" name="diluicao">
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Area</label>
                            <input type="text" class="form-control" name="area" >
                        </div>
                   </div>   

                   
                   <div class="row">
                    
                        <div class="form-group col-md-4">
                            <label class="form-label">Expressura esteril</label>
                            <input type="text" class="form-control" name="ee" >
                        </div>

                        
                        <div class="form-group col-md-4">
                            <label class="form-label">Epressura Cascálhio</label>
                            <input type="text"  class="form-control" name="ec">
                        </div>

                    <div class="form-group col-md-4">
                        <label class="form-label">Volume esteril</label>
                        <input type="text"  class="form-control" name="ve">
                    </div>
               </div>



                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label">Volume Cascálhio</label>
                        <input type="text"  class="form-control" name="vc">
                    </div>

                    <div class="form-group col-md-4">
                        <label class="form-label">Empolamento</label>
                        <input type="text"  class="form-control" name="empolamento">
                    </div>

                    <div class="form-group col-md-4">
                        <label class="form-label">Tipo de rocha</label>
                        <input type="text"  class="form-control" name="tipo_rocha">
                    </div>
                </div>

                <div class="row">
                    
                    <div class="form-group col-md-6">
                        <label class="form-label">Tipo de depósito</label>
                        <input type="text"  class="form-control" name="tipo_deposito">
                    </div>
            
                    <div class="col-md-6">
                        <label class="form-label">Poço</label>
                        <select class="form-control" name="id_trincheira" id="">
                            <option value="">Selecione o tipo de poço</option>
                            @foreach ($trincheira as $options)
                                <option value="{{$options->id}}">{{$options->estado}}</option>
                            @endforeach
                        </select>
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


