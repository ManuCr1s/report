const APP_ROUTE = $('#env').attr('data-api-url')+'/report';
const ENV = {
    'inicio':`${APP_ROUTE}/reporte`,
    'dates':`${APP_ROUTE}/dates`,
    'datatable':`${APP_ROUTE}/datatable`
}
export default ENV;
