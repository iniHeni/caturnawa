<div id="data-container">
    <section id="skor">
        <div class="container" style="display: flex; justify-content: center;height:70rem">
            <div style="width: 100%;">
                <h1 class="welcome" style="margin-bottom: 1rem; margin-top:auto">Penyisihan</h1>
                <div class="table-responsive" style="max-height: 1900px; overflow-x: auto; overflow-y: auto; position: static;">
                    <table class="table table-bordered table-striped" style="min-width: 1700px; margin-bottom: 0; border-collapse: collapse;">
                        <thead style="position: static; top: -1; z-index: 10;">
                            <tr>
                                <th scope="col" rowspan="6">No</th>
                                <th scope="col" rowspan="6">Team Peserta</th>
                                <th scope="col" rowspan="6" colspan="5">Nama Peserta</th>
                                <th scope="col" colspan="10">Kriteria </th>
                                
                                
                                
                                <th scope="col" rowspan="6">Penilaian Kuantitatif</th>
                                <th scope="col" rowspan="6">Penilaian Kualitatif</th>
                                <th scope="col" rowspan="6">Total</th>
                                <th scope="col" rowspan="6">Rank</th>
                                <th scope="col" rowspan="6">Nama Juri</th>
                                <th scope="col" rowspan="6">actions</th>
                            </tr>
                            
                            <tr >
                                <th scope="col" colspan="4">Ide dan Kesesuaian Pesan Yang Disampaikan Pada Tema</th>
                                <th scope="col"colspan="2">Kedalaman riset dan observasi peristiwa, lokasi, serta karakter dalam film</th>
                                <th scope="col"colspan="1">Visualisasi dan teknik pengambilan gambar</th>
                                <th scope="col"colspan="1">Penggunaan ilustrasi musik, suara, karakter atau voice over</th>
                                <th scope="col"colspan="2">Pola atur penceritaan serta teknik editing dalam penyusunan gambar dan suara</th>
                            </tr>
                            <tr>
                                <th scope="col" colspan="10">Penilaian Meliputi</th>
                            </tr>

                            <tr>
                                <th scope="col" >Kesesuaian film dengan tema</th>
                                <th scope="col">Kreatifitas dalam menceritakan realita dari sudut pandang yang berbeda (teknik penyutradaraan)</th>
                                <th scope="col">Kejelasan pesan yang disampaikan melalui film yang dibuat</th>
                                <th scope="col">Kesesuaian antara judul film dengan cerita melalui film yang dibuat</th>
                                <th scope="col" >Kedalaman riset dan observasi dalam film</th>
                                <th scope="col">Kesesuaian antara fakta dan realita dengan cerita yang diangkat dalam film</th>
                                <th scope="col">Kreatifitas dalam pengambilan gambar yang meliputi sudut kamera, pencahayaan, ruang, dan waktu</th>
                                <th scope="col">Kreatifitas dalam menggunakan unsur audio untuk memberikan informasi secara jelas serta memberikan suasana (mood) dalam film</th>
                                <th scope="col">Kreatifitas dalam memadukan unsur video dan audio dalam menyusun alur cerita berdasarkan informasi dan realita yang diperoleh menjadi suatu yang menarik untuk ditonton</th>
                                <th scope="col">Kesesuaian antara gambar dan suara serta estetika dalam film</th>
                            </tr>


                            <tr>
                                <th scope="col" colspan="10">Skor</th>
                            </tr>



                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++)
                            <tr>
                                <td>{{ $i }}</td>
                                <td></td>
                                
                                
                                
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                                <td>{{-- Leave this column empty --}}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
        </div>
        <style>
            .table-bordered td,
            .table-bordered th {
                border: 2px solid black !important;
                text-align: center;
                vertical-align: middle;
            }

            thead th {
                background-color: #0d6efd !important;
            }
        </style>
    </section>
</div>
