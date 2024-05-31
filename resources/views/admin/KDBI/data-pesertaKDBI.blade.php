<div id="data-container">
    <section id="skor">
        <div class="container" style="display: flex; justify-content: center;">
            <div style="width: 100%;">
                <h1 class="welcome" style="margin-bottom: 1rem; margin-top:auto">Data Peserta</h1>
                <div class="table-responsive" style="max-height: 1000px; overflow-x: auto; overflow-y: auto; position: static;">
                    <table class="table table-bordered table-striped" style="min-width: 920px; margin-bottom: 0; border-collapse: collapse;">
                        <thead style="position: static; top: -1; z-index: 10;">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Room</th>
                                <th scope="col">OG</th>
                                <th scope="col">OO</th>
                                <th scope="col">CG</th>
                                <th scope="col">CO</th>
                                <th scope="col">Adjudicators</th>
                                <th scope="col">actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 10; $i++)
                            <tr>
                                <td>{{ $i }}</td>
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
                <!-- Tampilkan pagination links jika diperlukan -->
                <!-- Simulasi pagination untuk data dummy -->
                {{-- <nav>
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item disabled">
                            <span class="page-link">Next</span>
                        </li>
                    </ul>
                </nav>
            </div> --}}
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
