## Laravel 5.1 - zadanie testowe

#### Treść zadania

Prosta aplikacji do zarządzania taborem.

 * bez logowania / kont użytkowników
 * możliwość dodawania pojazdów, edycję oraz usuwanie
 * pojazdy powinny być trzymane w bazie danych
 * użytkownik powinien móc wprowadzić następujące dane: nazwa pojazdu, numer rejestracyjny (tylko rejestracje składające się z 3 liter z przodu oraz 4 cyfr z tyłu, np. ABC1234) , pojemność silnika, przebieg licznika, data ostatniej wymiany oleju
 * podczas edycji, poprzednie dane nie powinny być usuwane - powinna być możliwość podglądu starych wpisów - wersjonowanie
 * przy usuwaniu pojazdu powinny być usuwane stare wpisy które go dotyczą
 * mile widziana walidacja oraz wyświetlanie błędów (od strony PHP)


#### Instalacja

	git clone https://github.com/wojtek77/testing-task-2016-01-26.git
	cd testing-task-2016-01-26
	composer install
    cp .env.example .env
    php artisan key:generate
    <edit database settings in file ".env">
	php artisan migrate
