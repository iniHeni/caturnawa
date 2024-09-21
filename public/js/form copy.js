document.getElementById('jenis_kegiatan').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru'; 
        newSelect.id = 'baru';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('jenis_kegiatan1').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru1');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru1'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru1'; 
        newSelect.id = 'baru1';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});

document.getElementById('jenis_kegiatan2').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru2');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru2'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru2'; 
        newSelect.id = 'baru2';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('jenis_kegiatan3').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru3');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru3'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru3'; 
        newSelect.id = 'baru3';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});

document.getElementById('jenis_kegiatan4').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru4');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru4'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru4'; 
        newSelect.id = 'baru4';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('jenis_kegiatan5').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru5');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru5'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru5'; 
        newSelect.id = 'baru5';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('jenis_kegiatan6').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru6');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru6'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru6'; 
        newSelect.id = 'baru6';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('jenis_kegiatan7').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru7');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru7'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru7'; 
        newSelect.id = 'baru7';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('jenis_kegiatan8').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru8');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru8'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru8'; 
        newSelect.id = 'baru8';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('jenis_kegiatan9').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('baru9');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'baru9'; 
        detailLabel.textContent = 'Wujud Capaian Unggulan';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'baru9'; 
        newSelect.id = 'baru9';

        switch (selectedOption.id) {
            case 'kompetisi':
                newSelect.innerHTML = 
                '<option>Juara 1 Perorangan</option><option>Juara 2 Perorangan</option><option>Juara 3 Perorangan</option><option>Juara Kategori Perorangan</option><option>Juara 1 Beregu</option><option>Juara 2 Beregu</option><option>Juara 3 Beregu</option><option>Juara Kategori Beregu</option>';
                break;
            case 'pengakuan':
                newSelect.innerHTML = '<option>Pelatih/Wasit/Juri Bersertifikat</option><option>Pelatih/Wasit/Juri Tidak Bersertifikat</option><option>Narasumber/Pembicara</option><option>Moderator</option><option>Lainnya</option>';
                break;
            case 'penghargaan':
                newSelect.innerHTML = 
                '<option>Tanda Jasa</option><option>Grand Final,Peraih Mendali Emas</option><option>Grand Final,Peraih Mendali Perak</option><option>Grand Final, Peraih mendali Perunggu</option><option>Piagam Partisipasi</option><option>Penerima Hibah Kompetisi</option><option>Lainnya</option>';
                break;
            case 'karir_organisasi':
                newSelect.innerHTML = '<option>Ketua</option><option>Sekretaris</option><option>Bendahara</option><option>Satu Tingkat dibawah Pengurus Harian</option>';
                break;
            case 'hasil_karya':
                newSelect.innerHTML = '<option>Patent</option><option>Patent Sederhana</option><option>Cipta Karya Sederhana</option><option>Buku ber-ISBN penulis Utama</option><option>Buku ber-ISBN Penulis kedua </option><option>Penulis Utama / Korespondensi karya ilmiah di journal yang bereputasi diakui</option><option>Penulis Kedua (Bukan Korespondensi) dst karya ilmiah di journal yang bereputasi dan diakui</option>';
                break;
            case 'pemberdayaan':
                newSelect.innerHTML = 
                '<option>Pemrakarsa/Pendiri</option><option>Koordinator Relawan</option><option>Relawan</option>';
                break;
            case 'kewirausahaan':
                newSelect.innerHTML = '<option>Kewirausahaan</option>';
                break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('fakultas').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('prodi');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'prodi'; 
        detailLabel.textContent = 'Program Studi';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'prodi'; 
        newSelect.id = 'prodi';

        switch (selectedOption.id) {
            case 'FISIP':
                newSelect.innerHTML = 
                '<option>Ilmu Politik</option><option>Hubungan Internasional</option><option>Administrasi Publik</option><option>Sosiologi</option><option>Ilmu Komunikasi</option><option>Magister Administrasi Publik</option><option>Magister Ilmu Politik</option><option>Doktor Ilmu Politik</option>';
                break;
            case 'FH':
                newSelect.innerHTML = '<option>Hukum</option><option>Magister Hukum</option>';
                break;
            case 'FBS':
                newSelect.innerHTML = 
                '<option>Sastra Inggris</option><option>Sastra Indonesia</option><option>Sastra Jepang</option><option>Bahasa Korea</option>';
                break;
            case 'FEB':
                newSelect.innerHTML = '<option>Manajemen</option><option>Akuntansi</option><option>Pariwisata</option><option>Bisnis Digital</option><option>Magister Manajemen</option><option>Magister Akuntansi</option><option>Doktor Ilmu Manajemen</option>';
                break;
            case 'FTS':
                newSelect.innerHTML = '<option>Fisika</option><option>Teknik Elektro</option><option>Teknik Mesin</option><option>Teknik Fisika</option>';
                break;
            case 'FBP':
                newSelect.innerHTML = 
                '<option>Biologi</option><option>Agro Teknologi</option><option>Magister Biologi</option>';
                break;
            case 'FTKI':
                newSelect.innerHTML = '<option>Sistem Informasi</option><option>Informatika</option><option>Magister Teknologi Informasi</option>';
                break;
            case 'FIS':
                newSelect.innerHTML = '<option>Keperawatan</option><option>Kebidanan</option><option>Pendidikan Profesi Ners</option><option>Pendidikan Profesi Bidan</option>';
                 break;

        }

        newInputField.appendChild(newSelect);
    }
});

