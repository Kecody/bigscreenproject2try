@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection
{{--Page de tous mes graphiques--}}
@section('content')
    <div class= " d-flex row align-items-center justify-content-center card-body text-white mx-auto vh-100">
            <div class =" d-flex col-4 graph m-2 ">
                    <canvas class ="w-100 m-2" id="pie-6"></canvas>
            </div>
            <div class =" d-flex col-4 graph m-2 ">
                <canvas class =" w-100 m-2" id="pie-7"></canvas>
            </div>
            <div class ="d-flex col-4 graph m-2">
                <canvas class =" w-100 m-2" id="pie-10"></canvas>
            </div>
            <div class =" d-flex col-4 graph m-2">
                <canvas class ="w-100 m-2" id="radar"></canvas>
            </div>
    </div>

    
    
    
    {{-- Partie graph--}}
    {{--//////////////////////SCRIPT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\--}}
    <script>
        //On recupere nos id et on les stocke dans une constante pour les afficher dans la view
        const pie6 = document.getElementById('pie-6');
        const pie7 = document.getElementById('pie-7');
        const pie10 = document.getElementById('pie-10');
        const radar = document.getElementById('radar');
        
        const labels = [
            'Occulus Rift/s',
            'HTC Vive',
            'Windows Mixed Reality',
            'PSVR',
        ];
        const data = {
            labels: labels,
            datasets: [{
            label: 'Marque de casque',
            backgroundColor: [
            'rgba(48, 113, 134, 0.8)',
            'rgba(47, 157, 195, 0.8)',
            'rgba(5, 60, 78, 0.8)',
            'rgba(3, 41, 54, 0.8)'
            ],
            //on stocke nos data dans un tableau
            data: [
                {{$quantity_six['Occulus Rift/s']}}, 
                {{$quantity_six['HTC Vive']}}, 
                {{$quantity_six['Windows Mixed Reality']}}, 
                {{$quantity_six['PSVR']}}
            ],
            }]
        };
        //on parametre le design de notre chart
        const configPieSix = {
            type: 'pie',
            data: data,
            options: {
                plugins:{
                    title: {
                        display: true,
                        text: 'Marque de casques',
                        color: 'rgba(255,255,255,0.8)',
                        padding: {
                             bottom: 20  
                        }
                    },
                    legend:{
                        labels:{
                           color:'white'
                        },
                        position: 'bottom'
                    }
                }
            } 
        };
        //on créer notre nouvelle chart avec les paramètres
        const chart_six = new Chart(pie6, configPieSix);
            
        
        const value = [
            'SteamVR',
            'Occulus store',
            'Viveport',
            'Playstation VR',
            'Google Play',
            'Windows store'
        ];
        const base = {
            labels: value,
            datasets: [{
            label: 'Applications VR',
            backgroundColor: [
            'rgba(48, 113, 134, 0.8)',
            'rgba(47, 157, 195, 0.8)',
            'rgba(5, 60, 78, 0.8)',
            'rgba(3, 41, 54, 0.8)',
            'rgba(40, 69, 78, 0.8)',
            'rgba(0, 129, 171, 0.8)',
            ],
            
            data: [
                {{$quantity_seven['SteamVR']}}, 
                {{$quantity_seven['Occulus store']}}, 
                {{$quantity_seven['Viveport']}}, 
                {{$quantity_seven['Playstation VR']}},
                {{$quantity_seven['Google Play']}},
                {{$quantity_seven['Windows store']}}
            ],
            }]
        }; 
        const configPieSeven = {
            type: 'pie',
            data: base,
            options: {
                plugins:{
                    title: {
                        display: true,
                        text: 'Application VR',
                        color: 'rgba(255,255,255,0.8)',
                        padding:{
                             bottom:20 
                        }
                    },
                    legend:{
                        labels:{
                           color:'white'
                        },
                        position: 'bottom'
                    }
                }
            } 
        };
        const chart_seven = new Chart(pie7, configPieSeven);
        
        const container = [
            'regarder des émissions TV en direct',
            'regarder des films',
            'jouer en solo',
            'jouer en team'
        ];
        const dat = {
            labels: container,
            datasets: [{
            label: 'Utilisation',
            backgroundColor: [
            'rgba(5, 60, 78, 0.8)',
            'rgba(3, 41, 54, 0.8)',
            'rgba(40, 69, 78, 0.8)',
            'rgba(0, 129, 171, 0.8)'
            ],
            
            data: [
                {{$quantity_ten['regarder des émissions TV en direct']}}, 
                {{$quantity_ten['regarder des films']}}, 
                {{$quantity_ten['jouer en solo']}}, 
                {{$quantity_ten['jouer en team']}}
            ],
            }]
        }; 
        const configPieTen = {
            type: 'pie',
            data: dat,
            options: {
                plugins:{
                    title: {
                        display: true,
                        text: 'Utilisation',
                        color: 'rgba(255,255,255,0.8)',
                        padding:{
                             bottom: 20  
                        }
                    },
                    legend:{
                        labels:{
                           color:'white'
                        },
                        position: 'bottom'
                    }
                }
            } 
            
        };
        const chart_ten = new Chart(pie10, configPieTen);
        const bas = {
       
        labels: ['1','2','3','4','5'],
          datasets: [{
            label: 'Eleven',
            
            data: [
                    {{$quantity_eleven['1']}},
                    {{$quantity_eleven['2']}},
                    {{$quantity_eleven['3']}},
                    {{$quantity_eleven['4']}},
                    {{$quantity_eleven['5']}}
                ],
            fill: true,
            backgroundColor: 'rgba(48, 113, 134, 0.4)',
        
          }, {
            label: 'Twelve',
            data: [
                    {{$quantity_twelve['1']}},
                    {{$quantity_twelve['2']}},
                    {{$quantity_twelve['3']}},
                    {{$quantity_twelve['4']}},
                    {{$quantity_twelve['5']}}
                ],
            fill: true,
            backgroundColor: 'rgba(47, 157, 195, 0.4)',
          }, {
            label: 'Thirteen',
            data: [
                    {{$quantity_thirteen['1']}},
                    {{$quantity_thirteen['2']}},
                    {{$quantity_thirteen['3']}},
                    {{$quantity_thirteen['4']}},
                    {{$quantity_thirteen['5']}}
                ],
            fill: true,
            backgroundColor:  'rgba(5, 60, 78, 0.4)',
          }, {
            label: 'Fourteen',
            data: [
                    {{$quantity_fourteen['1']}},
                    {{$quantity_fourteen['2']}},
                    {{$quantity_fourteen['3']}},
                    {{$quantity_fourteen['4']}},
                    {{$quantity_fourteen['5']}}
                ],
            fill: true,
            backgroundColor: 'rgba(3, 41, 54, 0.4)',
           
          }, {
            label: 'Fifteen',
    
            data: [
                    {{$quantity_fifteen['1']}},
                    {{$quantity_fifteen['2']}},
                    {{$quantity_fifteen['3']}},
                    {{$quantity_fifteen['4']}},
                    {{$quantity_fifteen['5']}}
                ],
            fill: true,
            backgroundColor: 'rgba(40, 69, 78, 0.4)',
            
          }]
        };
        const configRad = {
            type: 'radar',
            data: bas,
            options: {
                layout:{
                    padding:{
                        bottom:15
                    }
                },
                plugins:{
                    title: {
                        display: true,
                        text: 'Notes Globales',
                        color: 'rgba(255,255,255,0.8)',
                        fullSize:true,
                        padding:{
                             bottom: 10  
                        }
                    },
                    legend:{
                        labels:{
                           color:'white'
                        },
                        position: 'bottom',
                    },
                },
                scales: {
                    r: {
                        grid: {
                            color:'white'
                        },
                        angleLines: {
                            color:'rgb(73, 178, 177)'
                        }
                    }
                }
            } 
        };
        const rad = new Chart(radar, configRad);
        </script>
    

@endsection
