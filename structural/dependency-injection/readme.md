Dependecy Injection temelde bir sınıfın başka bir sınıfa bağımlılığını ifade eder.
Yani biri olmadan diğer işlevsiz kalır.
Fakat burada bir kavramı daha anlamamız lazım. 
Bu bağımlılık da iki türlü tanımlanıyor. loose coupling ve tight coupling.
Yani gevşek bağ ve sıkı bağ.

Şimdi örneğimiz üzerinden gidelim. Çok daha iyi anlayacağız.

DBLog ve FileLog sınıfları LogInterface arayüzünden türemiş sınıflardır.

LogService ise LogInterface'inden türeyen bir sınıfla çalışabilmektedir.
İşte bu bağımlılığa dependecy injection diyoruz.
Eğer LogService sadece FileLog gibi tek bir sınıfı kabul ediyor olsaydı, tight coupling olurdu.
Ama LogInterface'nden türeyen her sınıfı kabul ettiği için loose coupling olmuş oldu.

Biz her zaman olabildiğince gelecekte eklenebilecek özelliklere karşı loose coupling ilkesiyle hareket etmeliyiz.

Bir log sistemi yaptığınızı düşünün, eğer loose coupling felsefesi ile planlarsanız yapınızı, daha sonra yeni bir servis türü eklemek hiç zor olmaz.

