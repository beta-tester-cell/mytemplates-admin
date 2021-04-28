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