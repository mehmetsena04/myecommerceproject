
$(document).ready(function () {
    $.SorulariGoster = function (elemanid) {
        var soruid = elemanid;
        var islenecekyer = "#" + soruid;
        $(".cevapalani").slideUp();

        $(islenecekyer).parent().find(".cevapalani").slideToggle();
    }
});
