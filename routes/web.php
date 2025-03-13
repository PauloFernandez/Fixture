<?php

use App\Http\Controllers\ArbitroController;
use App\Http\Controllers\CanchaController;
use App\Http\Controllers\chart\GraficoController;
use App\Http\Controllers\csv\CsvEquipoController;
use App\Http\Controllers\csv\CsvJugadorController;
use App\Http\Controllers\csv\CsvNoticiaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EquipoPartidoController;
use App\Http\Controllers\guest\GuestController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\JugadorPartidoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\pdf\PdfTorneoController;
use App\Http\Controllers\TarjetaController;
use App\Http\Controllers\TorneoController;
use Illuminate\Support\Facades\Route;

//Info reglas pagina principal
Route::get('/', [TorneoController::class, 'inf_torneo'])->name('/');
//Info PDF pagina principal
Route::get('torneo/infoTorneo', [PdfTorneoController::class, 'infoTorneo'])->name('torneo.infoTorneo');

//Controladores GUEST
Route::get('/clasificaciones', [GuestController::class, 'clasificaciones'])->name('guests.clasificaciones');
Route::get('/partidos', [GuestController::class, 'partidos'])->name('guests.partidos');
Route::get('/equipos', [GuestController::class, 'equipos'])->name('guests.equipos');
Route::get('/asistencias', [GuestController::class, 'asistencias'])->name('guests.asistencias');
Route::get('/goleadores', [GuestController::class, 'goleadores'])->name('guests.goleadores');
Route::get('/noticias', [GuestController::class, 'noticias'])->name('guests.noticias');


//Controladores admin
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');

//Noticias 
Route::get('/layouts/admin/noticia', [NoticiaController::class, 'index'])->name('admin.noticia.index');
Route::get('/layouts/admin/noticia/create', [NoticiaController::class, 'create'])->name('admin.noticia.create');
Route::post('/layouts/admin/noticia/store', [NoticiaController::class, 'store'])->name('admin.noticia.store');
Route::get('/layouts/admin/noticia/edit/{noticia}', [NoticiaController::class, 'edit'])->name('admin.noticia.edit');
Route::put('/layouts/admin/noticia/update/{noticia}', [NoticiaController::class, 'update'])->name('admin.noticia.update');
Route::delete('/layouts/admin/noticia/destroy/{noticia}', [NoticiaController::class, 'destroy'])->name('admin.noticia.destroy');

//Torneo
Route::get('/layouts/admin/torneo', [TorneoController::class, 'index'])->name('admin.torneo.index');
Route::get('/layouts/admin/torneo/create', [TorneoController::class, 'create'])->name('admin.torneo.create');
Route::post('/layouts/admin/torneo/store', [TorneoController::class, 'store'])->name('admin.torneo.store');
Route::get('/layouts/admin/torneo/edit/{torneo}', [TorneoController::class, 'edit'])->name('admin.torneo.edit');
Route::put('/layouts/admin/torneo/update/{torneo}', [TorneoController::class, 'update'])->name('admin.torneo.update');
Route::delete('/layouts/admin/torneo/destroy/{torneo}', [TorneoController::class, 'destroy'])->name('admin.torneo.destroy');
Route::get('layouts/admin/torneo/show/{torneo}', [TorneoController::class, 'show'])->name('admin.torneo.show');

//Cancha
Route::get('/layouts/admin/cancha', [CanchaController::class, 'index'])->name('admin.cancha.index');
Route::get('/layouts/admin/cancha/create', [CanchaController::class, 'create'])->name('admin.cancha.create');
Route::post('/layouts/admin/cancha/store', [CanchaController::class, 'store'])->name('admin.cancha.store');
Route::get('/layouts/admin/cancha/edit/{cancha}', [CanchaController::class, 'edit'])->name('admin.cancha.edit');
Route::put('/layouts/admin/cancha/update/{cancha}', [CanchaController::class, 'update'])->name('admin.cancha.update');
Route::delete('/layouts/admin/cancha/destroy/{cancha}', [CanchaController::class, 'destroy'])->name('admin.cancha.destroy');

