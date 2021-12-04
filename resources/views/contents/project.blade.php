@extends('welcome')

@section('contents')
<div class="container" style="padding-top: 5rem">
    <h1 class="display-6 pt-5 fw-bold text-center" style="color: #dab96a">Project List</h1>
    <h3 class="fs-3">
        <br>
        Data Table Projects</h3>
    <div class="d-flex justify-content-center">
        <div class="table-responsive">
            <h1 class="display-6 fw-bold"></h1>
            <table class="table border border-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Description</th>
                        <th scope="col">Location</th>
                        <th scope="col">Comodity</th>
                        <th scope="col">Client</th>
                        <th scope="col">Affillation</th>
                        <th scope="col">Year</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nickel Drilling Project (as Green Geo Sinergi)</td>
                        <td>Weda Bay</td>
                        <td>Ni-Fe</td>
                        <td>PT Weda Bay Nickel</td>
                        <td>JO with PT Ofel Kineret Sultra</td>
                        <td>2021</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Pekerjaan Pemboran Geoteknik</td>
                        <td>Semarang</td>
                        <td></td>
                        <td>PT Trans Marga Jateng</td>
                        <td>JO with IAGI - MGTI</td>
                        <td>2021</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cone Penetration Test SKTT Powerline</td>
                        <td>Banyuwangi</td>
                        <td></td>
                        <td>PLN Jawa Bali</td>
                        <td>Sub-contractor PLNE</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Cone Penetration Test SKTT Powerline</td>
                        <td>Banyumas</td>
                        <td></td>
                        <td>PLN Jawa Bali</td>
                        <td>Sub-contractor PLNE</td>
                        <td>2020</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Coal Drilling & Associated Services of PT Sinar Kemilau Abadi Concession</td>
                        <td>Balangan-Kalsel</td>
                        <td>Coal</td>
                        <td>PT SINAR KEMILAU ABADI</td>
                        <td></td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Coal Drilling & Associated Services of PT Graha Panca Karsa Concession</td>
                        <td>Long Iram - Kaltim</td>
                        <td>Coal</td>
                        <td>PT DMT EECI</td>
                        <td>Sub-contractor to PT GEN</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Geological Mapping of PT MEN Concession</td>
                        <td>Bolaang Mongodow</td>
                        <td>Gold, Ree</td>
                        <td>PT DMT EECI</td>
                        <td>Sub-contractor to PT GEN</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Coal Drilling of PT PPCI Concession</td>
                        <td>Penajam - Kaltim</td>
                        <td>Coal</td>
                        <td>PT PPCI</td>
                        <td></td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Coal Drilling & Associated Services of PT KBB Concession</td>
                        <td>Sarolangun - Jambi</td>
                        <td>Coal</td>
                        <td>PT DMT EECI</td>
                        <td>Sub-contractor to PT GEN</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Andesit Drilling in Clomas Quarry</td>
                        <td>Clomas - Banten</td>
                        <td>Andesite</td>
                        <td>PT NOVA ENERGY CONSULTING</td>
                        <td></td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>Topography, Bathymetri & Met Ocean Survey</td>
                        <td>Bojonegara - Banten</td>
                        <td></td>
                        <td>PT KARYA PUTRA BERKAH</td>
                        <td></td>
                        <td>2017</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Cone Penetration Test SKTT Powerline</td>
                        <td>North Sulawesi</td>
                        <td></td>
                        <td>PTN Enjiniring</td>
                        <td></td>
                        <td>2017</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td>Coal Drilling of PT Tadjahan Antang Mineral</td>
                        <td>Gunung Mas - Kalteng</td>
                        <td>Coal</td>
                        <td>PT TADJAHAN ANTANG MINERAL</td>
                        <td></td>
                        <td>2016</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td>Geotech Drilling & CPT</td>
                        <td>Padalarang - Bandung</td>
                        <td></td>
                        <td>PT ADARA JAYA VITTI</td>
                        <td></td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td>Provision of Drilling & Associated Services of Pranap Site PT Bukit Asam</td>
                        <td>Pranap - Riau</td>
                        <td>Coal</td>
                        <td>IMC</td>
                        <td>Sub-contractor to PT Mucoindo Prakasa</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th scope="row">16</th>
                        <td>Provision of Drilling & Associated Services of Pranap Site PT Bukit Asam</td>
                        <td>Bangko - Sumsel</td>
                        <td>Coal</td>
                        <td>IMC</td>
                        <td>Sub-contractor to PT Mucoindo Prakasa</td>
                        <td>2014</td>
                    </tr>
                    <tr>
                        <th scope="row">17</th>
                        <td>Geological Mapping of NI-FE Ore in PT Bososi Pratama Concession</td>
                        <td>Konawe Utara - Sulteng</td>
                        <td>Ni-Fe</td>
                        <td>PT BOSOSI PRATAMA</td>
                        <td>Sub-contractor to PT Mucoindo Prakasa</td>
                        <td>2013</td>
                    </tr>
                    <tr>
                        <th scope="row">18</th>
                        <td>Supervision of Town-site Drilling Project of PT Bukit Asam(Persero) Tbk.</td>
                        <td>Tanjung Enim Sumsel</td>
                        <td>Coal</td>
                        <td>PT ARTHA TYANI MINERAL</td>
                        <td>Sub-contractor to PT Mucoindo Prakasa</td>
                        <td>2013</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
