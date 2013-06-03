<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: download_time_out.php 93 2012-02-16 23:01:05Z syntaxerror.no $
//

define('NAVBAR_TITLE', 'Din nedlasting ...');
define('HEADING_TITLE', 'Din nedlasting ...');

define('TEXT_INFORMATION', 'Vi beklager men din nedlasting er utgått.<br /><br />
  Om du hadde andre nedlastinger og ønsker å gjennopprette dem,
  vennligst gå til <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">din kontoside</a> for å se dine ordrer.<br /><br />
  Eller, om du tror det er et problem med din ordre kan du <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">kontakte oss</a> <br /><br />
  Takk!
  ');