//Tarjeta
Route::get('/layouts/admin/tarjeta', [TarjetaController::class, 'index'])->name('admin.tarjeta.index');
Route::get('/layouts/admin/tarjeta/create', [TarjetaController::class, 'create'])->name('admin.tarjeta.create');
Route::post('/layouts/admin/tarjeta/store', [TarjetaController::class, 'store'])->name('admin.tarjeta.store');
Route::get('/layouts/admin/tarjeta/edit/{tarjeta}', [TarjetaController::class, 'edit'])->name('admin.tarjeta.edit');
Route::put('/layouts/admin/tarjeta/update/{tarjeta}', [TarjetaController::class, 'update'])->name('admin.tarjeta.update');
Route::delete('/layouts/admin/tarjeta/destroy/{tarjeta}', [TarjetaController::class, 'destroy'])->name('admin.tarjeta.destroy');

//Arbitro
Route::get('/layouts/admin/arbitro', [ArbitroController::class, 'index'])->name('admin.arbitro.index');
Route::get('/layouts/admin/arbitro/create', [ArbitroController::class, 'create'])->name('admin.arbitro.create');
Route::post('/layouts/admin/arbitro/store', [ArbitroController::class, 'store'])->name('admin.arbitro.store');
Route::get('/layouts/admin/arbitro/edit/{arbitro}', [ArbitroController::class, 'edit'])->name('admin.arbitro.edit');
Route::put('/layouts/admin/arbitro/update/{arbitro}', [ArbitroController::class, 'update'])->name('admin.arbitro.update');
Route::delete('/layouts/admin/arbitro/destroy/{arbitro}', [ArbitroController::class, 'destroy'])->name('admin.arbitro.destroy');

//Equipo
Route::get('/layouts/admin/equipo', [EquipoController::class, 'index'])->name('admin.equipo.index');
Route::get('/layouts/admin/equipo/create', [EquipoController::class, 'create'])->name('admin.equipo.create');
Route::post('/layouts/admin/equipo/store', [EquipoController::class, 'store'])->name('admin.equipo.store');
Route::get('/layouts/admin/equipo/edit/{equipo}', [EquipoController::class, 'edit'])->name('admin.equipo.edit');
Route::put('layouts/admin/equipo/update/{equipo}', [EquipoController::class, 'update'])->name('admin.equipo.update');
Route::delete('layouts/admin/equipo/destroy/{equipo}', [EquipoController::class, 'destroy'])->name('admin.equipo.destroy');
Route::get('/layouts/admin/equipo/ctaEquipo', [EquipoController::class, 'ctaEquipo'])->name('admin.equipo.ctaEquipo');
Route::get('/layouts/admin/equipo/editCtaEquipo/{equipo}', [EquipoController::class, 'editCtaEquipo'])->name('admin.equipo.editCtaEquipo');
Route::put('/layouts/admin/equipo/updateCtaEquipo/{equipo}', [EquipoController::class, 'updateCtaEquipo'])->name('admin.equipo.updateCtaEquipo');

//Jugador
Route::get('/layouts/admin/jugador', [JugadorController::class, 'index'])->name('admin.jugador.index');
Route::get('/layouts/admin/jugador/create', [JugadorController::class, 'create'])->name('admin.jugador.create');
Route::post('/layouts/admin/jugador/store', [JugadorController::class, 'store'])->name('admin.jugador.store');
Route::get('/layouts/admin/jugador/edit/{jugador}', [JugadorController::class, 'edit'])->name('admin.jugador.edit');
Route::put('layouts/admin/jugador/update/{jugador}', [JugadorController::class, 'update'])->name('admin.jugador.update');
Route::delete('layouts/admin/jugador/destroy/{jugador}', [JugadorController::class, 'destroy'])->name('admin.jugador.destroy');
Route::get('layouts/admin/jugador/show/{jugador}', [JugadorController::class, 'show'])->name('admin.jugador.show');

