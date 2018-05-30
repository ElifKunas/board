Board modülü; birden fazla etkinlik, haber ya da duyuruyu tek bir panoda yayınlamak için kullanılır. Projede hangi oturum ile giriş yapılırsa kullanıcı adı oturum adından alır. Acil duyuruları üst tarafta, normal duyuruları ise alt tarafta gösterir. Duyuruların üzerinde geldiğimizde alert penceresinde gösterir. Content kısmına html kodu yazarak daha görsel arayüz ekleyebiliriz. Modülde panoya; duyuru ekleme, silme, güncelleme ve silme işlemleri yapılır. Eğer duyuru eklemek gibi işlemleri yapmak istiyorsak oturum açmak gerekir.


KURULUM

1-)Yönetici yetkileriyle terminal (komut satırı) açılarak aşağıdaki direktifler uygulanmalıdır.

2-)Dosyayı oluşturmak istediğiniz dizine yazdıktan sonra aşağıdaki komut satırı uygulanır.

git clone https://github.com/ElifKunas/board.git board

3-)board adındaki dosyayı oluşturduktan sonra proje dosyamızın composer.json dosyası açılır. 
Aşağıdaki kod satırları eklenir.

.
.
.
"repositories": [
.
.
.
        {
        
            "type": "vcs",
            "url": "https://github.com/ElifKunas/board.git"
            
        }
],

"require": {
.
.
.

            "kouosl/board": "dev-master"
            
},

4-)Bu ayarları yaptıktan sonra böylelikle modülümüzü proje dosyasına ekledik.

5-)Modülde gerekli tabloların oluşması için puty ya da cmd'de proje dosyamıza geldikten sonra  aşağıdaki komut satırını uyguluyoruz.


php yii migrate --migrationPath=@vendor/kouosl/board/migrations --interactive=0


6-)Bu proje dosyamızın içindeki vendor/kouosl/board/migrations dizininin altında migration dosyası oluşturur. Yapılan bu değişiklikleri veritabanına kayıt edilmesi için aşağıdaki komut satırı çalıştırılır.


php yii migrate 


7-)Modülün projeye kurulması için putty'de proje dosyasının dizininde iken 


composer update


çalıştırdıktan sonra modül projeye kurulur.

8-)Biz portal-gii de web sayfası oluşturduğumuzdan dolayı modüle ulaşmak için tarayıcı linkine http://elifkunas.kouosl/board url' i yazılır.
