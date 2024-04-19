@extends('base')
@section('title', 'Détails des Projets')

@section('content')

<div class="flex justify-center"> 
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg " style="width: 800px">
        <table class="w-full text-sm text-gray-500 dark:text-gray-400">
            @vite('resources/css/app.css')
            <thead class="text-xs uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Code du Projet
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nom du Projet
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date de Lancement
                    </th>
                    <th scope="col" class="px-6 py-3 ml-[-10]">
                        Durée
                    </th>
                    <th scope="col" class="px-6 py-3 ml-[-10]">
                        Localité
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projets as $projet)
                <tr class="bg-blue-100 border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        {{$projet->codeProjet}}
                        
                    </td>
                    <td class="px-6 py-4">
                        {{$projet->nomProjet}}
                    </td>
                    <td class="px-6 py-4">
                        {{$projet->dateLancement}}
                    </td>
                    <td class="px-6 py-4">
                        {{$projet->localite->nomLocalite}}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex"> 
                            <a href="{{ route('projet.edit', $projet->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-3">Modifier</a>
                            <form action="{{ route('projet.destroy', $projet->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirmDelete(event)">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
function confirmDelete(event) {
    if (!confirm('Êtes-vous sûr de vouloir supprimer ?')) {
        event.preventDefault(); 
    }
}
</script>

@endsection
