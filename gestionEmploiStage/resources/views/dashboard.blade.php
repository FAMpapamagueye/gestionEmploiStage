@extends('layouts.app')

@section('content')
    <canvas id="myChart" width="600" height="200"></canvas>


    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const labels = {{ Js::from($filieres) }}

        const data = {
                labels: labels,
                datasets: [{
                    label: '# Les apprenants par filiere',
                    data: {{ Js::from($IdApprenants) }},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1
                }]
            }

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: true,
                showScale: false,
                scales: {
                    x: {
                        display: true,
                        // min: -12,
                        // max: 1,
                        title: {
                            display: true,
                            text: 'Les filieres'
                        },
                        beginAtZero: true
                    },
                    y: {
                        type: 'linear',
                        min: 0,
                        max: 20,
                        display: true,
                        title: {
                            display: true,
                            text: 'Nombre etudiant par filiere'
                        },
                        beginAtZero: true
                    }
                }
            }
        }

        const myChart = new Chart(ctx,
            config
        );
    </script>


@endsection
