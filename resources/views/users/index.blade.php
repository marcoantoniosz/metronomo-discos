<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Lista de Usuários') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <p class="mb-4">Olá <b>{{ Auth::user()->name }}</b></p>
        </div>
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <div class="p3 bg-gray100 rounded-lg mb4">
            {{ $users->links() }}
          </div>

          <table class="table-auto w-full">
            <thead class="text-left bg-gray-100 dark:text-gray-900">
              <tr>
                <th class="text-center">Nível</th>
                <th class="p-4">Nome</th>
                <th>E-mail</th>
                <th class="p-2 text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $users as $user )
              <tr>
                <td class="text-center">
                  @if ( $user->role == 'admin' )
                  <i class="fa-solid fa-crown"></i>
                  @else
                  <i class="fa-solid fa-user"></i>
                  @endif
                </td>
                <td class="p-4">{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="p-2 text-center">
                  <a href="{{ route('user.edit', $user->id) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>