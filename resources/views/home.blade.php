@extends('layouts.app')
@section('content')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center mb-8">
            <img src="{{ asset('images/banner2.png') }}"
                 style="width:auto; height: 200px;"
                 class="border border-3 rounded-circle "
                 alt="Logo do Cardápio Digital">
        </div>
    </div>
</div>
<br><br><br><br>
<div class="container g-2">
    <div class="row">
        <div class="col-12 d-flex justify-content-center mb-8">
            <h1 class="text fs-2xl fw-bold bg-dark">Cardápio Digital</h1>
        </div>
    </div>
<br><br>
    <div class="d-flex justify-content-center align-items-start gap-4 flex-wrap mb-5">

        <section class="card border border-3 rounded-fill" style="width: 320px;">
            <div class="position-relative">
                <img src="{{ asset('images/hamburguer.jpeg') }}"
                class="card-img-top"
                alt="Hambúrguer simples com pão, hambúrguer, queijo, alface e tomate">
                <span class="badge theme-info position-absolute top-0 end-0 m-2">
                    Promoção
                </span>
            </div>

            <div class="card-body">
                <h4 class="card-title fw-bold">Hamburguer Simples</h4>

                <p class="card-text">Pão, hambúrguer, queijo, alface e tomate.</p>

                <p>Preço: R$ 22,00</p>
                
                <a href="#" class="btn-solid theme-success">Pedir Agora</a>
            </div>
        </section>

        <section class="card border border-3 rounded-fill" style="width: 320px;">
            <div class="position-relative">
                <img src="{{ asset('images/hamburguer.jpeg') }}"
                class="card-img-top"
                alt="Hambúrguer simples com pão, hambúrguer, queijo, alface e tomate">
                <span class="badge theme-info position-absolute top-0 end-0 m-2">
                    Promoção
                </span>
            </div>

            <div class="card-body">
                <h4 class="card-title fw-bold">Hamburguer Simples</h4>

                <p class="card-text">Pão, hambúrguer, queijo, alface e tomate.</p>

                <p>Preço: R$ 22,00</p>
                
                <a href="#" class="btn-solid theme-success">Pedir Agora</a>
            </div>
        </section>
        <section class="card border border-3 rounded-fill" style="width: 320px;">
            <div class="position-relative">
                <img src="{{ asset('images/hamburguer.jpeg') }}"
                class="card-img-top"
                alt="Hambúrguer simples com pão, hambúrguer, queijo, alface e tomate">
                <span class="badge theme-info position-absolute top-0 end-0 m-2">
                    Promoção
                </span>
            </div>

            <div class="card-body">
                <h4 class="card-title fw-bold">Hamburguer Simples</h4>

                <p class="card-text">Pão, hambúrguer, queijo, alface e tomate.</p>

                <p>Preço: R$ 22,00</p>
                
                <a href="#" class="btn-solid theme-success">Pedir Agora</a>
            </div>
        </section>        
    </div>
    <div class="d-flex justify-content-center align-items-start gap-4 flex-wrap">
        <section class="card border border-3 rounded-fill" style="width: 320px;">
            <div class="position-relative">
                <img src="{{ asset('images/hamburguer.jpeg') }}"
                class="card-img-top"
                alt="Hambúrguer simples com pão, hambúrguer, queijo, alface e tomate">
                <span class="badge theme-info position-absolute top-0 end-0 m-2">
                    Promoção
                </span>
            </div>

            <div class="card-body">
                <h4 class="card-title fw-bold">Hamburguer Simples</h4>

                <p class="card-text">Pão, hambúrguer, queijo, alface e tomate.</p>

                <p>Preço: R$ 22,00</p>
                
                <a href="#" class="btn-solid theme-success">Pedir Agora</a>
            </div>
        </section>

        <section class="card border border-3 rounded-fill" style="width: 320px;">
            <div class="position-relative">
                <img src="{{ asset('images/hamburguer.jpeg') }}"
                class="card-img-top"
                alt="Hambúrguer simples com pão, hambúrguer, queijo, alface e tomate">
                <span class="badge theme-info position-absolute top-0 end-0 m-2">
                    Promoção
                </span>
            </div>

            <div class="card-body">
                <h4 class="card-title fw-bold">Hamburguer Simples</h4>

                <p class="card-text">Pão, hambúrguer, queijo, alface e tomate.</p>

                <p>Preço: R$ 22,00</p>
                
                <a href="#" class="btn-solid theme-success">Pedir Agora</a>
            </div>
        </section>
        <section class="card border border-3 rounded-fill" style="width: 320px;">
            <div class="position-relative">
                <img src="{{ asset('images/hamburguer.jpeg') }}"
                class="card-img-top"
                alt="Hambúrguer simples com pão, hambúrguer, queijo, alface e tomate">
                <span class="badge theme-info position-absolute top-0 end-0 m-2">
                    Promoção
                </span>
            </div>

            <div class="card-body">
                <h4 class="card-title fw-bold">Hamburguer Simples</h4>

                <p class="card-text">Pão, hambúrguer, queijo, alface e tomate.</p>

                <p>Preço: R$ 22,00</p>
                
                <a href="#" class="btn-solid theme-success">Pedir Agora</a>
            </div>
        </section>          
    </div>
</div>



@endsection