En popüler tasarım desenlerinden biridir. Kullanımı ve anlaması da oldukça basittir.

Kısaca, bir uygulamada bir sınıftan sadece bir kere oluşsun, ve oluşan sınıf uygulamanın neresinden çağırılırsa çağrılsın ilk oluşturulan sınıfın getirilmesi isteniyorsa bu kalıp kullanılır.

Bu karışıklığı önlemede, bir işlemin tek sefer yapılmasını istediğimiz duurmlarda çok önemli bir avantaj sağlar.

Örneğin bir uygulamada sadece bir kullanıcı için sadece tek bir Session(oturum) açılması istenir.
Ve bu session uygulamanın her yerinde kullanılabilir.

Oluşturduğumuz Session sınıfı örneğimizin üzerinden anlatacak olursak;

Bu sınıf dışarıdan new operatörü ile oluşturulamaz. static bir metod aracılığıyla oluşturulması gerekir. buradaki sınıf adımız getInstance metodu.

new ve clone gibi operatörlerin çalışmaması için ilgili magic metodları private ya da protected yapıyoruz.

kullanım örneğimizdede görüleceği üzere, instance ilk çağırıldığında Session sınıfı oluşturuluyor, daha sonra her çağırıldığında ilk oluşturulan instance döndürülüyor.

Bunu daha iyi anlamamız için random oluşturulan bir keyden yardım aldık. Örneği çağırdığınızda görülecektir ki, tüm instance'lar aynı keye sahiptir, yani ilk oluşturulan keyi döndürürler.

