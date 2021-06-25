var coll = document.getElementsByClassName("menu-collaps");

var i;

for (i = 0; i < coll.length; i++) {

  coll[i].addEventListener("click", function() {

    this.classList.toggle("menu-collaps-active");

    var content = this.nextElementSibling;

    if (content.style.maxHeight){

      content.style.maxHeight = null;

    } else {

      content.style.maxHeight = content.scrollHeight + "0px";

    } 

  });

}

$(".collaps-form").each(function(index){
    $(this).on('click',function(){
        var tog = $(this).attr('href')
        $(tog).toggle()
    })
})


if ( document.getElementById('excel')) {

document.getElementById('excel').addEventListener('click',function(){
    var table2excel = new Table2Excel();
    table2excel.export(document.querySelectorAll("#datatable"));
});

}

if( document.getElementById('pdf') ){
    document.getElementById('pdf').addEventListener('click',function(){
        const pdf = document.getElementById('datatable');
        // console.log(pdf);
        var custom = {
            margin:       1,
            filename:     'Newfile.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: 'in', format: 'A4', orientation: 'portrait' }
          };
        html2pdf().from(pdf).set(custom).save();
    });
}

if(document.getElementById('print')){
    document.getElementById('print').addEventListener('click',function(){
        var divToPrint=document.getElementById("datatable");
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
    })
}

if(document.querySelector('input[list]')){
    document.querySelector('input[list]').addEventListener('input', function(e) {
        var input = e.target,
        list = input.getAttribute('list'),
        options = document.querySelectorAll('#' + list + ' option'),
        hiddenInput = document.getElementById(input.getAttribute('id') + '-id'),
        inputValue = input.value;
    
        hiddenInput.value = inputValue;
    
        for(var i = 0; i < options.length; i++) {
            var option = options[i];
    
            if(option.innerText === inputValue) {
                hiddenInput.value = option.getAttribute('data-value');
                break;
            }
        }
    });
}


$(document).ready(function() {    



    $('#tabs li a:first').addClass('active');

    $('.tab-pane').hide();

    $('.tab-pane:first').show();



    $('#tabs li a').click(function(){

        var t = $(this).attr('id');

        if(!$(this).hasClass('active')){ //this is the start of our condition

            $('#tabs li a').removeClass('active');

            $('#'+ t).addClass('active');          

            // alert(t);

            $('.tab-pane').hide();

            $('#'+ t + 'C').show(300);

        }

    });

});



$(document).ready(function(){

    $('#datatable').DataTable({

        responsive: true,
        "language" : {

            "info" : "Show _END_ of _TOTAL_ Records",
            "lengthMenu": "Display _MENU_ Records",
            "paginate": {
                "first":      "<i class='fas fa-angle-double-left'></i>",
                "last":       "<i class='fas fa-angle-double-right'></i>",
                "next":       "<i class='fas fa-angle-right'></i>",
                "previous":   "<i class='fas fa-angle-left'></i>"
            },

        }         
    });

});

$(document).ready(function(){

    $('#datatable2').DataTable({

        responsive: true,
        "language" : {

            "info" : "Show _END_ of _TOTAL_ Records",
            "lengthMenu": "Display _MENU_ Records",
            "paginate": {
                "first":      "<i class='fas fa-angle-double-left'></i>",
                "last":       "<i class='fas fa-angle-double-right'></i>",
                "next":       "<i class='fas fa-angle-right'></i>",
                "previous":   "<i class='fas fa-angle-left'></i>"
            },

        }         
    });

});

$(document).ready(function(){

    $('#datatable3').DataTable({

        responsive: true,
        "language" : {

            "info" : "Show _END_ of _TOTAL_ Records",
            "lengthMenu": "Display _MENU_ Records",
            "paginate": {
                "first":      "<i class='fas fa-angle-double-left'></i>",
                "last":       "<i class='fas fa-angle-double-right'></i>",
                "next":       "<i class='fas fa-angle-right'></i>",
                "previous":   "<i class='fas fa-angle-left'></i>"
            },

        }         
    });

});

