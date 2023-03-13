import ENV from './routes_report.js';
$(document).ready(function(){
    $('#bootstrap-table').Datatable({
        'ajax':ENV.datatable,
        'columns':[
            {data:'code'},
            {data:'ticket'},
            {data:'asunto'},
            {data:'date_at'}
        ],
        'pagingType': "full_numbers",
        'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        'responsive': true,
        'ordering':true
    });
});