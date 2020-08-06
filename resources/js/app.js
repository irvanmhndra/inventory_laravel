require('./bootstrap');

$(function () {

    $('#navbarSupportedContent').on('click', function () {
        $(this).removeClass("show");
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('#printInvoice').click(function(){
        Popup($('.invoice')[0].outerHTML);
        function Popup(data) 
        {
            window.print();
            return true;
        }
    });

    $('[data-toggle="tooltip"]').tooltip()

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }

})