document.getElementById('fakultas_1').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('prodi_1');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'prodi_1'; 
        detailLabel.textContent = 'Program Studi';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'prodi_1'; 
        newSelect.id = 'prodi_1';

        switch (selectedOption.id) {
            case 'FISIP':
                newSelect.innerHTML = 
                '<option>Ilmu Politik</option><option>Hubungan Internasional</option><option>Administrasi Publik</option><option>Sosiologi</option><option>Ilmu Komunikasi</option><option>Magister Administrasi Publik</option><option>Magister Ilmu Politik</option><option>Doktor Ilmu Politik</option>';
                break;
            case 'FH':
                newSelect.innerHTML = '<option>Hukum</option><option>Magister Hukum</option>';
                break;
            case 'FBS':
                newSelect.innerHTML = 
                '<option>Sastra Inggris</option><option>Sastra Indonesia</option><option>Sastra Jepang</option><option>Bahasa Korea</option>';
                break;
            case 'FEB':
                newSelect.innerHTML = '<option>Manajemen</option><option>Akuntansi</option><option>Pariwisata</option><option>Bisnis Digital</option><option>Magister Manajemen</option><option>Magister Akuntansi</option><option>Doktor Ilmu Manajemen</option>';
                break;
            case 'FTS':
                newSelect.innerHTML = '<option>Fisika</option><option>Teknik Elektro</option><option>Teknik Mesin</option><option>Teknik Fisika</option>';
                break;
            case 'FBP':
                newSelect.innerHTML = 
                '<option>Biologi</option><option>Agro Teknologi</option><option>Magister Biologi</option>';
                break;
            case 'FTKI':
                newSelect.innerHTML = '<option>Sistem Informasi</option><option>Informatika</option><option>Magister Teknologi Informasi</option>';
                break;
            case 'FIS':
                newSelect.innerHTML = '<option>Keperawatan</option><option>Kebidanan</option><option>Pendidikan Profesi Ners</option><option>Pendidikan Profesi Bidan</option>';
                 break;

        }

        newInputField.appendChild(newSelect);
    }
});

