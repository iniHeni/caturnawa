function updatePositions(index) {
    // Ambil elemen dropdown posisi team
    var teamPosition = document.getElementById('posisi_' + index).value;

    // Ambil elemen dropdown posisi peserta 1 dan 2
    var posisi1 = document.getElementById('posisi1_' + index);
    var posisi2 = document.getElementById('posisi2_' + index);

    // Atur nilai posisi peserta 1 dan 2 berdasarkan pilihan posisi team
    if (teamPosition === 'OG') {
        posisi1.value = 'PM';
        posisi2.value = 'DPM';
    } else if (teamPosition === 'CG') {
        posisi1.value = 'MoG';
        posisi2.value = 'Whip Gov';
    } else if (teamPosition === 'OO') {
        posisi1.value = 'LoO';
        posisi2.value = 'DLoO';
    } else if (teamPosition === 'CO') {
        posisi1.value = 'MoO';
        posisi2.value = 'Whip Opp';
    } 
}
