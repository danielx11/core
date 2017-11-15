<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   Repository
 * @author    Peter Koch, IBK Software AG
 * @license   See accompaning file LICENSE.txt
 * @copyright Peter Koch 2008-2010
 */


// enable/disable SOAP cache
define('REPOSITORY_SOAPCACHE', true);

// valid core versions in descending order
define('REPOSITORY_COREVERSIONS',
		'30050319,30050319;'.	// 3.5.31
		'30050309,30050309;'.	// 3.5.30
		'30050299,30050299;'.	// 3.5.29
		'30050289,30050289;'.	// 3.5.28
		'30050279,30050279;'.	// 3.5.27
		'30050269,30050269;'.	// 3.5.26
		'30050259,30050259;'.	// 3.5.25
		'30050249,30050249;'.	// 3.5.24
		'30050239,30050239;'.	// 3.5.23
		'30050229,30050229;'.	// 3.5.22
		'30050219,30050219;'.	// 3.5.21
		'30050209,30050209;'.	// 3.5.20
		'30050199,30050199;'.	// 3.5.19
		'30050189,30050189;'.	// 3.5.18
		'30050179,30050179;'.	// 3.5.17
		'30050169,30050169;'.	// 3.5.16
		'30050159,30050159;'.	// 3.5.15
		'30050149,30050149;'.	// 3.5.14
		'30050139,30050139;'.	// 3.5.13
		'30050129,30050129;'.	// 3.5.12
		'30050119,30050119;'.	// 3.5.11
		'30050109,30050109;'.	// 3.5.10
		'30050099,30050099;'.	// 3.5.9
		'30050089,30050089;'.	// 3.5.8
		'30050079,30050079;'.	// 3.5.7
		'30050069,30050069;'.	// 3.5.6
		'30050059,30050059;'.	// 3.5.5
		'30050049,30050049;'.	// 3.5.4
		'30050039,30050039;'.	// 3.5.3
		'30050029,30050029;'.	// 3.5.2
		'30050019,30050019;'.	// 3.5.1
		'30050009,30050009;'.	// 3.5.0
		'30050006,30050006;'.	// 3.5.0-RC1
		'30050003,30050003;'.	// 3.5.0-beta1
		'30040059,30040059;'.	// 3.4.5
		'30040049,30040049;'.	// 3.4.4
		'30040039,30040039;'.	// 3.4.3
		'30040029,30040029;'.	// 3.4.2
		'30040019,30040019;'.	// 3.4.1
		'30040009,30040009;'.	// 3.4.0
		'30040006,30040006;'.	// 3.4.0-RC1
		'30040003,30040003;'.	// 3.4.0-beta1
		'30030079,30030079;'.	// 3.3.7
		'30030069,30030069;'.	// 3.3.6
		'30030059,30030059;'.	// 3.3.5
		'30030049,30030049;'.	// 3.3.4
		'30030039,30030039;'.	// 3.3.3
		'30030029,30030029;'.	// 3.3.2
		'30030019,30030019;'.	// 3.3.1
		'30030009,30030009;'.	// 3.3.0
		'30030007,30030007;'.	// 3.3.0-RC2
		'30030006,30030006;'.	// 3.3.0-RC1
		'30030003,30030003;'.	// 3.3.0-beta1
		'30020219,30020219;'.	// 3.2.21
		'30020209,30020209;'.	// 3.2.20
		'30020199,30020199;'.	// 3.2.19
		'30020189,30020189;'.	// 3.2.18
		'30020179,30020179;'.	// 3.2.17
		'30020169,30020169;'.	// 3.2.16
		'30020159,30020159;'.	// 3.2.15
		'30020149,30020149;'.	// 3.2.14
		'30020139,30020139;'.	// 3.2.13
		'30020129,30020129;'.	// 3.2.12
		'30020119,30020119;'.	// 3.2.11
		'30020109,30020109;'.	// 3.2.10
		'30020099,30020099;'.	// 3.2.9
		'30020089,30020089;'.	// 3.2.8
		'30020079,30020079;'.	// 3.2.7
		'30020069,30020069;'.	// 3.2.6
		'30020059,30020059;'.	// 3.2.5
		'30020049,30020049;'.	// 3.2.4
		'30020039,30020039;'.	// 3.2.3
		'30020029,30020029;'.	// 3.2.2
		'30020019,30020019;'.	// 3.2.1
		'30020009,30020009;'.	// 3.2.0
		'30020006,30020006;'.	// 3.2.0-RC1
		'30020004,30020004;'.	// 3.2.0-beta2
		'30020003,30020003;'.	// 3.2.0-beta1
		'30010059,30010059;'.	// 3.1.5
		'30010049,30010049;'.	// 3.1.4
		'30010039,30010039;'.	// 3.1.3
		'30010029,30010029;'.	// 3.1.2
		'30010019,30010019;'.	// 3.1.1
		'30010009,30010009;'.	// 3.1.0
		'30010006,30010006;'.	// 3.1.0-RC1
		'30010003,30010003;'.	// 3.1.0-beta1
		'30000069,30000069;'.	// 3.0.6
		'30000059,30000059;'.	// 3.0.5
		'30000049,30000049;'.	// 3.0.4
		'30000039,30000039;'.	// 3.0.3
		'30000029,30000029;'.	// 3.0.2
		'30000019,30000019;'.	// 3.0.1
		'30000009,30000009;'.	// 3.0.0
		'30000007,30000007;'.	// 3.0.0-RC2
		'30000006,30000006;'.	// 3.0.0-RC1
		'30000003,30000003;'.	// 3.0.0-beta1
		'20110179,20110179;'.	// 2.11.17
		'20110169,20110169;'.	// 2.11.16
		'20110159,20110159;'.	// 2.11.15
		'20110149,20110149;'.	// 2.11.14
		'20110139,20110139;'.	// 2.11.13
		'20110129,20110129;'.	// 2.11.12
		'20110119,20110119;'.	// 2.11.11
		'20110109,20110109;'.	// 2.11.10
		'20110099,20110099;'.	// 2.11.9
		'20110089,20110089;'.	// 2.11.8
		'20110079,20110079;'.	// 2.11.7
		'20110069,20110069;'.	// 2.11.6
		'20110059,20110059;'.	// 2.11.5
		'20110049,20110049;'.	// 2.11.4
		'20110039,20110039;'.	// 2.11.3
		'20110029,20110029;'.	// 2.11.2
		'20110019,20110019;'.	// 2.11.1
		'20110009,20110009;'.	// 2.11.0
		'20110007,20110007;'.	// 2.11.0-RC2
		'20110006,20110006;'.	// 2.11.0-RC1
		'20110003,20110003;'.	// 2.11.0-beta1
		'20100049,20100049;'.	// 2.10.4
		'20100039,20100039;'.	// 2.10.3
		'20100029,20100029;'.	// 2.10.2
		'20100029,20100029;'.	// 2.10.2
		'20100019,20100019;'.	// 2.10.1
		'20100009,20100009;'.	// 2.10.0
		'20100006,20100006;'.	// 2.10.0-RC1
		'20100003,20100003;'.	// 2.10.0-beta1
		'20090059,20090059;'.	// 2.9.5
		'20090049,20090049;'.	// 2.9.4
		'20090039,20090039;'.	// 2.9.3
		'20090029,20090029;'.	// 2.9.2
		'20090019,20090019;'.	// 2.9.1
		'20090009,20090009;'.	// 2.9.0
		'20090006,20090006;'.	// 2.9.0-RC1
		'20090003,20090003;'.	// 2.9.0-beta1
		'20080049,20080049;'.	// 2.8.4
		'20080039,20080039;'.	// 2.8.3
		'20080029,20080029;'.	// 2.8.2
		'20080019,20080019;'.	// 2.8.1
		'20080009,20080009;'.	// 2.8.0
		'20080007,20080007;'.	// 2.8.0-RC2
		'20080006,20080006;'.	// 2.8.0-RC1
		'20070069,20070069;'.	// 2.7.6
		'20070059,20070059;'.	// 2.7.5
		'20070049,20070049;'.	// 2.7.4
		'20070039,20070039;'.	// 2.7.3
		'20070029,20070029;'.	// 2.7.2
		'20070019,20070019;'.	// 2.7.1
		'20070009,20070009;'.	// 2.7.0
		'20070007,20070007;'.	// 2.7.0-RC2
		'20070006,20070006;'.	// 2.7.0-RC1
		'20060079,20060079;'.	// 2.6.7
		'20060069,20060069;'.	// 2.6.6
		'20060059,20060059;'.	// 2.6.5
		'20060049,20060049;'.	// 2.6.4
		'20060039,20060039;'.	// 2.6.3
		'20060029,20060029;'.	// 2.6.2
		'20060019,20060019;'.	// 2.6.1
		'20060009,20060009;'.	// 2.6.0
		'20050119,20060004;'.	// 2.6.0-beta2
		'20050109,20060003;'.	// 2.6.0-beta1
		'20050099,20050099;'.	// 2.5.9
		'20050089,20050089;'.	// 2.5.8
		'20050079,20050079;'.	// 2.5.7
		'20050069,20050069;'.	// 2.5.6
		'20050059,20050059;'.	// 2.5.5
		'20050039,20050039;'.	// 2.5.3
		'20050029,20050029;'.	// 2.5.2
		'20050019,20050019;'.	// 2.5.1
		'20050009,20050009;'.	// 2.5.0
		'20040079,20040079;'.	// 2.4.7
		'20040069,20040069;'.	// 2.4.6
		'20040009,20040009;'.	// 2.4.0
		'20030029,20030029'		// 2.3.2
);

// HTML tags allowed in long texts
define('REPOSITORY_TEXTTAGS', '<h3><h4><h5><h6><p><pre><blockquote><br><ol><ul><li><em><strong>');