$(document).ready(function(){
    $(".logo-toggle").click(function(){
        $(".wrapper").toggleClass("collapse");
    });
});

$(document).ready(function(){
    $("#Menumobile").click(function(){
        $(".wrapper").toggleClass("open");
    });

    $(".icon-toggle-mobile").click(function(){
        $(".wrapper").removeClass("open");
    });

});


$(document).ready(function()
{

    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // $('#nestable3').nestable();

    // activate Nestable for list 1
    $('#nestable').nestable()
    .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));


});



// REALISASI PEMBAYARAN
$(document).ready(function() {
    $('table.display').DataTable();


    var RealisasiPembayaran = document.getElementById("getRealisasiPembayaran");


    Chart.defaults.global.defaultFontFamily = "helveticaregular";
    Chart.defaults.global.defaultFontSize = 18;

    // Start Collection Data

    var dataFirst = {
        type:'line',
        label: "Total Value (IDR)", // Penamanaan Data Tersebut
        data: [3250, 2900, 2150, 2250, 1700, 800], // Data yang berasal dari database
        lineTension: 0,
        fill: false,
        borderColor: 'rgb(30, 66, 105)',
        yAxisID: 'left-axis'
    };

    var dataSecond = {
        type:'line',
        label: "Total Trx", // Penamanaan Data Tersebut
        data: [2850, 2750, 2400, 2300, 1800, 900], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.6)',
        yAxisID: 'right-axis'
    };

    var MergeData = {
        labels: ["M 2021", "M 2021", "M 2021", "M 2021", "M 2021", "M 2021"], // Label horizontal
        datasets: [dataFirst, dataSecond]
    };

    // End Collection Data

    // Start Option Line Chart

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
        title: {display: true},
        // RESPONSIVE CHART
        responsive: true,
        maintainAspectRatio: false,
        // START MULTI AXIS
        scales: {
            xAxes: [{
                display: true, 
                scaleFontSize: 12 , 
                ticks: {
                    fontSize: 14 // Mengubah Font X axis (Vertical)
                }, 
                stacked:true
            }],
            yAxes: [{
               ticks: {
                   fontSize: 14, // Mengubah Font Y axis (Vertical)
                   fontColor : 'rgb(30, 66, 105)'
               },
               type:'linear',
               id:'left-axis',
               display: true,
               position: 'left',
               scaleLabel: {display: true, labelString: 'Value (IDR)',fontColor : 'rgb(30, 66, 105)' }
           },{
               ticks: {
                   fontSize: 14, // Mengubah Font Y axis (Vertical)
                   fontColor : 'rgba(75, 192, 192, 1)'
               },
               type:'linear',
               id:'right-axis',
               display: true,
               position: 'right',
               stacked:false,
               scaleLabel: {display: true, labelString: 'Trx',fontColor : 'rgba(75, 192, 192, 1)' },
               gridLines: {drawOnChartArea:false}
           }]
       }
   };


   var lineChart = new Chart(RealisasiPembayaran, {
    type: 'bar',
    data: MergeData,
    options: chartOptions
});
});

// batas


