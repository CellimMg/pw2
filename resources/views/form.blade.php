@extends('welcome')

@section('conteudo-principal')
    <section class="section">
    <form action="{{url("/carrinho/adicionar")}}" method="POST">

        @csrf
            <div class="input-field">
                <input placeholder = "Nome" type="text" name="nome" id="nome">
                <label for="nome"></label>
                @error('nome')
                    <span class = "red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <input placeholder = "Valor" type="number" step="0.01" name="valor" id="valor">
                <label for="valor"></label>
                @error('valor')
                    <span class = "red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <input placeholder = "Quantidade Estoque" type="number" name="quantidadeEstoque" id="quantidadeEstoque">
                <label for="quantidadeEstoque"></label>
                @error('quantidadeEstoque')
                    <span class = "red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="right-align">
                <a class = "btn-flat waves-effect" href="{{url() -> previous()}}">Cancelar</a>
                <button class = "btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>
    </section>
@endsection
