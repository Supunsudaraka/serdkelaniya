<style>
    #chartContainer {
        position: relative;
        width: 100%;
        max-width: 500px;
        height: 100%;
        max-height: 500px;
    }
</style>

<div id="chartContainer">

    <canvas id="pieChart"></canvas>
</div>


<script>
    // JavaScript code to render the pie chart
    const allocatedStorage = {{ $storageAllocated }}; // Allocated storage size in MB
    const usedStorage = {{ $storageUsage }}; // Used storage size in MB
    const remainingStorage = allocatedStorage - usedStorage; // Remaining storage size in MB

    const options = {
        series: [usedStorage, remainingStorage],
        chart: {
            type: 'pie',
            width: '100%',
            height: '100%',
        },
        labels: [`${usedStorage} MB`, `${remainingStorage} MB`],
        colors: ['#FF0000', '#52c41a'],
        fill: {
            colors: ['#FF0000', '#52c41a'],
        },
        legend: {
            position: 'right',
            horizontalAlign: 'center',
            markers: {
                width: 10,
                height: 10,
            },
            itemMargin: {
                vertical: 5,
            },
            formatter: function(seriesName, opts) {
                // Custom formatting for legend text
                if (opts.seriesIndex === 0) {
                    return `Used : ${usedStorage} MB`;
                } else {
                    return `Remaining : ${remainingStorage} MB`;
                }
            },
        },
        dataLabels: {
            enabled: true,
            formatter: function(val, opts) {
                if(opts.seriesIndex == 0){
                    return usedStorage + ' MB';
                }
                if(opts.seriesIndex == 1){
                    return  remainingStorage + ' MB';
                }
            },
        },
    };

    const chart = new ApexCharts(document.querySelector("#chartContainer"), options);
    chart.render();
</script>
