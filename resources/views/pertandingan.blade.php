@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <h3>Next Match</h3>
        <br>
        <div class="row">
            <div class="col-12 mx-auto">  
                <div class="card" style="width: 36rem;">
                    <img src="images/next-match.jpg" class="card-img-top" alt="img next match">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <h3>Last match</h3>
        <section>
            <table class="table table-dark table-hover text-center">
            <thead>
                <tr>
                <th scope="col" >No</th>
                <th scope="col" >Waktu</th>
                <th scope="col" >Tim</th>
                <th scope="col" >Skor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>12/01/2021</td>
                <td>Trisula FC Vs PSIM Jogja</td>
                <td>2 - 0</td>
                </tr>
                <tr>
                <th scope="row">1</th>
                <td>23/04/2021</td>
                <td>Trisula FC Vs Persija Jakarta</td>
                <td>1 - 3</td>
                </tr>
                <tr>
                <th scope="row">1</th>
                <td>03/08/2021</td>
                <td>Trisula FC Vs Persib Bandung</td>
                <td>2 - 2</td>
                </tr>
            </tbody>
            </table>
        </section>
    </div>
@endsection