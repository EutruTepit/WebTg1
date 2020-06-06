@extends('adminlte::page')

@section('title', 'ShopShoes')

@section('content_header')
    <h1>Painel de Controle</h1>
@stop

@section('content')
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$produtos}}</h3>
            <p>Produtos Cadastrados</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
        <a href="{{ route('produto') }}" class="small-box-footer">Mais Inforamções <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div><!-- row -->

    <!-- Avisos -->
    <div class="row">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Sobre o Sistema</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <span class="label label-primary">Aviso</span>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            Bem Vindo ao Painel de Administraçao, aqui você poderá ver seus produtos.
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <div class="col-md-6">
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Cadastros</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <span class="label label-primary">Aviso</span>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
             Você pode cadastrar novos produtos. Todos eles serão mostrados no seu site da sua loja.
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>


      
      
@stop