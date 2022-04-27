
## Kullanım

- #####  Kurulum için clone ve sağlayıcının token keyinin clone esnasında girmeniz gerekmektedir.Sistem Route mantığı Laravel frameworkta olduğu gibi kurgulanmış ve çalışma biçimi bu şekilde tasarlanmıştır.Prefix veya gruplama işlemleri :id ve :url parametre tanımlamarı vb. method kontrolleri laravel route yapısı baz alınarak yazıldı.
```sh
App/Routing/Web veya App/Routing/Api Path Üzerinden Çağırılır

use \TncBzkrt\Config\Route;

Route::get('/','Api@index');
Route::prefix('/google')->group(function () {
    Route::get('/category/:id','Api@Products');
    Route::get('/product/:id','Api@Products');
});
```
- ##### Controller Model View Kullanımı Tipik MVC Kullanımı ile birebir aynıdır.Route da tanımlanan class ve fonksiyonların Controller tanımlı olması gerekmektedir.
```sh
Örnek Controller 
  public function customer()
    {
        $customer=model("Customer");
        return view("index.php", ['customer'=>$customer->customer()]);
    }
    
Örnek Model 
public function customer()
    {
        return db()->table('customer')->get();
    }

Örnek View 
foreach ($customer as $cust){
    $mc = (is_null($cust->customer_name) ? true : false);
    if(!$mc)
        echo $cust->customer_name.'<br/>';
}
```
- ##### Yukarıdaki Belirtilenler Işığında Default php den define değerler alınıyor,App/Routing/web.php den routing işlmeleri yapılıyor,
- Yapılacak olan işlemlerin türüne veya firma bazlı bir prefix imiz var buradan get post typlearında belirtilen yol ve controllerda karşılayacak class ve fonksiyon tanımlanıyor
- Controller da const sabitlerimiz constructta ise  kulanılan model tanımlanıyor ve gönderilecek değerler prdouct fonksiyonunda miraslandırlarak sonuçlandırılıyor.
- Sadece kod mantığı açısından kontroller veya handle etme üzerine çok düşmedim. 
- ##### Tuncay Bozkurt devmachteam@gmail.com
