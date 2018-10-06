$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });
    console.log('fggggg');
    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});