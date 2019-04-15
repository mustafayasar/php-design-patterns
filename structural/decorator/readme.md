Sınıflara dinamik olarak yeni özellikler eklemek için kullanılır.
Bir Decarator yardımıyla ana sınıfı alır ve bunun üzerinden ilerler.

Örneğimizde görüleceği üzere Pizza sınıfımıza ExtraCheese ve ExtraSalami'yi
decarator yardımıyla ekleyebiliyoruz.

Şöyle bir soru akla gelebilir? Bunları neden Pizza sınıfında bir metod kullanarak yapmadık.
Gayet mantıklı bir soru yapılabilir. 

Fakat birincisi SOLID prensiplerine dayanan bu tasarım desenlerinin temel hedefi planlanmış, kodlanmış sınıflar tekrar tekrar değiştirilmemesi.
Yani sınıfta değişiklik yapmaya sıcak bakmıyor bu desenler.

İkincisi bu deseni anlatmaya yönelik basit bir örnek uyguladık ama tabiki bir uygulamada bu işlem bu kadar basit olmayacak.

Ayrıca daha yönetilebilir, test edilebilir bir sistem, yarın sizden ExtraTomato istendiğinde önceki sınıflara dokunmadan decarator extend ederek kullanabileceksiniz.