// TAGIHAN PEMBAYARAN
$(document).ready(function() {
    $('table.display').DataTable();


    var TagihanPembayaran = document.getElementById("getTagihanPembayaran");

    Chart.defaults.global.defaultFontFamily = "helveticaregular";
    Chart.defaults.global.defaultFontSize = 18;

    // Start Collection Data


    var dataFirst = {
        type:'line',
        label: "Total Value (IDR)", // Penamanaan Data Tersebut
        data: [3250, 2900, 2150, 2250, 1700, 800], // Data yang berasal dari database
        lineTension: 0,
        fill: false,
        borderColor: 'rgb(0, 66, 105)',
        yAxisID: 'left-axis'
    };

    var dataSecond = {
        type:'line',
        label: "Total Trx", // Penamanaan Data Tersebut
        data: [2850, 2750, 2400, 2300, 1800, 900], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        yAxisID: 'right-axis'
    };

    var MergeData = {
        labels: ["M 2021", "M 2021", "M 2021", "M 2021", "M 2021", "M 2021"], // Label horizontal
        datasets: [dataFirst, dataSecond]
    };

    // End Collection Data

    // Start Option Line Chart

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
        title: {display: true},
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            xAxes: [{
                display: true, 
                scaleFontSize: 12 , 
                ticks: {
                fontSize: 14 // Mengubah Font X axis (Vertical)
            }, 
            stacked:true
        }],
        yAxes: [{
         ticks: {
               fontSize: 14, // Mengubah Font Y axis (Vertical)
               fontColor : 'rgb(0, 66, 105)'
           },
           type:'linear',
           id:'left-axis',
           display: true,
           position: 'left',
           scaleLabel: {display: true, labelString: 'Value (IDR)',fontColor : 'rgb(0, 66, 105)' }
       },{
         ticks: {
               fontSize: 14, // Mengubah Font Y axis (Vertical)
               fontColor : 'rgba(75, 192, 192, 1)'
           },
           type:'linear',
           id:'right-axis',
           display: true,
           position: 'right',
           stacked:false,
           scaleLabel: {display: true, labelString: 'Trx',fontColor : 'rgba(75, 192, 192, 1)' },
           gridLines: {drawOnChartArea:false}
       }]
   }
};

    // End Option Line Chart

    // Action Line Chart
    var lineChart = new Chart(TagihanPembayaran, {
        type: 'bar',
        data: MergeData,
        options: chartOptions
    });

} );
// batas

    // TAGIHAN PEMBIAYAAN
    $(document).ready(function() {
        $('table.display').DataTable();


        var TagihanPembiayaan = document.getElementById("getTagihanPembiayaan");

        Chart.defaults.global.defaultFontFamily = "helveticaregular";
        Chart.defaults.global.defaultFontSize = 18;

    // Start Collection Data

    var dataFirst = {
        label: "Tagihan", // Penamanaan Data Tersebut
        data: [53, 115, 78, 57, 47, 89,60], // Data yang berasal dari database
        lineTension: 0,
        fill: true,
        borderColor: 'rgb(30, 66, 105)',
        backgroundColor: 'rgb(30, 66, 105)'
        // yAxisID: 'left-axis'
    };

    var dataSecond = {
        label: "Pembayaran", // Penamanaan Data Tersebut
        data: [42, 104, 77, 50, 32, 98,50], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.6)',
        // yAxisID: 'right-axis'
    };

    var MergeData = {
        labels: ["Januari 2021", "Februari 2021", "Maret 2021", "April 2021", "Mei 2021", "Juni 2021"], // Label horizontal
        datasets: [dataFirst, dataSecond]
    };

    // End Collection Data

    // Start Option Line Chart

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
        title: {display: true},
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


    var lineChart = new Chart(TagihanPembiayaan, {
        type: 'bar',
        data: MergeData,
        options: chartOptions
    });
} );

    $(document).ready(function() {
        $('table.display-pa').DataTable();
    } );

    $(document).ready(function() {
        $('table.display-kelas').DataTable();
    } );


     // TAGIHAN PEMBIAYAAN
    $(document).ready(function() {
        $('table.display').DataTable();


        var RealisasiPembiayaan = document.getElementById("getRealisasiPembiayaan");

        Chart.defaults.global.defaultFontFamily = "helveticaregular";
        Chart.defaults.global.defaultFontSize = 18;

    // Start Collection Data

    var dataFirst = {
        label: "Tagihan", // Penamanaan Data Tersebut
        data: [53, 115, 78, 57, 47, 89,60], // Data yang berasal dari database
        lineTension: 0,
        fill: true,
        borderColor: 'rgb(30, 66, 105)',
        backgroundColor: 'rgb(30, 66, 105)'
        // yAxisID: 'left-axis'
    };

    var dataSecond = {
        label: "Pembayaran", // Penamanaan Data Tersebut
        data: [42, 104, 77, 50, 32, 98,50], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.6)',
        // yAxisID: 'right-axis'
    };

    var MergeData = {
        labels: ["Januari 2021", "Februari 2021", "Maret 2021", "April 2021", "Mei 2021", "Juni 2021"], // Label horizontal
        datasets: [dataFirst, dataSecond]
    };

    // End Collection Data

    // Start Option Line Chart

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
        title: {display: true},
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


    var lineChart = new Chart(RealisasiPembiayaan, {
        type: 'bar',
        data: MergeData,
        options: chartOptions
    });
} );

