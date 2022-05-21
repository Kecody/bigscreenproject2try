@extends('layouts.admin')

@section('title')
BigScreen - Administration
@endsection

{{-- @push('head')
<!-- Scripts -->
<script>   
    let graphData = ;
</script>

@endpush --}}

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
   
    {{-- <canvas id="myChart" width="400" height="400"></canvas> --}}

    {{--//////////////////////SCRIPT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\--}}

    
<script>
    
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
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 25, 41)'
        ],
        
        data: [
            {{$quantity_six['Occulus Rift/s']}}, 
            {{$quantity_six['HTC Vive']}}, 
            {{$quantity_six['Windows Mixed Reality']}}, 
            {{$quantity_six['PSVR']}}
        ],
        }]
    };
    const config = {
        type: 'pie',
        data: data,
    };
    const chart_six = new Chart(pie6, config);
        
    
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
        label: '',
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 25, 41)',
        'rgb(127, 255, 212)',
        'rgb(0, 128, 0)',
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
    const confi = {
        type: 'pie',
        data: base,
    };
    const chart_seven = new Chart(pie7, confi);
    
    const container = [
        'regarder des émissions TV en direct',
        'regarder des films',
        'jouer en solo',
        'jouer en team'
    ];
    const dat = {
        labels: container,
        datasets: [{
        label: '',
        backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(255, 25, 41)'
        ],
        
        data: [
            {{$quantity_ten['regarder des émissions TV en direct']}}, 
            {{$quantity_ten['regarder des films']}}, 
            {{$quantity_ten['jouer en solo']}}, 
            {{$quantity_ten['jouer en team']}}
        ],
        }]
    }; 
    const conf = {
        type: 'pie',
        data: dat,
    };
    const chart_ten = new Chart(pie10, conf);
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
        backgroundColor: 'rgba(255, 99, 132)',
    
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
        backgroundColor: 'rgba(54, 162, 235)',
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
        backgroundColor: 'rgba(255, 205, 86)',
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
        backgroundColor: 'rgba(255, 25, 41)',
       
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
        backgroundColor: 'rgba(127, 255, 212)',
        
      }]
    };
    const con = {
        type: 'radar',
        data: bas,
        options: {
            elements: {
              line: {
                borderWidth: 3
              }
            }
          },
    };
    const rad = new Chart(radar, con);
    </script>
@endsection