document.getElementById('fakultas_2').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('prodi_2');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'prodi_2'; 
        detailLabel.textContent = 'Program Studi';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'prodi_2'; 
        newSelect.id = 'prodi_2';

        switch (selectedOption.id) {
            case 'FISIP':
                newSelect.innerHTML = 
                '<option>Ilmu Politik</option><option>Hubungan Internasional</option><option>Administrasi Publik</option><option>Sosiologi</option><option>Ilmu Komunikasi</option><option>Magister Administrasi Publik</option><option>Magister Ilmu Politik</option><option>Doktor Ilmu Politik</option>';
                break;
            case 'FH':
                newSelect.innerHTML = '<option>Hukum</option><option>Magister Hukum</option>';
                break;
            case 'FBS':
                newSelect.innerHTML = 
                '<option>Sastra Inggris</option><option>Sastra Indonesia</option><option>Sastra Jepang</option><option>Bahasa Korea</option>';
                break;
            case 'FEB':
                newSelect.innerHTML = '<option>Manajemen</option><option>Akuntansi</option><option>Pariwisata</option><option>Bisnis Digital</option><option>Magister Manajemen</option><option>Magister Akuntansi</option><option>Doktor Ilmu Manajemen</option>';
                break;
            case 'FTS':
                newSelect.innerHTML = '<option>Fisika</option><option>Teknik Elektro</option><option>Teknik Mesin</option><option>Teknik Fisika</option>';
                break;
            case 'FBP':
                newSelect.innerHTML = 
                '<option>Biologi</option><option>Agro Teknologi</option><option>Magister Biologi</option>';
                break;
            case 'FTKI':
                newSelect.innerHTML = '<option>Sistem Informasi</option><option>Informatika</option><option>Magister Teknologi Informasi</option>';
                break;
            case 'FIS':
                newSelect.innerHTML = '<option>Keperawatan</option><option>Kebidanan</option><option>Pendidikan Profesi Ners</option><option>Pendidikan Profesi Bidan</option>';
                 break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('fakultas_3').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('prodi_3');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'prodi_3'; 
        detailLabel.textContent = 'Program Studi';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'prodi_3'; 
        newSelect.id = 'prodi_3';

        switch (selectedOption.id) {
            case 'FISIP':
                newSelect.innerHTML = 
                '<option>Ilmu Politik</option><option>Hubungan Internasional</option><option>Administrasi Publik</option><option>Sosiologi</option><option>Ilmu Komunikasi</option><option>Magister Administrasi Publik</option><option>Magister Ilmu Politik</option><option>Doktor Ilmu Politik</option>';
                break;
            case 'FH':
                newSelect.innerHTML = '<option>Hukum</option><option>Magister Hukum</option>';
                break;
            case 'FBS':
                newSelect.innerHTML = 
                '<option>Sastra Inggris</option><option>Sastra Indonesia</option><option>Sastra Jepang</option><option>Bahasa Korea</option>';
                break;
            case 'FEB':
                newSelect.innerHTML = '<option>Manajemen</option><option>Akuntansi</option><option>Pariwisata</option><option>Bisnis Digital</option><option>Magister Manajemen</option><option>Magister Akuntansi</option><option>Doktor Ilmu Manajemen</option>';
                break;
            case 'FTS':
                newSelect.innerHTML = '<option>Fisika</option><option>Teknik Elektro</option><option>Teknik Mesin</option><option>Teknik Fisika</option>';
                break;
            case 'FBP':
                newSelect.innerHTML = 
                '<option>Biologi</option><option>Agro Teknologi</option><option>Magister Biologi</option>';
                break;
            case 'FTKI':
                newSelect.innerHTML = '<option>Sistem Informasi</option><option>Informatika</option><option>Magister Teknologi Informasi</option>';
                break;
            case 'FIS':
                newSelect.innerHTML = '<option>Keperawatan</option><option>Kebidanan</option><option>Pendidikan Profesi Ners</option><option>Pendidikan Profesi Bidan</option>';
                 break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('fakultas_4').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('prodi_4');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'prodi_4'; 
        detailLabel.textContent = 'Program Studi';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'prodi_4'; 
        newSelect.id = 'prodi_4';

        switch (selectedOption.id) {
            case 'FISIP':
                newSelect.innerHTML = 
                '<option>Ilmu Politik</option><option>Hubungan Internasional</option><option>Administrasi Publik</option><option>Sosiologi</option><option>Ilmu Komunikasi</option><option>Magister Administrasi Publik</option><option>Magister Ilmu Politik</option><option>Doktor Ilmu Politik</option>';
                break;
            case 'FH':
                newSelect.innerHTML = '<option>Hukum</option><option>Magister Hukum</option>';
                break;
            case 'FBS':
                newSelect.innerHTML = 
                '<option>Sastra Inggris</option><option>Sastra Indonesia</option><option>Sastra Jepang</option><option>Bahasa Korea</option>';
                break;
            case 'FEB':
                newSelect.innerHTML = '<option>Manajemen</option><option>Akuntansi</option><option>Pariwisata</option><option>Bisnis Digital</option><option>Magister Manajemen</option><option>Magister Akuntansi</option><option>Doktor Ilmu Manajemen</option>';
                break;
            case 'FTS':
                newSelect.innerHTML = '<option>Fisika</option><option>Teknik Elektro</option><option>Teknik Mesin</option><option>Teknik Fisika</option>';
                break;
            case 'FBP':
                newSelect.innerHTML = 
                '<option>Biologi</option><option>Agro Teknologi</option><option>Magister Biologi</option>';
                break;
            case 'FTKI':
                newSelect.innerHTML = '<option>Sistem Informasi</option><option>Informatika</option><option>Magister Teknologi Informasi</option>';
                break;
            case 'FIS':
                newSelect.innerHTML = '<option>Keperawatan</option><option>Kebidanan</option><option>Pendidikan Profesi Ners</option><option>Pendidikan Profesi Bidan</option>';
                 break;

        }

        newInputField.appendChild(newSelect);
    }
});
document.getElementById('fakultas_5').addEventListener('change', function() {
    const selectedOption = this.options[this.selectedIndex];
    const newInputField = document.getElementById('prodi_5');
    newInputField.innerHTML = '';

    if (selectedOption.id !== '') { 
        
        const detailLabel = document.createElement('label');
        detailLabel.htmlFor = 'prodi_5'; 
        detailLabel.textContent = 'Program Studi';
        newInputField.appendChild(detailLabel);


        const newSelect = document.createElement('select');
        newSelect.name = 'prodi_5'; 
        newSelect.id = 'prodi_5';

        switch (selectedOption.id) {
            case 'FISIP':
                newSelect.innerHTML = 
                '<option>Ilmu Politik</option><option>Hubungan Internasional</option><option>Administrasi Publik</option><option>Sosiologi</option><option>Ilmu Komunikasi</option><option>Magister Administrasi Publik</option><option>Magister Ilmu Politik</option><option>Doktor Ilmu Politik</option>';
                break;
            case 'FH':
                newSelect.innerHTML = '<option>Hukum</option><option>Magister Hukum</option>';
                break;
            case 'FBS':
                newSelect.innerHTML = 
                '<option>Sastra Inggris</option><option>Sastra Indonesia</option><option>Sastra Jepang</option><option>Bahasa Korea</option>';
                break;
            case 'FEB':
                newSelect.innerHTML = '<option>Manajemen</option><option>Akuntansi</option><option>Pariwisata</option><option>Bisnis Digital</option><option>Magister Manajemen</option><option>Magister Akuntansi</option><option>Doktor Ilmu Manajemen</option>';
                break;
            case 'FTS':
                newSelect.innerHTML = '<option>Fisika</option><option>Teknik Elektro</option><option>Teknik Mesin</option><option>Teknik Fisika</option>';
                break;
            case 'FBP':
                newSelect.innerHTML = 
                '<option>Biologi</option><option>Agro Teknologi</option><option>Magister Biologi</option>';
                break;
            case 'FTKI':
                newSelect.innerHTML = '<option>Sistem Informasi</option><option>Informatika</option><option>Magister Teknologi Informasi</option>';
                break;
            case 'FIS':
                newSelect.innerHTML = '<option>Keperawatan</option><option>Kebidanan</option><option>Pendidikan Profesi Ners</option><option>Pendidikan Profesi Bidan</option>';
                 break;

        }

        newInputField.appendChild(newSelect);
    }
});