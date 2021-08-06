var currentURL  = window.location.href
var pathname    = window.location.pathname
const pname     = pathname.substring(1);
const myArr     = pname.split("/")
const ngelink   = myArr[1]
// alert(ngelink)
const addsubact = $("[href='"+ngelink+"']").closest(".submenu-menu-item").parent().addClass("submenu-active")
const asubnya   = $("[href='"+ngelink+"']").closest(".submenu-menu-item").parent().attr("class")
const activenya = $("[href='"+ngelink+"']").parent().addClass("menu-active")
const addcolact = $(".submenu-active > a[href='#']").addClass("menu-collaps-active menu-active")

// 1 level collapse
const dumattr1  = $("[href='"+ngelink+"']").closest(".submenu-menu-item").parent().attr("class")
const dumsplit1 = dumattr1.split(" ")

// 2 level collapse
const dumattr2  = $("[href='"+ngelink+"']").closest(".submenu-menu-item").parent().parent().parent().attr("class")
const dumsplit2 = dumattr2.split(" ")

// JIKA BERADA PADA LEVEL COLLAPSE 2
if (dumsplit2[1] == "coll-level-1") {
    $("[href='"+ngelink+"']").closest(".submenu-menu-item").parent().parent().parent().addClass("submenu-active")
    $(".submenu-active > a[href='#']").addClass("menu-collaps-active menu-active")
}

// UNTUK TRIGGER AUTO OPEN COLLAPSE
$(".menu-collaps-active").each(function(index){
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "0px";
    }
})
