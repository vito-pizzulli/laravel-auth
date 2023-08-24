<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Boolfolio - Base

<p>Creiamo con Laravel il nostro sistema di gestione del nostro Portfolio di progetti.</p>
<p>Oggi iniziamo un nuovo progetto che si arricchirà nel corso delle prossime lezioni: man mano aggiungeremo funzionalità e vedremo la nostra applicazione crescere ed evolvere.</p>

## Giorno 1

<p>Creiamo un nuovo progetto template con Laravel 10, usando Laravel Breeze ed il pacchetto Laravel UI con autenticazione e Bootstrap.</p>
<p>Iniziamo con il definire il layout, e il controller e rotte necessarie per il sistema portfolio:</p>

- Creiamo un controller per la dashboard degli Admin;
- Creiamo una pagina di home per gli Admin, riservata ad utenti loggati;
- Creiamo un controller per la dashboard dei Guests;
- Creiamo una pagina di home per i Guests, disponibile a tutti i visitatori.

## Giorno 2

<p>Creiamo il modello Project con relativa migrazione, seeder, per poi implementare per la parte di back-office un resource controller Admin\ProjectController per gestire tutte le operazioni CRUD dei progetti, per oggi limitandoci alle seguenti implementazioni e relativi blade e rotte:</p>

- index()
- show()
- create()
- store()

## Giorno 3

<p>Per il modello Project implementiamo con relativi blade e rotte:</p>

- edit()
- update()
- destroy()

## Giorno 4

<p>Sostituiamo l'inserimento dell'URL per l'immagine dei nostri progetti con il caricamento di un file immagine.</p>