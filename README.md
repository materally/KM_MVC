# KM_MVC

PHP MVC keretrendszer alap

## Telepítés

```
git clone
composer install
```
1. .htaccess-be az URL-t meg kell adni a public könyvtárat) - RewriteBase /KM_MVC/public
2. app/Config.php adatok megadása


## Használat

### Új controller esetén:
```php
class ControllerName extends KM_Controller {
    public function index($param1)
    {
        $title = "Home";
        $this->view('_template/head', ['title' => $title]);
        $this->view('home/index');
        $this->view('_template/footer');
    }
}
```

### Routing
```
URL/ControllerName/param1/param2/param3 ...
```

### HTML e-mail küldés

```php
$this->sendEmail("cimzett@gmail.com", "TÁRGY", "", true, "uj_vendeg", ['reszletek' => 'Ezek lesznek a részletek!']);
// "uj_vendeg" a template neve (views/_email)
```

### Adatbázis használata
- új model/tábla esetén a models mappába létre kell hozni, majd kiadni terminálba az alábbi parancsot: 
```
composer dump-autoload
```
- az Eloquent-et használjuk, melyhez a dokumentáció itt található: [https://laravel.com/docs/5.7/eloquent](https://laravel.com/docs/5.7/eloquent)


