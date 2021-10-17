@extends('usuarios.layout')

@section('title',__($usuariotable->nome . ': Usuario - i9W3b'))

@push('css')
<style>
table{
font-family: Verdana,sans-serif;
border: 1px solid #ccc;
margin: 20px 0;
}

table th{
    padding:10px;
    font-weight: normal;
}
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span><span class="text-info">{{$usuariotable->nome}}</span>: (@lang('Usuario')) - i9W3b</span>
                        <a href="{{ url('usuarios') }}" class="btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> @lang('Voltar')
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                    <table class="w3-table-all notranslate" width="100%" border="1">
                        <tbody>
                        <tr>
                          <th align="left"><strong>ID:</strong></th>
                          <th align="left">{{$usuariotable->id}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Nome')</strong>:</th>
                            <th align="left">{{$usuariotable->nome}}</th>
                        </tr>
                        <tr>
                            <th align="left"><strong>@lang('Email')</strong>:</th>
                            <th align="left">{{$usuariotable->email}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Data de nascimento')</strong>:</th>
                              <th align="left">{{$usuariotable->datanascimento}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Telefone')</strong>:</th>
                              <th align="left">{{$usuariotable->telefone}}</th>
                          </tr>
                          <tr>
                            <th align="left"><strong>@lang('Adicionado')</strong>:</th>
                            <th align="left">{{$usuariotable->created_at}}</th>
                          </tr>
                          <tr>
                              <th align="left"><strong>@lang('Atualizado')</strong>:</th>
                              <th align="left">{{$usuariotable->updated_at}}</th>
                          </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    // Script personalizado
</script>
@endpush
