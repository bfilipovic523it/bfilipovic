@extends('layouts.admin')

@section("title")
Urednički panel
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div id="kategorije_chart" style="width: 100%; height: 400px;"></div>
    </div>
    <div class="col-md-6">
        <div id="obuke_chart" style="width: 100%; height: 400px;"></div>
    </div>
</div>

{{-- Google Charts --}}
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawCharts);

function drawCharts() {
    var kategorijeData = google.visualization.arrayToDataTable([
        ['Kategorija', 'Broj obuka'],
        ['Rad na računaru', 1],
        ['Bezbednost na radu', 1],
        ['Prodaja', 1],
        ['Zaštita životne sredine', 1],
        ['Menadžment', 2],
    ]);

    var kategorijeOptions = {
        title: 'Raspodela obuka po kategorijama',
        pieHole: 0.3,
        colors: ['green', 'red', 'blue', 'purple', 'orange'],
        chartArea: {width: '90%', height: '80%'}
    };

    var kategorijeChart = new google.visualization.PieChart(document.getElementById('kategorije_chart'));
    kategorijeChart.draw(kategorijeData, kategorijeOptions);

    var obukeData = google.visualization.arrayToDataTable([
        ['Obuka', 'Broj zaposlenih'],
        ['Osnove Microsoft Office paketa', 45],
        ['Prva pomoć', 32],
        ['Vođenje online prodaje', 28],
        ['Ekološka odgovornost', 22],
        ['Obuka za razvoj liderskih veština', 18],
        ['Upravljanje timovima', 15]
    ]);

    var obukeOptions = {
        title: 'Broj zaposlenih po obukama',
        legend: { position: 'none' },
        colors: ['blue'],
        chartArea: {width: '70%'}
    };

    var obukeChart = new google.visualization.BarChart(document.getElementById('obuke_chart'));
    obukeChart.draw(obukeData, obukeOptions);
}
</script>
@endsection
