# PHPOOP-DB-CONNECT Kullanimi
Bir class oluşturduğumuz için kullanmak istediğimizde bu classdan yeni bir nesne üretmemiz gerekiyor.
$veritabani = new Database(); // nesnemizi oluşturarken bos bırakırsak parametre yerini otomatik olarak : localhost,users,root,"", degerlerini alir yani localhostda olan bir users adindaki veritabanina baglanti istegi gonderir.
// istediginiz herhangi bir veritabanina baglanmak isterseniz 
$veritabani = new Database('host ismi','veritabani ismi','kullanici ismi','sifre'); Dikkat: tum degerler tirnak icinde yazilmalidir.
// Kullanmak isterseniz ornek veritabani nesnesinden gidelim
$sorgu = $veritabani->db->prepare('.......') bu sekilde 
