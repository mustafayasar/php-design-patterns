Bu design pattern özünde uyarlama yapmak için kullanılır. Diyelim işlevsel olarak aynı fakat metod isimleri farklı olan iki sınıf var.
Ve sen bu sınıfların aynı içeriklere sahip olmasını istiyorsun, bu zaman ara bir adapter denilen sınıf yazıp, istediğin gibi olmayan sınıfı olması gerektiği şekle uyarlıyorsun.

Bir diğer örnekte; diyelim birbirinden yapı olarak alakasız ama işlev olarak benzer iki sınıfı aynı özelliklerde buluşturmak istiyorsun. Bu seferde hepsi için bir Adapter yazarak bunu sağlayabilirsin.

Örneğimizde bu iki durumu da inceledik.

Örneğimizde Facebook ve Twitter sınıfları var. 

1. Örneğimizde Facebook sınıfı shareThis metoduna sahip, Twitter ise tweet butonuna sahip, biz Twitter'ın da shareThis metoduyla çalışabilir olmasını istiyoruz. 
O zaman yazığımız adapter devreye giriyor.

2. örneğimizde iki sınıf içinde adapter yazıp ikisiyle de share ile kullanmak istiyoruz. kullanımımızda da göreceğiniz üzere, bu gibi durumlarda çok kullanılan bir pattern.

Aklınıza şu soru gelebilir. Neden en başından tweet metodunu share olarak yapmıyoruz? Eğer kodu tamamen siz planlıyorsanız ve öyle olmasını istiyorsanız öyle yapın, ama bu kod önceden yazılmış olabilir, yazılımın birçok yerinde kullanıldığı için değiştirmek mantıklı olmayabilir, genelde de mantıklı değildir zaten, özellikle büyük çaplı projelerde, çünkü testleri yazılmıştır, bir şeyi değiştirmek demek, bir çok hataya yol açabilir veya bir çok şeyi beraberinde değiştirmeyi gerektirebilir. 

Dinamik bir çok yapıda Adapter Pattern'i çokca kullanılıyor.
