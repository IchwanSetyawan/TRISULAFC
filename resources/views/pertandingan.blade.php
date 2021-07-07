@extends('layouts.app')

@section('title','Pertandingan')

@section('head')
    <style>
        body{
            margin-top: 5em;
        }

        @media (min-width: 992px) {     
               body{
                   margin-top: 6em;
                   color: blue;
               } 
            }
        }
    </style>
@endsection

@section('content')

    <div class="container mt-3">
     
        <h3>Last match</h3>
        <section>
            <table class="table table-dark table-striped text-center">
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
                <td>TRISULA FC Vs PSIM Jogja</td>
                <td>2 - 0</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>23/04/2021</td>
                <td>TRISULA FC Vs Persija Jakarta</td>
                <td>1 - 3</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>03/05/2021</td>
                <td>TRISULA FC Vs Persib Bandung</td>
                <td>2 - 2</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>29/06/2021</td>
                <td>TRISULA FC Vs PSM Makassar</td>
                <td>1 - 2</td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>31/07/2021</td>
                <td>TRISULA FC Vs Persipura Jayapura</td>
                <td>4 - 3</td>
                </tr>
                <tr>
                <th scope="row">6</th>
                <td>01/08/2021</td>
                <td>TRISULA FC Vs Barcelona</td>
                <td>2 - 7</td>
                </tr>
                <tr>
                <th scope="row">7</th>
                <td>09/08/2021</td>
                <td>TRISULA FC Vs Real Madrid</td>
                <td>1 - 5</td>
                </tr>
                <tr>
                <th scope="row">8</th>
                <td>21/09/2021</td>
                <td>TRISULA FC Vs Inter Milan</td>
                <td>1 - 4</td>
                </tr>                
                <tr>
                <th scope="row">1</th>
                <td>03/11/2021</td>
                <td>TRISULA FC Vs Bayern Munchen</td>
                <td>2 - 3</td>
                </tr>
            </tbody>
            </table>
        </section>

        <section>
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
        </section>
    </div>
@endsection