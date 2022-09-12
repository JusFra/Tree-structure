# Struktura drzewiasta

Oprogramowanie mechanizmu zarządzania strukturą drzewiastą. Aplikacja umożliwia działanie na dowolnej liczbie poziomów. Dostępne są funkcje takie jak: 
- dodawanie nowych węzłów (kategorii),
- edycja kategorii - możliwość przenoszenia węzłów do innych gałęzi,
- usuwanie węzłów,
- rozwijanie wybranych gałęzi.

W aplikacji zostały wprowadzone zabezpieczenia uniemożliwiajace wprowadzanie nieprawidłowych danych. 

#
- PHP 8, Laravel 
- MySQL
- HTML 5, CSS 
- JavaScript, jQuery
- Bootstrap
- [Tree View](http://www.prepbootstrap.com/bootstrap-template/treeview)
- [Sweetalert2](https://sweetalert2.github.io)

## Wygląd struktury drzewiastej:
![App Screenshot](https://github.com/JusFra/Tree-structure/blob/main/screens/1.png)
## Możliwość rozwijania widoku drzewa:
![App Screenshot](https://github.com/JusFra/Tree-structure/blob/main/screens/2.png)
## Dodawanie nowej kategorii:
![App Screenshot](https://github.com/JusFra/Tree-structure/blob/main/screens/add_category.png)
## Edycja kategorii:
![App Screenshot](https://github.com/JusFra/Tree-structure/blob/main/screens/edit_category.png)
W edycji kategorii możliwa jest zmiana kategorii nadrzędnej (rodzica). 
## Usuwanie kategorii:
![App Screenshot](https://github.com/JusFra/Tree-structure/blob/main/screens/delete_category.png)

Po naciśnięciu przycisku "Tak, usuń!" wybrana kategoria zostanie usunięta razem ze wszystkimi jej podkategoriami. W przypadku wybrania opcji "Zmień rodzica podkategorii", wybrana kategoria zostanie usunięta, a jej podkategorie zostaną przeniesione o poziom wyżej w hierarchii drzewa. 

