@extends('auth.base')

@section('content')

<form action="{{ route('register') }}" method="post" >
@csrf

@if($errors->any())
  @foreach ($errors->all() as $error)
    <div class="bg-white border border-solid text-primary-dark p-4 rounded mb-4">
      {{ $error }}
    </div>
  @endforeach
@endif

<div class="flex flex-col">
    <label for="name" class="block text-sm font-medium text-white">Nome</label>
    <div class="mt-1">
      <input type="text" name="name" id="name" class="name p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Seu Nome"  >
    </div>
</div>

<div class="flex flex-col mt-4">
    <label for="email" class="block text-sm font-medium text-white">Email</label>
    <div class="mt-1">
      <input type="email" class="email p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" name="email" placeholder="Digite seu email"  >
    </div>
</div>

<div class="flex flex-col mt-4">
  <label for="password" class="block text-sm font-medium text-white">Senha</label>
  <div class="mt-1">
    <input type="password" class="password p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" id="password" name="password" placeholder="Sua Senha"  >
  </div>
</div>

<div class="flex flex-col mt-4">
  <label for="password_confirmation" class="block text-sm font-medium text-white">Confirme a Senha</label>
  <div class="mt-1">
    <input type="password" class="password_confirmation p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" id="password_confirmation" name="password_confirmation" placeholder="Repita sua Senha"  >
  </div>
</div>

<button class="p-2 bg-white text-black w-full rounded-lg mt-4">Entrar</button>

</form>

@endsection