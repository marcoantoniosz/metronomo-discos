<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Editar Nível de Acesso') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <p class="mb-4">Editando nível de acesso do usuário</p><b>{{$user-> name}}</b>
          <p class="mb4">Nível de acesso atual: <b>{{$user->role}}</b></p>
          <div class="p6 tex-gray-900 dark:text-gray-900">
            <form action="{{ route('user.update', $user->id) }}" method="post">
              @csrf
              @method('PUT')
              <label for="role">Selecione o nível</label>
              <select required name="role" id="role" class="py-1 px-8 rounded">
                <option selected disabled></option>
                <option value="admin">Administrador</option>
                <option value="user">Usuário</option>
              </select>

              <button type="submit" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Salvar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>