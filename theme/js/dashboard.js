if(document.getElementById("ChartBarAngka")){
    $(document).ready(function() {
        var chartbar = document.getElementById("ChartBarAngka");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var dataFirst = {
        label: "Aplikan", // Penamanaan Data Tersebut
        data: [3550], // Data yang berasal dari database
        lineTension: 0,
        fill: true,
        borderColor: 'rgb(30, 66, 105)',
        backgroundColor: 'rgb(30, 66, 105)'
    };
    
    var dataSecond = {
        label: "Daftar", // Penamanaan Data Tersebut
        data: [1780], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192)'
    };

    var dataThird = {
        label: "Registrasi", // Penamanaan Data Tersebut
        data: [978], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(232, 90, 103, 1)',
        backgroundColor: 'rgba(232, 90, 103)'
    };
    
    var MergeData = {
        datasets: [dataFirst, dataSecond,dataThird]
    };
    
    // End Collection Data
    
    // Start Option Line Chart
    
    var chartOptions = {
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                boxWidth: 15,
                fontColor: 'black',
                fontSize: 12
            }
        },
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,
        // START MULTI AXIS
        scales: {
            xAxes: [{
                scaleFontSize: 12 , 
                ticks: {
                    fontSize: 14 // Mengubah Font X axis (Vertical)
                }, 
            }]
        }
    };
    
    
    var barchart = new Chart(chartbar, {
        type: 'bar',
        data: MergeData,
        options: chartOptions
    });
    } );
    
}

if(document.getElementById("ChartDoughnutAplikan")){

    $(document).ready(function() {
        var donut = document.getElementById("ChartDoughnutAplikan");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['Aplikan',''],
        datasets: [{
            data: [39,61], //data dari database
            backgroundColor: ['rgb(30, 66, 105)','rgba(217,217,217,1)'] 
        }]
    };
    
    // End Collection Data
    
    var chartOptions = {
        legend: {
            display: false
        },
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,    
    };
    var doughtnut = new Chart(donut, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartDoughnutDaftar")){

    $(document).ready(function() {
        var daftar = document.getElementById("ChartDoughnutDaftar");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['Daftar',''],
        datasets: [{
            data: [30,70], //data dari database
            backgroundColor: ['rgb(75, 192, 192)','rgba(217,217,217,1)'] 
        }]
    };
    
    // End Collection Data
    
    var chartOptions = {
        legend: {
            display: false
        },
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,    
    };
    var doughtnut = new Chart(daftar, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartDoughnutRegistrasi")){

    $(document).ready(function() {
        var regis = document.getElementById("ChartDoughnutRegistrasi");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['Registrasi',''],
        datasets: [{
            data: [20,80], //data dari database
            backgroundColor: ['rgb(232, 90, 103)','rgba(217,217,217,1)'] 
        }]
    };
    
    // End Collection Data
    
    var chartOptions = {
        legend: {
            display: false
        },
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,    
    };
    var doughtnut = new Chart(regis, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartProfitLost")){
    $(document).ready(function() {
        var profitLost= document.getElementById("ChartProfitLost");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var dataSatu = {
        label: 'Profit/Lost', // Penamanaan Data Tersebut
        data: [1700,-4300,200], // Data yang berasal dari database
        fill: true,
        borderColor: 'rgba(232, 90, 103, 1)',
        backgroundColor: 'rgba(232, 90, 103)'
        
    };
    
    var dataDua = {
        label: 'Expenses', // Penamanaan Data Tersebut
        data: [9300,17000,11000], // Data yang berasal dari database
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192)'
    };

    var dataTiga = {
        label: 'Income', // Penamanaan Data Tersebut
        data: [11000,12700,13000], // Data yang berasal dari database
        fill: true, 
        borderColor: 'rgb(30, 66, 105)',
        backgroundColor: 'rgb(30, 66, 105)'
    };
    
    var MergeData = {
        labels: ['Mar','Feb','Jan'],
        datasets: [dataSatu, dataDua, dataTiga]
    };
    
    // End Collection Data
    
    var Options = {
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                boxWidth: 15,
                fontColor: 'black',
                fontSize: 12
            }
        },
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,
       
    };
    
    var barchart = new Chart(profitLost, {
        type: 'horizontalBar',
        data: MergeData,
        options: Options
    });
    } );
}

if(document.getElementById("ChartStudy")){

    $(document).ready(function() {
        var chartstudy = document.getElementById("ChartStudy");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['Potential Income','Revenue','Receivable'], // Label horizontal
        datasets: [{
            data: [50,34,16], //data dari database
            backgroundColor: ['rgb(30, 66, 105)','rgba(232, 90, 103, 1)','rgba(75, 192, 192,1)'] 
        }]
    };
    
    // End Collection Data
    
    
    var chartOptions = {
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'bottom',
            labels: {
                boxWidth: 15,
                fontColor: 'black',
                fontSize: 12
            }
        },
    
    };
    var pie = new Chart(chartstudy, {
        type: 'pie',
        data: MergeData,
        options: chartOptions
    });
    } );
    
}


if(document.getElementById("ChartLineStudent")){
    $(document).ready(function() {
        var ChartLine = document.getElementById("ChartLineStudent");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 13;
    
        // Start Collection Data
    
    
        var dataTarget = {
            type:'line',
            label: "Target", // Penamanaan Data Tersebut
            data: [335,290,358,291,268,226,250,308,353,315,397,353], // Data yang berasal dari database
            fill: false,
            borderColor: 'rgba(0, 66, 105, 1)',
        };
    
        
        var dataRealisasi = {
            type:'line',
            label: "Realisasi", // Penamanaan Data Tersebut
            data: [320,270,300,270,250,220,250,260,310,290,352,344], // Data yang berasal dari database,
            fill: false,
            borderColor: 'rgba(75, 192, 192, 1)'
        };
    
    
        var MergeData = {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'], // Label horizontal
            datasets: [dataTarget,dataRealisasi]
        };
    
        // End Collection Data
    
        var chartOptions = {
            legend: {
                display: true,
                position: 'top',
                labels: {
                    boxWidth: 50,
                    fontColor: 'black',
                    fontSize: 12
                }
            },
            responsive: true,
            maintainAspectRatio: false,
           
    }
    
        var ChartLine = new Chart(ChartLine, {
            type: 'line',
            data: MergeData,
            options: chartOptions
        });
    
    } );

}

if(document.getElementById("ChartDoughnutStudent")){

    $(document).ready(function() {
        var student = document.getElementById("ChartDoughnutStudent");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['',''],
        datasets: [{
            data: [92,8], //data dari database
            backgroundColor: ['rgb(0, 66, 105)','rgba(232, 90, 103,1)'] 
        }]
    };
    
    // End Collection Data
    
    var chartOptions = {
        legend: {
            display: false
        },
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,    
    };
    var doughtnut = new Chart(student, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartEmployee")){

    $(document).ready(function() {
        var employee = document.getElementById("ChartEmployee");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['Permanent','Contract'], // Label horizontal
        datasets: [{
            data: [63,38], //data dari database
            backgroundColor: ['rgb(30, 66, 105)','rgba(75, 192, 192,1)'] 
        }]
    };
    
    // End Collection Data
    
    
    var chartOptions = {
        title: {display: true},
        legend: {
            position:'bottom',
            labels: {
                boxWidth: 15,
                fontColor: 'black',
                fontSize: 12
            }
        },
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,
    
    
    };
    var doughtnut = new Chart(employee, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}