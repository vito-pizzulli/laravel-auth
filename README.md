<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Boolfolio - Base

<p>Creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti.</p>
<p>Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere.</p>
<p>Nel pomeriggio, rifate ciò che abbiamo visto insieme stamattina stilando tutto a vostro piacere utilizzando SASS.</p>

## Giorno 1

<p>Ripercorriamo gli steps fatti a lezione ed iniziamo un nuovo progetto template con Laravel 10, usando Laravel Breeze ed il pacchetto Laravel UI con autenticazione e Bootstrap.</p>
<p>Iniziamo con il definire il layout, e il controller e rotte necessarie per il sistema portfolio:</p>

- Creiamo un controller per la dashboard degli Admin;
- Creiamo una pagina di home per gli Admin, riservata ad utenti loggati;
- Creiamo un controller per la dashboard dei Guests;
- Creiamo una pagina di home per i Guests, disponibile a tutti i visitatori.

## Giorno 2

<p>Ripercorriamo gli steps fatti a lezione e continuando con il progetto creato ieri.</p>
<p>Definiamo il layout, il controller e rotte necessarie per il sistema portfolio, per ora limitandoci alla creazione del modello Project con relativa migrazione, seeder, per poi implementare:</p>

- Per la parte di back-office un resource controller Admin\ProjectController per gestire tutte le operazioni CRUD dei progetti, per oggi limitandoci alle seguenti implementazioni e relativi blade e rotte:

- index()
- show()
- create()
- store()