import DataTable from 'datatables.net-dt';
import ENV from './routes_report.js';
$(document).ready(function(){
    let table = new DataTable('#bootstrap-table', {
        'ajax':ENV.datatable,
        'columns':[
            {data:'code'},
            {data:'asunto'},
            {data:'date_at'},
            {defaultContent: "<button type='button' class='form btn btn-primary btn_detalles'>BUSCAR</button>"}
        ],
        'pagingType': "full_numbers",
        'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        'responsive': true,
        'ordering':true,
        'initComplete':function(){
            obtener_data(table);
        }
    });
});

let obtener_data = function(table) {
    $('.btn_detalles').bind('click', function() {
        let data = table.row($(this).parents("tr")).data();
        $('#name_ticket').text(data.code);
    });
};