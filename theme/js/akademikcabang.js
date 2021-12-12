if(document.getElementById("ChartKehadiran")){
    $(document).ready(function() {
        var chartbar = document.getElementById("ChartKehadiran");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 14;
    
    // Start Collection Data
    
    var dataFirst = {
        label: "S",
        data: [4,7,7,7,5,10,9],
        fill: true,
        borderColor: 'rgb(30, 66, 105)',
        backgroundColor: 'rgb(30, 66, 105)'
    };
    
    var dataSecond = {
        label: "I",
        data: [5,8,7,8,7,9,12],
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192)'
    };

    var dataThird = {
        label: "A",
        data: [6,3,3,10,5,7,8], 
        fill: true, 
        borderColor: 'rgba(232, 90, 103, 1)',
        backgroundColor: 'rgba(232, 90, 103)'
    };
    
    var MergeData = {
        labels : ['sep','okt','Nov','Des','Jan','Feb','Mar'],
        datasets: [dataFirst, dataSecond,dataThird]
    };
    
    
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
        responsive: true,
        maintainAspectRatio: false,
    };
    
    
    var barchart = new Chart(chartbar, {
        type: 'bar',
        data: MergeData,
        options: chartOptions
    });
    } );
    
}

if(document.getElementById("ChartSakit")){

    $(document).ready(function() {
        var sakit = document.getElementById("ChartSakit");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 14;
    
    var MergeData = {
        labels: ['Sakit',''],
        datasets: [{
            data: [33,67],
            backgroundColor: ['rgb(30, 66, 105)','rgba(217,217,217,1)'] 
        }]
    };    
    
    var chartOptions = {
        legend: {
            display: false
        },
        responsive: true,
        maintainAspectRatio: false,    
    };
    var doughtnut = new Chart(sakit, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartIjin")){

    $(document).ready(function() {
        var ijin = document.getElementById("ChartIjin");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 14;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['Ijin',''],
        datasets: [{
            data: [38,62],
            backgroundColor: ['rgb(75, 192, 192)','rgba(217,217,217,1)'] 
        }]
    };    
    
    var chartOptions = {
        legend: {
            display: false
        },
        responsive: true,
        maintainAspectRatio: false,    
    };
    var doughtnut = new Chart(ijin, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartAbsen")){

    $(document).ready(function() {
        var absen = document.getElementById("ChartAbsen");
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 14;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['Absen',''],
        datasets: [{
            data: [29,71],
            backgroundColor: ['rgb(232, 90, 103)','rgba(217,217,217,1)'] 
        }]
    };    
    
    var chartOptions = {
        legend: {
            display: false
        },
        responsive: true,
        maintainAspectRatio: false,    
    };
    var doughtnut = new Chart(absen, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartLearning")){
    $(document).ready(function() {
        var learn = document.getElementById("ChartLearning");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 13;
    
        var dataFormatif = {
            type:'line',
            label: "Formatif", // Penamanaan Data Tersebut
            data: [77,76,74,77,78,79,80,82,81,79,78,79,82,84], // Data yang berasal dari database
            fill: false,
            borderColor: 'rgba(0, 66, 105, 1)',
        };
    
        
        var dataTugas = {
            type:'line',
            label: "Tugas", // Penamanaan Data Tersebut
            data: [74,72,74,75,78,77,76,79,79,80,82,83,81,82], // Data yang berasal dari database,
            fill: false,
            borderColor: 'rgba(232, 90, 103, 1)'
        };
    
    
        var MergeData = {
            labels: ['M1','M2','M3','M4','M5','M6','M7','M8','M9','M10','M11','M12','M13','M14'], 
            datasets: [dataFormatif,dataTugas]
        };
    
        // End Collection Data
    
        var chartOptions = {
            legend: {
                display: true,
                position: 'bottom',
                labels: {
                    boxWidth: 50,
                    fontColor: 'black',
                    fontSize: 12
                }
            },
            responsive: true,
            maintainAspectRatio: false,
           
    }
    
        var ChartLine = new Chart(learn, {
            type: 'line',
            data: MergeData,
            options: chartOptions
        });
    
    } );

}

if(document.getElementById("Chartlearning")){

    $(document).ready(function() {
        var learning = document.getElementById("Chartlearning");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 14;

    var MergeData = {
        labels: ['',''],
        datasets: [{
            data: [79,21], 
            backgroundColor: ['rgb(0, 66, 105)','rgba(217, 217, 217,1)'] 
        }]
    };
    
    
    var chartOptions = {
        legend: {
            display: false
        },
        responsive: true,
        maintainAspectRatio: false,    
    };
    var doughtnut = new Chart(learning, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartMeet")){

    $(document).ready(function() {
        var meet = document.getElementById("ChartMeet");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    

    
    var MergeData = {
        labels: ['Pertemuan','Kekurangan'], 
        datasets: [{
            data: [64,36],
            backgroundColor: ['rgb(30, 66, 105)','rgba(232, 90, 103,1)'] 
        }]
    };
    
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
        responsive: true,
        maintainAspectRatio: false,
    
    };
    var doughtnut = new Chart(meet, {
        type: 'doughnut',
        data: MergeData,
        options: chartOptions
    });
    } );
}

if(document.getElementById("ChartIPK")){
    $(document).ready(function() {
        var ipk= document.getElementById("ChartIPK");
    
        Chart.defaults.global.defaultFontFamily = "Verdana,sans serif";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var dataSatu = {
        data: [25,79,102,98,23],
        fill: true,
        borderColor: ['rgb(30, 66, 105)',
        'rgb(75, 192, 192)',
        'rgb(232, 90, 103)',
        'rgb(235,242,92)',
        'rgb(123,242,92)'],
        backgroundColor:  ['rgb(30, 66, 105)',
        'rgb(75, 192, 192)',
        'rgb(232, 90, 103)',
        'rgb(235,242,92)',
        'rgb(123,242,92)']
        
    };
    
    
    
    var MergeData = {
        labels: ['1.0 - 2.0','2.1 - 2.5','2.6 - 3.0','3.1 - 3.5','3.6 - 4.0'],
        datasets: [dataSatu]
    };
    
    // End Collection Data
    
    var Options = {
        legend: {
            display: false,
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
    
    var barchart = new Chart(ipk, {
        type: 'horizontalBar',
        data: MergeData,
        options: Options
    });
    } );
}