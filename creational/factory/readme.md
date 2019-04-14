Factory Design Pattern, en basit tanımıyla metodlar yardımıyla sınıf oluşturmaktır. Bunu daha çok benzer sınıfların Tek çatı altında toplanıp, o çatı ile oluşturulabilmesi için kullanılır. Bunun en güzel örneği VehicleFactory sınıfıdır. Bazen de tek metod ile, benzer türlerde farklı sınıfların, ya da aynı parenttan türeyen farklı sınıfların oluşturulmasında kullanılır.

* Basic örneğimizde en basit haliyle bir Factory metodu oluşturduk.
 Bu haliyle Simple Factory olarak adlandırılır. 

* Normal örneğimizde genelde kullanılan sınıf düzeyinde benzer Sınıfların tek bir sınıf üzerinden üretilebilmesi örneğini verdik.

* Static Factory ise, OOP mimarisinde static özelliğiyle factory pattern kullanımını görüyoruz. Yani sınıflar her çağırıldığında, betiğin çalışması esnasında sadece bir kere oluşturulmasını istediğimiz durumlar için kullanıyoruz. Bunu oluştururken farklı bir örnek olsun diye tüm objeleri tek metod ile oluşturabileceğimiz farklı bir örnek oluşturduk.

