<?php
/*
  $Id: invoices.php $
  TomatoCart Open Source Shopping Cart Solutions
  http://www.tomatocart.com

  Copyright (c) 2009 Wuxi Elootec Technology Co., Ltd;  Copyright (c) 2007 osCommerce

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/

  class osC_Access_Invoices extends osC_Access {
    var $_module = 'invoices',
        $_group = 'customers',
        $_icon = 'invoices.png',
        $_title,
        $_sort_order = 400;

    function osC_Access_Invoices() {
      global $osC_Language;

      $this->_title = $osC_Language->get('access_invoices_title');
    }
  }
?>
