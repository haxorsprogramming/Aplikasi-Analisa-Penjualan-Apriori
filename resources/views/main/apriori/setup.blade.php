<div class="row" id="divDataMentor">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Setup nilai support & confidence</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Penguji</label>
                    <input type="text" class="form-control" id="txtNama" placeholder="Masukkan nama penguji" value="Aditia Darma">
                </div>
                <div class="form-group">
                    <label for="company">Min. Support</label> <small>Semakin tinggi nilai support akan semakin banyak proses yang mengakibatkan proses apriori menjadi lama</small>
                    <select class="form-control" id="txtSupport">
                        <?php
                        $x = 1;
                        for ($x; $x <= 100; $x++) { ?>
                            <option value="<?= $x; ?>"><?= $x; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="company">Min. Confidence</label>
                    <select class="form-control" id="txtConfidence">
                        <?php
                        $x = 1;
                        for ($x; $x <= 100; $x++) { ?>
                            <option value="<?= $x; ?>"><?= $x; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <a class="btn btn-primary" href="javascript:void(0)" onclick="prosesApriori()">Mulai Analisa Penjualan</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    var rProsesApriori = server + "app/apriori/analisa/proses";

    document.querySelector("#txtNama").focus();

    function prosesApriori() {
        let nama = document.querySelector("#txtNama").value;
        let support = document.querySelector("#txtSupport").value;
        let confidence = document.querySelector("#txtConfidence").value;
        let ds = {
            'support': support,
            'confidence': confidence,
            'nama' : nama
        }
        confirmQuest('info', 'Konfirmasi', 'Mulai analisa penjualan ... ?', function (x) {konfirmasiApriori(ds)});
    }


    function konfirmasiApriori(ds)
    {
        axios.post(rProsesApriori, ds).then(function(res){
            console.log(res.data);
            let kdPengujian = res.data.kdPengujian;
            pesanUmumApp('success', 'Sukses', 'Proses analisa apriori selesai ..');
            renderPage('app/apriori/analisa/hasil/6e6b2b18-9aad-4631-a86e-a411de778477', 'Hasil Analisa');
        });
    }

</script>