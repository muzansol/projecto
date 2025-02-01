
@extends('layouts.layout')

@section('title', 'Listagem das Contas')

@section('content')


<div class="app-content main-content">
    <div class="side-app main-container">


        <!--Page header-->
        <div class="page-header d-lg-flex d-block">
            <div class="page-leftheader">
                <div class="page-title">Editar Perfil</div>
            </div>
            <div class="page-rightheader ms-md-auto">
                <div class=" btn-list">
                    <button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
        <!--End Page header-->
        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <!-- Row -->
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="card">

                    <div class="card-header border-bottom-0">
                        <div class="card-title">Edit Password</div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('password.update') }}" >
                            @csrf
                            @method('put')
                        <div class="form-group">
                            <label class="form-label">Current Password</label>
                            <input class="form-control" id="current_password" name="current_password" type="password"  autocomplete="current-password">
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-damger" />

                            <div class="form-group">
                                <label class="form-label">Confirm Password</label>
                                <input  class="form-control" id="password" name="password" type="password" autocomplete="new-password">
                            </div>
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2  text-damger" />

                        <div class="form-group">
                            <label class="form-label">Confirm Password</label>
                            <input  class="form-control" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password">
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2  text-damger" />
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-lg btn-primary">Atualizar</button>
                                <a  href="javascript:void(0);" class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>


                </div>

                <div class="card">

                    <div class="card-header border-bottom-0">
                        <div class="card-title">Eliminar Minha Conta</div>
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{ route('profile.destroy') }}" >
                            @csrf
                            @method('delete')
                            <h4>Deseja realmente eliminar a sua conta?</h4>
                        <p>Por favor, esteja ciente de que ao clicar no botão 'Eliminar Conta', todos os seus dados associados a esta conta serão permanentemente removidos do nosso sistema. Esta ação é irreversível e resultará na perda completa do acesso à sua conta, histórico e informações relacionadas. Recomendamos que você faça backup ou salve quaisquer dados importantes antes de prosseguir. Se você tem alguma dúvida ou precisa de assistência, entre em contato com nosso suporte ao cliente antes de tomar esta decisão. Ao confirmar a eliminação da sua conta, você concorda com estas condições.</p>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input class="form-control"   id="password"
                            name="password"
                            type="password"
                            placeholder="{{ __('Password') }}">
                        </div>
                      <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-danger" />



                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-lg btn-danger">Eliminar Conta</button>
                            </div>
                        </form>
                    </div>


                </div>


            </div>



            <div class="col-xl-8 col-lg-7">
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <div class="card-title">Informações básicas</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="post">
                            @csrf
                            @method('patch')


                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nome Completo</label>
                                    <input id="name" name="name" type="text" class="form-control" placeholder="Nome Completo" :value="old('name', $user->name)" required autofocus autocomplete="name">
                                </div>
                            </div>
                            <x-input-error class="mt-2 text-danger" :messages="$errors->get('name')" />
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email </label>
                                        <input id="email" name="email" type="email" class="form-control" placeholder="Email"  :value="old('email', $user->email)" required autocomplete="username" >
                                    </div>
                                </div>
                                <x-input-error class="mt-2 text-danger" :messages="$errors->get('email')" />

                        </div>



                    </form>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header border-bottom-0">
                        <div class="card-title">Perfil de Paciente</div>
                    </div>
                    <div class="card-body">

                            <form action="{{route('paciente.store')}} " method="POST" enctype="multipart/form-data" >
                                @csrf
                                <input type="hidden" id="id_user" name="id_user" value="{{ Auth::user()->id}}">

                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nome</label>
                                        <input class="form-control" readonly type="text" name="nome" id="nome" value="{{ Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input class="form-control"  type="text" name="email" id="email" value="{{ Auth::user()->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Data de Nascimento</label>
                                        <input class="form-control" type="date" id="dataNascimento" name="dataNascimento"  placeholder="Informe a data de Nasc do Paciente ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Telefone</label>
                                        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Informe o telefone do Paciente">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nº do Documento</label>
                                        <input class="form-control" type="text" name="numero_documento"  id="numero_documento" placeholder="Nº de ordem do Paciente">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Endereço</label>
                                        <input class="form-control" type="text" name="endereco" id="endereco" placeholder="endereço do Paciente">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Convênio</label>
                                        <input class="form-control" type="text" name="seguro" id="seguro" placeholder="Convênio">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="form-label">Histórico de Saúde</label>
                                <textarea rows="3" class="form-control" name="nota" id="nota" placeholder="Histórico de Saúde"></textarea>
                            </div>

                            <div class="custom-controls-stacked d-md-flex">
                                <label class="form-label mt-1 me-5">Gênero :</label>
                                <label class="custom-control custom-radio primary me-4">
                                    <input type="radio"id="genero" name="genero" class="custom-control-input"  value="Masculino">
                                    <span class="custom-control-label">Masculino</span>
                                </label>
                                <label class="custom-control custom-radio primary me-4">
                                    <input type="radio" name="genero" id="genero" class="custom-control-input"  value="Feminino">
                                    <span class="custom-control-label">Feminino</span>
                                </label>
                            </div>

                        <div class="modal-footer">
                            <button  class="btn btn-outline-primary" data-bs-dismiss="modal">Cancelar</button>
                            <button  class="btn btn-success" onclick="not1()">Cadastrar</button>
                        </div>
                    </form>


                    </div>
                </div>

            </div>
        </div>
        <!-- End Row-->

    </div>
</div><!-- end app-content-->





@endsection


