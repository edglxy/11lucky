window.history.pushState(null, null, window.location.pathname);
$(document).ready(function() {
    route('dashboard');
});
 function route(source){
     switch(source){
        case 'dashboard':
            $("#main_content").empty().load("templates/dashboard.pages.php");
        break;

        case 'ticketing':
        $("#main_content").empty().load("templates/ticketing.pages.php");
        break;

        case 'products':
            $("#main_content").empty().load("templates/products.pages.php");
        break;

        case 'invoices':
            $("#main_content").empty().load("templates/invoices.pages.php");
        break;

        case 'customers':
            $("#main_content").empty().load("templates/customers.pages.php");
        break;

        case 'incominginventory':
            $("#main_content").empty().load("templates/incominginventory.pages.php");
        break;

        case 'outgoinginventory':
            $("#main_content").empty().load("templates/outgoinginventory.pages.php");
        break;
        
        case 'purchaseorder':
            $("#main_content").empty().load("templates/purchaseorder.pages.php");
        break;

        case 'scaling':
            $("#main_content").empty().load("templates/scaling.pages.php");
        break;

        case 'classifying':
            $("#main_content").empty().load("templates/classifying.pages.php");
        break;

        case 'reports':
            $("#main_content").empty().load("templates/reports.pages.php");
        break;

        case 'settings':
            $("#main_content").empty().load("templates/settings.pages.php");
        break;

        default:
            $("#main_content").empty().load("templates/dashboard.pages.php");
        break;
     }
 }
