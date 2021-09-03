if (document.getElementsByClassName("tabsContent")){
function openChart(evt, chartName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabsContent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(chartName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  if(document.getElementById("defaultOpen")){
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  }
  
}


if(document.getElementById("ChartRegistrasi")){
    $(document).ready(function() {
        var ChartRegistrasi = document.getElementById("ChartRegistrasi");
    
        Chart.defaults.global.defaultFontFamily = "galano-alt";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var dataFirst = {
        label: "Aplikan", // Penamanaan Data Tersebut
        data: [345,367,389,343,365,354,337], // Data yang berasal dari database
        lineTension: 0,
        fill: true,
        borderColor: 'rgb(30, 66, 105)',
        backgroundColor: 'rgb(30, 66, 105)'
    };
    
    var dataSecond = {
        label: "Daftar", // Penamanaan Data Tersebut
        data: [250,269,250,265,254,267,243], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192)'
    };

    var dataThird = {
        label: "Registrasi", // Penamanaan Data Tersebut
        data: [199,189,176,187,167,169,167], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(232, 90, 103, 1)',
        backgroundColor: 'rgba(232, 90, 103)'
    };
    
    var MergeData = {
        labels: ['January','February','March','April','May','June','July'],
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
    
    
    var barchart = new Chart(ChartRegistrasi, {
        type: 'bar',
        data: MergeData,
        options: chartOptions
    });
    } );
    
}

if(document.getElementById("ChartRegistran")){
    $(document).ready(function() {
        var ChartRegistran= document.getElementById("ChartRegistran");
    
        Chart.defaults.global.defaultFontFamily = "galano-alt";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var dataSatu = { // Penamanaan Data Tersebut
        label:'registran',
        data: [490,383,179,61,87,54], // Data yang berasal dari database
        fill: true,
        borderColor: 'rgb(30, 66, 105)',
        backgroundColor: 'rgb(30, 66, 105)'
        
    };
    
    var MergeData = {
        labels: ['College','PLJ','PLB','PLM','POLIMAK','PGRI'],
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
    
    var barchart = new Chart(ChartRegistran, {
        type: 'horizontalBar',
        data: MergeData,
        options: Options
    });
    } );
}

if(document.getElementById("ChartJumlah")){
    $(document).ready(function() {
        var ChartJumlah= document.getElementById("ChartJumlah");
    
        Chart.defaults.global.defaultFontFamily = "galano-alt";
        Chart.defaults.global.defaultFontSize = 16;
    
    // Start Collection Data
    
    var dataSatu = { // Penamanaan Data Tersebut
        label:'jumlah',
        data: [789,354,241,465,651], // Data yang berasal dari database
        fill: true,
        borderColor: 'rgb(30, 66, 105)',
        backgroundColor: 'rgb(30, 66, 105)'
        
    };
    
    var MergeData = {
        labels: ['Instagram','Facebook','Youtube','Website','Presentasi'],
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
    
    var barchart = new Chart(ChartJumlah, {
        type: 'horizontalBar',
        data: MergeData,
        options: Options
    });
    } );
}

if(document.getElementById("Chartmedia")){

    $(document).ready(function() {
        var Chartmedia = document.getElementById("Chartmedia");
    
        Chart.defaults.global.defaultFontFamily = "galano-alt";
        Chart.defaults.global.defaultFontSize = 13;
    
    // Start Collection Data
    
    var MergeData = {
        labels: ['Instagram','Facebook','Youtube','Website','Presentasi'], // Label horizontal
        datasets: [{
            data: [32,14,10,19,26], //data dari database
            backgroundColor: ['rgb(30, 66, 105)','rgba(232, 90, 103, 1)','rgba(75, 192, 192,1)','rgb(245,255,46)','rgb(122,255,50)'] 
        }]
    };
    
    // End Collection Data
    
    
    var chartOptions = {
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            display: true,
            position: 'right',
            labels: {
                boxWidth: 15,
                fontColor: 'black',
                fontSize: 12
            }
        },
    
    };
    var pie = new Chart(Chartmedia, {
        type: 'pie',
        data: MergeData,
        options: chartOptions
    });
    } );
    
}