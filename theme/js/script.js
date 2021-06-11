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


    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    // Start Collection Data

    var dataFirst = {
        type:'line',
        label: "Total Value (IDR)", // Penamanaan Data Tersebut
        data: [3250, 2900, 2150, 2250, 1700, 800], // Data yang berasal dari database
        lineTension: 0,
        fill: false,
        borderColor: 'blue',
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
        labels: ["Q1 2021", "Q2 2021", "Q3 2021", "Q4 2021", "Q5 2021", "Q6 2021"], // Label horizontal
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
                   fontColor : 'blue'
               },
               type:'linear',
               id:'left-axis',
               display: true,
               position: 'left',
               scaleLabel: {display: true, labelString: 'Value (IDR)',fontColor : 'blue' }
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

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    // Start Collection Data


    var dataFirst = {
        type:'line',
        label: "Total Value (IDR)", // Penamanaan Data Tersebut
        data: [3250, 2900, 2150, 2250, 1700, 800], // Data yang berasal dari database
        lineTension: 0,
        fill: false,
        borderColor: 'blue',
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
        labels: ["Q1 2021", "Q2 2021", "Q3 2021", "Q4 2021", "Q5 2021", "Q6 2021"], // Label horizontal
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
               fontColor : 'blue'
           },
           type:'linear',
           id:'left-axis',
           display: true,
           position: 'left',
           scaleLabel: {display: true, labelString: 'Value (IDR)',fontColor : 'blue' }
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


        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

    // Start Collection Data

    var dataFirst = {
        label: "Users", // Penamanaan Data Tersebut
        data: [53, 115, 78, 57, 47, 89,60], // Data yang berasal dari database
        lineTension: 0,
        fill: true,
        borderColor: 'rgb(100, 149, 237)',
        backgroundColor: 'rgb(100, 149, 237)'
        // yAxisID: 'left-axis'
    };

    var dataSecond = {
        label: "My Users", // Penamanaan Data Tersebut
        data: [42, 104, 77, 50, 32, 98,50], // Data yang berasal dari database
        lineTension: 0,
        fill: true, 
        borderColor: 'rgba(75, 192, 192, 1)',
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
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

// batas