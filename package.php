<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */

/**
 * PHP versions 4 and 5
 *
 * Copyright (c) 2006-2007 KUBO Atsuhiro <iteman@users.sourceforge.net>,
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package    Piece_Unity
 * @subpackage Piece_Unity_Component_JapaneseZ2H
 * @copyright  2006-2007 KUBO Atsuhiro <iteman@users.sourceforge.net>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License (revised)
 * @version    SVN: $Id$
 * @since      File available since Release 1.0.0
 */

require_once 'PEAR/PackageFileManager2.php';

PEAR::staticPushErrorHandling(PEAR_ERROR_CALLBACK, create_function('$error', 'var_dump($error); exit();'));

$releaseVersion = '1.0.0';
$releaseStability = 'stable';
$apiVersion = '1.0.0';
$apiStability = 'stable';
$notes = 'The first release of Piece_Unity_Component_JapaneseZ2H.';

$package = new PEAR_PackageFileManager2();
$package->setOptions(array('filelistgenerator' => 'svn',
                           'changelogoldtonew' => false,
                           'simpleoutput'      => true,
                           'baseinstalldir'    => '/',
                           'packagefile'       => 'package.xml',
                           'packagedirectory'  => '.',
                           'dir_roles'         => array('data' => 'data',
                                                        'tests' => 'test',
                                                        'docs' => 'doc'),
                           'ignore'            => array('package.php', 'package.xml')
                           )
                     );

$package->setPackage('Piece_Unity_Component_JapaneseZ2H');
$package->setPackageType('php');
$package->setSummary('An output filter which can be used to convert Japanese JIS X0208 kana to JIS X0201 kana.');
$package->setDescription('An output filter which can be used to convert Japanese JIS X0208 kana to JIS X0201 kana.');
$package->setChannel('pear.piece-framework.com');
$package->setLicense('BSD License (revised)', 'http://www.opensource.org/licenses/bsd-license.php');
$package->setAPIVersion($apiVersion);
$package->setAPIStability($apiStability);
$package->setReleaseVersion($releaseVersion);
$package->setReleaseStability($releaseStability);
$package->setNotes($notes);
$package->setPhpDep('4.3.0');
$package->setPearinstallerDep('1.4.3');
$package->addPackageDepWithChannel('required', 'Piece_Unity', 'pear.piece-framework.com', '1.0.0');
$package->addMaintainer('lead', 'iteman', 'KUBO Atsuhiro', 'iteman@users.sourceforge.net');
$package->addGlobalReplacement('package-info', '@package_version@', 'version');
$package->generateContents();

if (array_key_exists(1, $_SERVER['argv'])
    && $_SERVER['argv'][1] == 'make'
    ) {
    $package->writePackageFile();
} else {
    $package->debugPackageFile();
}

exit();

/*
 * Local Variables:
 * mode: php
 * coding: iso-8859-1
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * indent-tabs-mode: nil
 * End:
 */
?>
