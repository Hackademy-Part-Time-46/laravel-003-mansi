<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $regioni_italiane = [
        "Abruzzo" => ["L'Aquila", "Teramo", "Pescara", "Chieti"],
        "Basilicata" => ["Potenza", "Matera"],
        "Calabria" => ["Catanzaro", "Cosenza", "Crotone", "Reggio Calabria", "Vibo Valentia"],
        "Campania" => ["Avellino", "Benevento", "Caserta", "Napoli", "Salerno"],
        "Emilia-Romagna" => ["Bologna", "Ferrara", "Forlì-Cesena", "Modena", "Parma", "Piacenza", "Ravenna", "Reggio Emilia", "Rimini"],
        "Friuli Venezia Giulia" => ["Gorizia", "Pordenone", "Trieste", "Udine"],
        "Lazio" => ["Frosinone", "Latina", "Rieti", "Roma", "Viterbo"],
        "Liguria" => ["Genova", "Imperia", "La Spezia", "Savona"],
        "Lombardia" => ["Bergamo", "Brescia", "Como", "Cremona", "Lecco", "Lodi", "Mantova", "Milano", "Monza e Brianza", "Pavia", "Sondrio", "Varese"],
        "Marche" => ["Ancona", "Ascoli Piceno", "Fermo", "Macerata", "Pesaro e Urbino"],
        "Molise" => ["Campobasso", "Isernia"],
        "Piemonte" => ["Alessandria", "Asti", "Biella", "Cuneo", "Novara", "Torino", "Verbano-Cusio-Ossola", "Vercelli"],
        "Puglia" => ["Bari", "Barletta-Andria-Trani", "Brindisi", "Foggia", "Lecce", "Taranto"],
        "Sardegna" => ["Cagliari", "Nuoro", "Oristano", "Sassari", "Sud Sardegna"],
        "Sicilia" => ["Agrigento", "Caltanissetta", "Catania", "Enna", "Messina", "Palermo", "Ragusa", "Siracusa", "Trapani"],
        "Toscana" => ["Arezzo", "Firenze", "Grosseto", "Livorno", "Lucca", "Massa-Carrara", "Pisa", "Pistoia", "Prato", "Siena"],
        "Trentino-Alto Adige" => ["Bolzano", "Trento"],
        "Umbria" => ["Perugia", "Terni"],
        "Valle d'Aosta" => ["Aosta"],
        "Veneto" => ["Belluno", "Padova", "Rovigo", "Treviso", "Venezia", "Verona", "Vicenza"]
    ];

    return view('index', ['regioni' => $regioni_italiane]);
})->name('index');

// Route::get('/potenza', function () {
//     return view('potenza');
// })->name('potenza');

// Route::get('/matera', function () {
//     return view('matera');
// })->name('matera');

Route::get('/provincia/{nome}', function ($nome) {
    return view('show', ['nome' => $nome]);
})->name('show');
