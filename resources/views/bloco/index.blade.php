
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
                <div class="page-title">Blocos de reserva</div>
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
                                    <th class="border-bottom-0">latitude</th>
                                    <th class="border-bottom-0">longitude</th>
                                    <th class="border-bottom-0">area</th>
                                    <th class="border-bottom-0">expressura esteril</th>
                                    <th class="border-bottom-0">expressura cascálho</th>
                                    <th class="border-bottom-0">Volume esteril</th>
                                    <th class="border-bottom-0">Volume cascálho</th>
                                    <th class="border-bottom-0">quilates</th>
                                    <th class="border-bottom-0">teor</th>
                                    <th class="border-bottom-0">tamanha_pedra</th>
                                    <th class="border-bottom-0">racío</th>
                                    <th class="border-bottom-0">Preço</th>
                                    <th class="border-bottom-0">Sector</th>
                                </tr>
                            </thead>
                            <tbody>
                              @forelse ($blocos as $especialidade)

                                <tr>
                                    <td>{{ $especialidade->id}}</td>
                                    <td>{{ $especialidade->latitude}}</td>
                                    <td>{{ $especialidade->longitude}}</td>
                                    <td>{{ $especialidade->area}}</td>
                                    <td>{{ $especialidade->e_e}}</td>
                                    <td>{{ $especialidade->e_c}}</td>
                                    <td>{{ $especialidade->v_e}}</td>
                                    <td>{{ $especialidade->v_c}}</td>
                                    <td>{{ $especialidade->quilates}}</td>
                                    <td>{{ $especialidade->teor}}</td>
                                    <td>{{ $especialidade->tamanho_pedra}}</td>
                                    <td>{{ $especialidade->racio}}</td>
                                    <td>{{ $especialidade->preço}}</td>
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
                <h5 class="modal-title">Editar Agendamento #ID{{ $especialidade->id }} </h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('equipamento.update', $especialidade->id)}} " method="POST" enctype="multipart/form-data" >
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
                                                        <form action="{{route('blocos.delete', $especialidade->id)}}" method="POST" >
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
                <h5 class="modal-title">Novo bloco</h5>
                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('blocos.store')}} " method="POST" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" id="id_user" name="id_user" value="1">


                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="form-label">Latitude</label>
                            <input type="text" class="form-control" name="latitude">
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Longitude</label>
                            <input type="text" class="form-control" name="longitude" >
                        </div>

                        <div class="form-group col-md-4">
                            <label class="form-label">Area</label>
                            <input type="text" class="form-control" name="area" >
                        </div>
                   </div>   

                   
                   <div class="row">
                    
                        <div class="form-group col-md-4">
                            <label class="form-label">Expressura esteril</label>
                            <input type="text" class="form-control" name="e_e" >
                        </div>

                        
                        <div class="form-group col-md-4">
                            <label class="form-label">Epressura Cascálhio</label>
                            <input type="text"  class="form-control" name="e_c">
                        </div>

                    <div class="form-group col-md-4">
                        <label class="form-label">Volume esteril</label>
                        <input type="text"  class="form-control" name="v_e">
                    </div>
               </div>



                <div class="row">
                    <div class="form-group col-md-4">
                        <label class="form-label">Volume Cascálhio</label>
                        <input type="text"  class="form-control" name="v_c">
                    </div>

                    <div class="form-group col-md-4">
                        <label class="form-label">Quilates</label>
                        <input type="text"  class="form-control" name="quilates">
                    </div>

                    <div class="form-group col-md-4">
                        <label class="form-label">Teor</label>
                        <input type="text"  class="form-control" name="teor">
                    </div>
                </div>

                <div class="row">
                    

                    <div class="form-group col-md-4">
                        <label class="form-label">Tamanho da pedra</label>
                        <input type="text"  class="form-control" name="tamanho_pedra">
                    </div>

                    <div class="form-group col-md-4">
                        <label class="form-label">Racio</label>
                        <input type="text"  class="form-control" name="racio">
                    </div>

                    <div class="form-group col-md-4">
                        <label class="form-label">Preço</label>
                        <input type="text"  class="form-control" name="preço">
                    </div>
                </div>

               
                <div class="row">
                    <div class="col-md-12">
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


