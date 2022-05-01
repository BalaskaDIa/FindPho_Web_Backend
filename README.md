# FindPho Web
Ebben a repositoryban a FindPho Backend, illetve webes frontend része található meg.

FindPho egy web, asztali és mobil kliensre kódolt képmegosztó alkalmazás.


# Futtatáshoz szükséges lépések:

- XAMPP-on belül Apache, MySQL elindítása
- http://localhost/phpmyadmin/ oldalon létrehozni egy findpho nevű adatbázist
- VSCode elindítása
- Terminál megnyitása
- git clone https://github.com/BalaskaDIa/FindPho_Web_Backend.git
- composer install
- php artisan key:generate
- php artisan storage:link
- php artisan migrate
- php artisan db:seed
- php artisan serve

A weboldal megjelenítéséhez a böngészőben a következő címen érhető el: http://127.0.0.1:8000.

# Backendet készítette:
- Balaska Klaudia
- Wolf Péter
- Zsálek Norbert

Webes felületet készítette **Zsálek Norbert**.
