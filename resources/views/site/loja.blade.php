@extends('site.layout')

@section('title','Loja')

@section('content')

<div class="row sobre">
        <h2>CONECTE-SE ÀS VANTAGENS DA SHOPSHOES E SIGA O LÍDER</h2>
        <div class="bloco">
            <div class="com-md-12">
                 <img src="{{url('resource/site/img/5054_icon-02.jpg')}}">
            </div>
            <div class="col-md-12">
                <h3>VELOCIDADE DA ENTREGA</h3>
                <p>Com a entrega expressa você recebe em tempo recorde!</p>
            </div>
        </div>
        <div class="bloco">
            <div class="com-md-12">
                 <img src="{{url('resource/site/img/7032_icon-06.jpg')}}">
            </div>
            <div class="col-md-12">
                <h3>CENTRAL DE RELACIONAMENTO</h3>
                <p>Sempre pronta para tirar suas dúvidas e resolver o que você precisa</p>
            </div>
        </div>
        <div class="bloco">
            <div class="com-md-12">
                <img src="{{url('resource/site/img/9410_icon-03.jpg')}}" >
            </div>
            <div class="col-md-12">
                 <h3>MELHORES MARCAS</h3>
                 <p>Milhares de produtos esportivos para você escolher. Ah, e tudo original!</p>
            </div>
        </div>
    </div>
@endsection
