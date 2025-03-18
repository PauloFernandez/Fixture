<p align="center">
  <img src="public/img/Torneo_Fútbol-2024.png" alt="Logo">
</p>
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# App Fixture

**App Fixture** es una aplicación web diseñada para gestionar torneos de fútbol en diversas categorías. Permite a los administradores crear y gestionar torneos, equipos, jugadores, árbitros, canchas, partidos y reportes de resultados.

## Funcionalidades

- **Creación de Torneos**: Permite la creación de torneos con diversas categorías.
- **Gestión de Equipos**: Gestión completa de los equipos participantes.
- **Gestión de Jugadores**: Registro y administración de los jugadores en cada equipo.
- **Gestión de Árbitros**: Administración de árbitros asignados a cada partido.
- **Gestión de Canchas**: Asignación y gestión de las canchas disponibles para los partidos.
- **Creación y Gestión de Partidos**: Agregar y gestionar los partidos programados.
- **Reportes de Partidos Jugados**: Visualización de resultados y estadísticas de los partidos.

**Nota**: No se implementó la función de autenticación para que los usuarios puedan explorar libremente todas las funcionalidades sin restricciones.

## Gran Torneo de Fútbol

En la página principal de la aplicación se destacan los diferentes torneos que se pueden crear, permitiendo que toda la comunidad futbolera participe. Cada torneo tiene su propia página donde se pueden consultar las reglas, que están disponibles para descarga en formato PDF.

El administrador puede elegir si desea mostrar las reglas del torneo en la página principal, y estas se cargan automáticamente al momento de crear el torneo.

## Usuarios

### Usuario Invitado (Visitante)

El usuario invitado o "Visitante" tiene acceso limitado a la aplicación. Podrá navegar y visualizar la siguiente información:

- Noticias generales
- Detalles sobre equipos y jugadores (tabla de goleadores y asistencias)
- Detalles de partidos jugados
- Filtros para visualizar la información por torneo

### Usuario Administrador

El **Administrador** es el usuario con permisos completos para gestionar todos los aspectos de la aplicación. Algunas de las tareas que puede realizar incluyen:

- **Crear torneos** y establecer los valores de inscripción
- **Crear y asignar equipos** a los torneos
- **Crear y asignar jugadores** a los equipos
- **Definir las sanciones y valores de las tarjetas**
- **Cargar partidos y resultados** de los mismos
- **Gestionar pagos de inscripciones**
- **Gestionar pagos de sanciones** por tarjetas

## Información de Creación

Esta aplicación está construida con **Laravel** como framework principal y utiliza **Docker** para la creación de un entorno de desarrollo y despliegue. La arquitectura de la aplicación es monolítica, y utiliza **Blade** como motor de plantillas, integrando **Bootstrap** para la interfaz de usuario. La base de datos utilizada es **MySQL**.

La aplicación incluye pruebas automatizadas para garantizar la funcionalidad. Además, se utiliza **Git** y **GitHub** para el control de versiones, con **GitHub Actions** para automatizar el flujo de integración continua y despliegue.