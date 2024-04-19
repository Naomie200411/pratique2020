@extends('base')
@section('title', 'ENREGISTREMENT DES PROJETS')

@section('content')
@vite('resources/css/app.css')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="flex justify-center items-center h-full">
    <form method="POST" action="{{ route('projet.store') }}" class="w-full max-w-lg bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="projetForm">
        <h2 class="text-2xl mb-4 text-center font-bold">SAISIE  DES PROJETS</h2>
        @csrf
        <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
            <label for="codeProjet">Code projet</label>
            <input type="text" name="codeProjet" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="codeProjet" >
            @error('CodeProjet')
                <span class="text-red-800 bg-red-50">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
            <label for="nomProjet">Nom du projet</label>
            <input type="text" name="nomProjet" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nomProjet" >
            @error('nomProjet')
                <span class="text-red-800 bg-red-50">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
            <label for="dateLancement">Date de lancement</label>
            <input type="date" name="dateLancement" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dateLancement" >
            @error('dateLancement')
                <span class="text-red-800 bg-red-50">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
            <label for="duree">Durée</label>
            <input type="text" name="duree" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="duree" >
            @error('duree')
                <span class="text-red-800 bg-red-50">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
            <label for="localite_id">Localite</label>
            <select name="localite_id" id="localite_id" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"  placeholder="Selectionnez un arrondissemment">
                @foreach ($localites as $localite)
               
                <option value ="{{ $localite->id }}">{{ $localite->nomLocalite}} </option>
                @endforeach 
            </select>

            @error('localite_id')
            <span class="text-red-800 bg-red-50">{{ $message }}</span>
          @enderror
        </div>    

            <div class="flex justify-center mt-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                   Soummettre
                </button>
    
                <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-5" onclick="resetForm()">
                    Annuler
                </button>
            </div>
            
        </div>
        
    </form>
</div>
<script>

    function resetForm() {
        $('#projetForm').find('input, select, textarea').val('');
    }
   
    </script>
    
@endsection
