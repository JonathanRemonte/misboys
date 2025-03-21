<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['error-flash'] = 'Auth/error';
$route['enlist'] = 'Auth/enlist';
$route['login'] = 'Auth/login';
$route['image'] = 'Auth/image';

$route['dashboard'] = 'Auth/dashboard';

$route['index'] = 'Auth/index';
$route['blackhive'] = 'Auth/blackhive';
$route['firmdash'] = 'Auth/firmdash';
$route['firmview'] = 'Auth/firmview';
$route['firmvpermit'] = 'Auth/firmvpermit';
$route['firmprof'] = 'Auth/firmprof';
$route['swmdash'] = 'Auth/swmdash';
$route['swmadmin'] = 'Auth/swmadmin';
$route['swmlgrep'] = 'Auth/swmlgrep';
$route['swmlgman'] = 'Auth/swmlgman';
$route['swmassmon'] = 'Auth/swmassmon';
$route['req2op'] = 'Auth/req2op';
$route['isscon'] = 'Auth/isscon';
$route['usermanual'] = 'Auth/usermanual';
$route['que'] = 'Auth/que';
$route['quenotif'] = 'Auth/quenotif';
$route['form'] = 'Auth/form';
$route['arcgis'] = 'Auth/arcgis';
$route['arcwatbod'] = 'Auth/arcwatbod';
$route['arcoilspill'] = 'Auth/arcoilspill';
$route['arcwqma'] = 'Auth/arcwqma';
$route['arcpowerp'] = 'Auth/arcpowerp';
$route['arcmining'] = 'Auth/arcmining';
$route['arcslf'] = 'Auth/arcslf';
$route['arcairshed'] = 'Auth/arcairshed';
$route['arcelnidourgent'] = 'Auth/arcelnidourgent';
$route['cpdex'] = 'Auth/cpdex';
$route['cpdpcoex'] = 'Auth/cpdpcoex';
$route['searchFirm'] = 'Auth/searchFirm';
$route['ghgdash'] = 'Auth/ghgdash';
$route['ghgent'] = 'Auth/ghgent';
$route['airqdash'] = 'Auth/airqdash';
$route['airqcaams'] = 'Auth/airqcaams';
$route['convention'] = 'Auth/convention';
$route['plan'] = 'Auth/plan';
$route['planmoac'] = 'Auth/planmoac';
$route['planproac'] = 'Auth/planproac';
$route['planfig'] = 'Auth/planfig';
$route['plantarget'] = 'Auth/plantarget';
$route['planalertProv'] = 'Auth/planalertProv';
$route['findash'] = 'Auth/findash';
$route['admindash'] = 'Auth/admindash';
$route['casmon'] = 'Auth/casmon';
$route['fingaa'] = 'Auth/fingaa';
$route['srchgaa'] = 'Auth/srchgaa';
$route['finbrobps'] = 'Auth/finbrobps';
$route['finbrobps2'] = 'Auth/finbrobps2';
$route['firmgllry'] = 'Auth/firmgllry';


$route['ojt-index'] ='Auth_Orgchart/ojtindex';
$route['ojt-home'] ='Auth_Orgchart/ojthome';
$route['ojt-control'] = 'Auth_Orgchart/ojtcontrol';
$route['ojt-signctrl'] = 'Auth_Orgchart/ojtsignctrl';
$route['ojt-landscape-chart'] ='Auth_Orgchart/ojtlandscape';
$route['ojt-landscape-chart-v2'] ='Auth_Orgchart/ojtlandscapev2';
$route['ojt-edit/(:any)'] = 'Auth_Orgchart/ojtedit/$1';
$route['ojt-delete/(:any)'] = 'Auth_Orgchart/ojtdelete/$1';
$route['ojt-history'] ='Auth_Orgchart/ojthistory';
$route['ojt-floorplan-pismu'] ='Auth_Orgchart/ojtfloorplanpismu';
$route['ojt-floorplan-records'] ='Auth_Orgchart/ojtfloorplanrecords';
$route['ojt-floorplan-technical'] ='Auth_Orgchart/ojtfloorplantechnical';
$route['ojt-floorplan-fad'] ='Auth_Orgchart/ojtfloorplanfad';
$route['ojt-floorplan-ord'] ='Auth_Orgchart/ojtfloorplanord';
$route['ojt-floorplan-list'] ='Auth_Orgchart/ojtfloorplanlist';
$route['ojt-floorplan-chief'] ='Auth_Orgchart/ojtfloorplanchief';



$route['Expired_link'] = 'Auth/Expired_link';
$route['accSettings/(:any)'] = 'Auth/idProfile/$1';

$route['fintry'] = 'Auth/fintry';

$route['filterData'] = 'Auth/filterData';



// Gsu Transaction
$route['filterData'] = 'Auth/filterData';

// gsu routings
$route['gsu'] = 'StockController/index';
$route['ris'] = 'StockController/ris';
$route['add_ris'] = 'StockController/insert_ris';
$route['rsmi'] = 'StockController/rsmi';
$route['scard'] = 'StockController/scard';
$route['inscard/(:any)'] = 'StockController/inscard/$1';
$route['try'] ='StockController/getstock';
$route['request'] ='StockController/req';
$route['RequisitionandIssue'] ='StockController/getrequest';
$route['req/(:any)'] ='StockController/accept/$1';
$route['del/(:any)'] ='StockController/deny/$1';
$route['accSettings'] = 'StockController/idProfile/';
$route['MaterialRequisition'] = 'StockController/materialReq';
$route['userGsu'] = 'StockController/userdash';
$route['userMR'] = 'StockController/userMR';



$route['upload'] = 'StockController/uploadin';


# Finance Cash Management
$route['add_receipt'] = 'FinCashMan/add_receipt';
