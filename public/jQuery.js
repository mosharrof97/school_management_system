// const { get } = require("jquery");

// $(document).on('click','.edit', function(e){
//     e.preventDefault();
//     var id = $(this).parent().siblings()[0].value;
//     $.ajax({
//         url : "<?= base_url(); ?>"+"/dashboard/singleuser/"+id,
//         method : "GET",
//         success : function(result){
//             var res = JSON.parse(result);
//             $(".name").val(res.name);
//             $(".username").val(res.username);
//             $(".email").val(res.email);
//             $(".role").val(res.role);
            
//         }
//     })
// })

$(document).ready(function() {

    $('#example').DataTable({
        scrollY: "40vh",
        scrollCollapse: true,
        scroller: true,
        responsive: true
    });

    $(document).on('shown.bs.modal', '#modal', function (){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc()
            .scroller.measure();
    });    

    $("#btn-show-modal").on("click", function() {
        $('#modal').modal('show');
    });
});
