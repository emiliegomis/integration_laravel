{{-- resources/views/patients/index.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Marchandises</title>
    <link rel="stylesheet" href="{{ asset('css/sali.css') }}">
    <style>
        /* Style pour le bouton "Ajouter un Marchandise" */
.btn.btn-ajouter {
    background-color: #007bff;
    color: #080808;
    padding: 10px 20px;
    font-size: 16px;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    display: inline-block;
}

.btn.btn-ajouter:hover {
    background-color: #0056b3;
}

/* Ajoutez d'autres styles personnalisés si nécessaire */

    </style>
</head>
<body>
    <x-app-layout>
    <div class="container">
        <h1>Tableau des Marchandises</h1>
        <div class="action-buttons">
            @if(Auth::user()->isAdmin())
                <a href="{{ route('marchandises.create') }}" class="btn btn-ajouter">Ajouter un Marchandise</a>
            @endif
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="btn btn-deconnexion">Déconnexion</button>
            </form>
        </div>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="rendezvous-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom_marchandise</th>
                    <th>Prix</th>
                    <th>Libelle</th>
                    <th>Quantite</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
               @foreach($marchandises as $marchandise)
               <tr>
                   <td>{{ $marchandise->id }}</td>
                   <td>{{ $marchandise->nom_marchandise }}</td>
                   <td>{{ $marchandise->prix }}</td>
                   <td>{{ $marchandise->libelle }}</td>
                   <td>{{ $marchandise->quantite}}</td>
                   <td>
                       @if(Auth::user()->isAdmin())
                           <a href="{{ route('marchandises.show',  $marchandise->id) }}" class="btn btn-detail">Détail</a>
                           <a href="{{ route('marchandises.edit', $marchandise->id) }}" class="btn btn-modifier">Modifier</a>
                           <form action="{{ route('marchandises.destroy',  $marchandise->id) }}" method="POST" style="display: inline;">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce marchadise ?');">Supprimer</button>
                           </form>
                       @endif
                   </td>
               </tr>
               @php
                    $i = 1;
                @endphp
               @endforeach
            </tbody>
        </table>
        <a href="{{ route('dashboard') }}" class="btn btn-retour"> Retour a dashboard </a>
    </div>
</x-app-layout>
</body>
</html>
