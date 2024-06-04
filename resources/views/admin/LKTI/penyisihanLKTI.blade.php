<div id="data-container">
    <section id="skor">
        <div class="container" style="display: flex; justify-content: center;height:70rem">
            <div style="width: 100%;">
                <h1 class="welcome" style="margin-bottom: 1rem; margin-top:auto">Penyisihan</h1>
                <div class="table-responsive" style="max-height: 1000px; overflow-x: auto; overflow-y: auto; position: static;">
                    <table class="table table-bordered table-striped" style="min-width: 650px; margin-bottom: 0; border-collapse: collapse;">
                        <thead style="position: static; top: -1; z-index: 10;">
                            <tr>
                                <th scope="col" rowspan="4">No</th>
                                <th scope="col" rowspan="4">Nama Peserta</th>
                                <th scope="col" rowspan="4">Sesi</th>
                                <th scope="col" rowspan="4">Room </th>
                                <th scope="col" rowspan="4">tim</th>
                                <th scope="col" colspan="3">Kriteria Penilaian</th>
                                <th scope="col" rowspan="4">Total</th>
                                <th scope="col" rowspan="4">Rank</th>
                                <th scope="col" rowspan="4">Nama Juri</th>
                                <th scope="col" rowspan="4">actions</th>
                            </tr>
                            <tr>
                                <th scope="col">Penyajian Karya Ilmiah</th>
                                <th scope="col">Substanso Karya Ilmiah</th>
                                <th scope="col">Kualitas Karya Ilmiah</th>
                            </tr>
                            <tr>
                                <th scope="col" colspan="3">Skor</th>
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
