Anlaması ve uygulaması basit bir tasarım kalıbıdır.
En basit tanımıyla, sınıfları her seferinde oluşturmak yerine bir prototip oluşturup kullanma yöntemidir.

Örneğimizde görüleceği üzere soyut sınıf olan ItemPrototype ortak değişken ve metodları içeriyor.
Book ve Magazine prototipleri bu soyut sınıftan türüyerek, sadece type değişkenini kendine göre tanımlıyor.

Kullanım örneğimizde görüleceği üzere, kategorisi aynı olan aynı tipteki itemleri her seferinde new değişkeni ile oluşturup
kategorilerini setlemektense, clonlayıp sadece name setliyoruz. Bu şekilde prototipler yardımıyla yazacağımız kod sayısı azalttığımız gibi, daha yönetilebilir ve kontrol edilebilir bir kod yazmış oluyoruz.

