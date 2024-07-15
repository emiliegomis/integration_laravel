<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<style>
    /* Style pour le bouton "Voir la liste des Marchandises" */
.btn.btn-retour {
    background-color: #6c757d;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    display: inline-block;
}

.btn.btn-retour:hover {
    background-color: #5a6268;
}

/* Ajoutez d'autres styles personnalisés si nécessaire */

</style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <a href="{{ route('marchandises.index') }}" class="btn btn-retour">voir la liste des Marchandises</a>
        </div>
    </div>
</x-app-layout>
