Bir sınıfın parçalarını oluşturan arayüzlere verilen bir desen adıdır builder.

Genelde bir director ve bir veya birden fazla builder ile kullanılır.

Director'un buradaki işlevi, aynı kalıtım ile genel sınıfların tek yerden build edilebilmesidir.

Örneğimiz de, Vehicle soyut sınıfına bağlı, aynı içeriğe sahip Bicycle, Car ve Truck sınıfları bulunmakta.

Aynı şekilde aynı içeriğe sahip Builder interface'ine sahip BicycleBuilder, CarBuilder ve TruckBuilder bulunmaktadır.

Bu Builder'ların hepsi aynı metodlara sahip olmasına rağmen, metod içerikleri farklıdır.

Builder aynı metodlarla build edildiği için bunu da bir Director'e bağlıyoruz.

