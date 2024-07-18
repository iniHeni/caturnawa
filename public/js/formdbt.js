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
