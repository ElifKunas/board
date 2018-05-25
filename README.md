Board modülü; birden fazla etkinlik, haber ya da duyuruyu tek bir panoda yayınlamak için kullanılır. Projede hangi oturum ile giriş yapılırsa kullanıcı adı oturum adından alır. Acil duyuruları üst tarafta, normal duyuruları ise alt tarafta gösterir. Duyuruların üzerinde geldiğimizde alert penceresinde gösterir. Content kısmına html kodu yazarak daha görsel arayüz ekleyebiliriz. Modülde panoya; duyuru ekleme, silme, güncellem ve silme işlemleri yapılır. 

KURULUM
Yönetici yetkileriyle terminal (komut satırı) açılarak aşağıdaki direktifler uygulanmalıdır.
Dosyayı oluşturmak istediğiniz dizine yazdıktan sonra aşağıdaki komut satırı uygulanır.

git clone https://github.com/ElifKunas/board.git board

board adındaki dosyayı oluşturduktan sonra proje dosyamızın composer.json dosyası açılır. 
Aşağıdaki kod satıları eklenir.

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

Bu ayarları yaptıktan sonra böylelikle modülümüzü proje dosyasına ekledik.
Biz portal-gii de web sayfası oluşturduğumuzdan dolayı modüle ulaşmak için tarayıcı linkine http://elifkunas.kouosl/board url' i yazılır.Eğer duyuru eklemek istiyorsak admin gibi olabilmek için oturum açmak gerekir.
