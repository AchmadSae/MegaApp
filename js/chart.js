google.charts.load('current', { 'packages': ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    //data untuk lineChart1
    var dataYear = google.visualization.arrayToDataTable([
        ['Date', 'Sales'],
        ['Jan', 2000],
        ['Feb', 1470],
        ['Mart', 1660],
        ['April', 1030],
        ['Mei', 2000],
        ['Juni', 1470],
        ['Juli', 1660],
        ['Agustus', 1030]
    ]);
    //data untuk line chart2
    var dataMonth = google.visualization.arrayToDataTable([
        ['Date', 'Sales'],
        ['May 1', 1000],
        ['May 2', 1170],
        ['May 3', 660],
        ['May 4', 1030]
    ]);
    var options = {
        title: 'Company Performance',
        curveType: 'function',
        legend: { position: 'bottom' }
    };

    var chartYear = new google.visualization.LineChart(document.getElementById('chartLine1'));
    var chartMonth = new google.visualization.LineChart(document.getElementById('chartLine2'));

    chartMonth.draw(dataMonth, options);
    chartYear.draw(dataYear, options);
}