// CHART EWS KRS
$(document).ready(function() {
    $('table.display').DataTable();

var EWSKRS = document.getElementById("getEWSKRS");

    Chart.defaults.global.defaultFontFamily = "helveticaregular";
    Chart.defaults.global.defaultFontSize = 18;

    var dataFirst = {
        type:'line',
        label: "Rasio", // Penamanaan Data Tersebut
        data: [20, 40, 30, 90, 80, 80, 100], // Data yang berasal dari database
        lineTension: 0,
        fill: true,
        borderColor: 'rgb(30, 66, 105)',
        yAxisID: 'left-axis'
    };

    var MergeData = {
        labels: ["BA", "KA", "IK", "TI", "ABI", "SK"], // Label horizontal
        datasets: [dataFirst]
    };

    // End Collection Data

    // Start Option Line Chart

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
        title: {display: true},
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            xAxes: [{
                display: true, 
                scaleFontSize: 12 , 
                ticks: {
                fontSize: 14 // Mengubah Font X axis (Vertical)
            }, 
            stacked:true
        }],
        yAxes: [{
         ticks: {
               fontSize: 14, // Mengubah Font Y axis (Vertical)
               fontColor : 'rgb(0, 0, 0)'
           },
           type:'linear',
           id:'left-axis',
           display: true,
           position: 'left'
           // scaleLabel: {display: true, labelString: 'Ratio (%)',fontColor : 'rgb(0, 0, 0)' }
       }]
   }
};

    // End Option Line Chart

    // Action Line Chart
    var lineChart = new Chart(EWSKRS, {
        type: 'bar',
        data: MergeData,
        options: chartOptions
    });

} );
// batas

// START SCROLLX datatable jadwal ujian
$(document).ready(function() {
    $('#datatable-jadwal-ujian').DataTable( {
        "scrollX": true
    } );
} );
// END


// type chart line start

$(document).ready(function() {
    var ChartLine = document.getElementById("ChartLine");

    Chart.defaults.global.defaultFontFamily = "helveticaregular";
    Chart.defaults.global.defaultFontSize = 18;

    // Start Collection Data


    var dataFirst = {
        type:'line',
        label: "Graphics", // Penamanaan Data Tersebut
        data: [3250, 2900, 2150, 2250, 1700, 800], // Data yang berasal dari database
        lineTension: 0,
        fill: false,
        borderColor: 'rgba(0, 66, 105, 1)',
        backgroundColor:'rgba(0, 66, 105, 0.2)',
        yAxisID: 'left-axis'
    };

    
    var dataSecond = {
        type:'line',
        label: "Presentation", // Penamanaan Data Tersebut
        data: [2850, 2750, 2400, 2300, 1800, 900], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        yAxisID: 'right-axis'
    };


    var MergeData = {
        labels: ["10", "20", "30", "40", "50", "60"], // Label horizontal
        datasets: [dataFirst,dataSecond]
    };

    // End Collection Data

    // Start Option Line Chart

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
        title: {display: true},
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            xAxes: [{
                display: true, 
                scaleFontSize: 12 , 
                ticks: {
                fontSize: 14 // Mengubah Font X axis (Vertical)
            }, 
            stacked:true
        }],
        yAxes: [{
         ticks: {
               fontSize: 14, // Mengubah Font Y axis (Vertical)
               fontColor : 'rgba(0, 66, 105,1)'
           },
           type:'linear',
           id:'left-axis',
           display: true,
           position: 'left',
           scaleLabel: {display: true, labelString: 'Range',fontColor : 'rgba(0, 66, 105,1)' }
       },{
        ticks: {
              fontSize: 14, // Mengubah Font Y axis (Vertical)
              fontColor : 'rgba(75, 192, 192, 1)'
          },
          type:'linear',
          id:'right-axis',
          display: false,
          position: 'right',
          stacked:false,
          scaleLabel: {display: false, labelString: 'Presentation',fontColor : 'rgba(75, 192, 192, 1)' },
          gridLines: {drawOnChartArea:false}
      }]
   }
};
    // End Option Line Chart

    // Action Line Chart
    var ChartLine = new Chart(ChartLine, {
        type: 'line',
        data: MergeData,
        options: chartOptions
    });

} );

