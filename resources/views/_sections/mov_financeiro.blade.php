<div class="statbox widget box box-shadow col-lg-12 layout-spacing layout-top-spacing">
    <div class="widget-header" style="margin-left: 1%;margin-right: 1%;">                                
        
        <div class="col-lg-12 layout-spacing layout-top-spacing">
            <h4>Movimentação financeira</h4>
            <span></span>
            <div id="s-line-areaa" class="" style="min-height: 365px;"></div>
        </div>
        
    </div>
</div>


 
<script src="plugins/apex/apexcharts.min.js"></script>
<script type="text/javascript">
    var sLineArea = {
        chart: {
            height: 350,
            type: 'area',
            toolbar: {
              show: false,
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        series: [{
            name: 'Entradas',
            data: []
        },{
            name: 'Saidas',
            data: []
        }],

        xaxis: {
            
            categories: [],                
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        }
    }

    var chart = new ApexCharts(
        document.querySelector("#s-line-areaa"),
        sLineArea
    );

    chart.render();
</script>