//Partido
Route::get('/layouts/admin/partido', [PartidoController::class, 'index'])->name('admin.partido.index');
Route::get('/layouts/admin/partido/create', [PartidoController::class, 'create'])->name('admin.partido.create');
Route::post('/layouts/admin/partido/store', [PartidoController::class, 'store'])->name('admin.partido.store');
Route::get('/layouts/admin/partido/edit/{partido}', [PartidoController::class, 'edit'])->name('admin.partido.edit');
Route::put('/layouts/admin/partido/update/{partido}', [PartidoController::class, 'update'])->name('admin.partido.update');
Route::delete('/layouts/admin/partido/destroy/{partido}', [PartidoController::class, 'destroy'])->name('admin.partido.destroy');
Route::get('/layouts/admin/arbitro/ctaArbitro', [PartidoController::class, 'ctaArbitro'])->name('admin.arbitro.ctaArbitro');
Route::get('/layouts/admin/arbitro/editCtaArbitro/{partido}', [PartidoController::class, 'editCtaArbitro'])->name('admin.arbitro.editCtaArbitro');
Route::put('/layouts/admin/arbitro/updateCtaArbitro/{partido}', [PartidoController::class, 'updateCtaArbitro'])->name('admin.arbitro.updateCtaArbitro');
Route::get('/layouts/admin/partido/cargarEquipos', [PartidoController::class, 'cargarEquipos'])->name('admin.partido.cargarEquipos');

//Equipo_Partido
Route::get('/layouts/admin/partido/mostrarResultado', [EquipoPartidoController::class, 'mostrarResultado'])->name('admin.partido.mostrarResultado');
Route::get('/layouts/admin/partido/editResultado/{partido}', [EquipoPartidoController::class, 'editResultado'])->name('admin.partido.editResultado');
Route::put('/layouts/admin/partido/updateResultado/{partido}', [EquipoPartidoController::class, 'updateResultado'])->name('admin.partido.updateResultado');

//Jugador_Partido
Route::get('/layouts/admin/partido/datosJugadorPartido', [JugadorPartidoController::class, 'datosJugadorPartido'])->name('admin.partido.datosJugadorPartido');
Route::get('/layouts/admin/partido/createJugadorPartido', [JugadorPartidoController::class, 'createJugadorPartido'])->name('admin.partido.createJugadorPartido');
Route::post('/layouts/admin/partido/storeJugadorPartido', [JugadorPartidoController::class, 'storeJugadorPartido'])->name('admin.partido.storeJugadorPartido');
Route::get('/layouts/admin/partido/editJugadorPartido/{jugadorPartido}', [JugadorPartidoController::class, 'editJugadorPartido'])->name('admin.partido.editJugadorPartido');
Route::put('/layouts/admin/partido/updateJugadorPartido/{jugadorPartido}', [JugadorPartidoController::class, 'updateJugadorPartido'])->name('admin.partido.updateJugadorPartido');
Route::delete('/layouts/admin/partido/destroyJugadorPartido/{jugadorPartido}', [JugadorPartidoController::class, 'destroyJugadorPartido'])->name('admin.partido.destroyJugadorPartido');
Route::get('/layouts/admin/jugador/ctaJugador', [JugadorPartidoController::class, 'ctaJugador'])->name('admin.jugador.ctaJugador');
Route::get('/layouts/admin/jugador/editCtaJugador/{jugadorPartido}', [JugadorPartidoController::class, 'editCtaJugador'])->name('admin.jugador.editCtaJugador');
Route::put('/layouts/admin/jugador/updateCtaJugador/{jugadorPartido}', [JugadorPartidoController::class, 'updateCtaJugador'])->name('admin.jugador.updateCtaJugador');
Route::get('/layouts/admin/partido/mostrarEquipos/{partido_id}', [JugadorPartidoController::class, 'mostrarEquipos'])->name('admin.partido.mostrarEquipos');
Route::get('/layouts/admin/partido/mostrarJugadores', [JugadorPartidoController::class, 'mostrarJugadores'])->name('admin.partido.mostrarJugadores');

//CSV export import
Route::post('noticia/import', [CsvNoticiaController::class, 'import'])->name('noticia.import');
Route::get('noticia/export', [CsvNoticiaController::class, 'export'])->name('noticia.export');
Route::post('jugador/import', [CsvJugadorController::class, 'import'])->name('jugador.import');
Route::get('jugador/export', [CsvJugadorController::class, 'export'])->name('jugador.export');
Route::get('equipo/export', [CsvEquipoController::class, 'export'])->name('equipo.export');

//PDF
Route::get('torneo/infoTorneo', [PdfTorneoController::class, 'infoTorneo'])->name('torneo.infoTorneo');

//Graficas
Route::get('/layouts/admin', [GraficoController::class, 'cards'])->name('dashboard');