// type chart line end


// type chart bar start
$(document).ready(function() {
    var chartbar = document.getElementById("ChartBar");

    Chart.defaults.global.defaultFontFamily = "helveticaregular";
    Chart.defaults.global.defaultFontSize = 18;

// Start Collection Data

var dataFirst = {
    label: "Presentation 1", // Penamanaan Data Tersebut
    data: [53, 115, 78, 57, 47, 89,60], // Data yang berasal dari database
    lineTension: 0,
    fill: true,
    borderColor: 'rgb(30, 66, 105)',
    backgroundColor: 'rgb(30, 66, 105)'
    // yAxisID: 'left-axis'
};

var dataSecond = {
    label: "presentation 2", // Penamanaan Data Tersebut
    data: [42, 104, 77, 50, 32, 98,50], // Data yang berasal dari database
    lineTension: 0,
    fill: true, 
    borderColor: 'rgba(75, 192, 192, 1)',
    backgroundColor: 'rgba(75, 192, 192, 0.6)',
    // yAxisID: 'right-axis'
};

var MergeData = {
    labels: ["10", "20", "30", "40", "50", "60"], // Label horizontal
    datasets: [dataFirst, dataSecond]
};

// End Collection Data

// Start Option Line Chart

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
    title: {display: true},
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

// type chart bar end

// type chart pie start
$(document).ready(function() {
    var chartpie = document.getElementById("ChartPie");

    Chart.defaults.global.defaultFontFamily = "helveticaregular";
    Chart.defaults.global.defaultFontSize = 18;

// Start Collection Data

var MergeData = {
    labels: ['Primary','Secondary','Third'], // Label horizontal
    datasets: [{
        data: [10,20,30], //data dari database
        backgroundColor: ['rgb(30, 66, 105)','rgba(75, 192, 192,1)','rgba(232, 90, 103, 1)'] 
    }]
};

// End Collection Data

// Start Option Line Chart

var chartOptions = {
    title: {display: true},
    // RESPONSIVE CHART
    responsive: true,
    maintainAspectRatio: false,


};
var pie = new Chart(chartpie, {
    type: 'pie',
    data: MergeData,
    options: chartOptions
});
} );

// type chart pie end

// type chart doughtnuts start

$(document).ready(function() {
    var donut = document.getElementById("ChartDoughnut");

    Chart.defaults.global.defaultFontFamily = "helveticaregular";
    Chart.defaults.global.defaultFontSize = 18;

// Start Collection Data

var MergeData = {
    labels: ['Primary','Secondary','Third'], // Label horizontal
    datasets: [{
        data: [10,20,30], //data dari database
        backgroundColor: ['rgb(30, 66, 105)','rgba(75, 192, 192,1)','rgba(232, 90, 103, 1)'] 
    }]
};

// End Collection Data

// Start Option Line Chart

var chartOptions = {
    title: {display: true},
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
// type chart doughtnuts end

//START SCROLL HORIZONTAL DATATABLE
$(document).ready(function() {
    $('#scroll-horizontal-datatable').DataTable( {
        "scrollX": true
    } );
} );
// === END
