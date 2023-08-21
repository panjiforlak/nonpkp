<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['add_supplier']         = "supplier/supplier/japasys_form";
$route['supplier_list']        = "supplier/supplier/index";
$route['edit_supplier/(:num)'] = 'supplier/supplier/japasys_form/$1';
$route['supplier_ledger']      = "supplier/supplier/japasys_supplier_ledger";
$route['supplier_ledger/(:num)'] = "supplier/supplier/japasys_supplier_ledger/$1";
$route['supplier_ledgerdata']  = "supplier/supplier/japasys_supplier_ledgerData";
$route['supplier_ledgerinfo/(:any)'] = "supplier/supplier/japasys_supplier_ledgerinfo/$1";
$route['supplier_advance']     = "supplier/supplier/japasys_supplier_advance";
$route['supplier_advance_receipt/(:any)/(:num)'] = "supplier/supplier/supplier_advancercpt/$1/$1";
