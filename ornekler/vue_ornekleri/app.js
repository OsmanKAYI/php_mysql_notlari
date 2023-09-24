const app = Vue.createApp({
  data() {
    return {
      birimler: [],
      birimAdi: "",
      sorumluKisi: "",
    };
  },
  methods: {
    birimleriGetir() {
      // PHP'den veri çekme işlemini yapalım
      fetch("./export.list.php?tablo=birimler")
        .then((response) => {
          return response.json(); // JSON veriyi çözümle
        })
        .then((data) => {
          this.birimler = data;
        });
    },

    veriGonder() {
      // Vue verilerini kullanarak POST isteği oluşturun
      const formData = new FormData();
      formData.append("birimadi_form", this.birimAdi);
      formData.append("sorumlusu_form", this.sorumluKisi);

      // Burada fetch veya başka bir HTTP istemci kullanarak POST isteğini gönderebilirsiniz.
      // Aşağıda fetch API kullanımı örneği bulunmaktadır:
      fetch("islemler.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          return response.json(); // JSON veriyi çözümle
        })
        .then((data) => {
          sonuc = data;
          console.log(sonuc);
          if (sonuc.isOk) {
            // İşlem başarılı
            this.birimAdi = "";
            this.sorumluKisi = "";
            this.birimleriGetir();
            alert("BAŞARILI !\n\n" + sonuc.mesaj);
          } else {
            // Hata var
            alert("HATA OLUŞTU !\n\n" + sonuc.mesaj);
          }
        });
    },
  },
  mounted() {
    this.birimleriGetir(); // Sayfa yüklendiğinde otomatik olarak veriAl methodunu çağırın
  },
});

app.mount("#app");
