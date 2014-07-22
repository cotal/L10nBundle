<?php

namespace L10nBundle\Business;

use L10nBundle\Entity\L10nResource;
use L10nBundle\Exception\ResourceNotFoundException;
use L10nBundle\Manager\L10nManagerInterface;
use L10nBundle\Business\L10nProvider;

/**
 * @author Cyril Otal
 *
 */
class L10nExporterTest extends \PHPUnit_Framework_TestCase
{

    public function testExportAllL10nResourceList()
    {

        $l10nResource = new L10nResource();

        $l10nManager = $this->getMock('L10nBundle\Manager\L10nManagerInterface', array('getL10nResource', 'setL10nResource', 'getAllL10nResourceList'), array(), '', false);
        $l10nManager
            ->expects($this->once())
            ->method('getAllL10nResourceList')
            ->will($this->returnValue(array($l10nResource)))
        ;

        $l10nConverter = $this->getMock('L10nBundle\Manager\L10nConverterInterface', array('convertL10nResourceList', 'convertToL10nResourceList'), array(), '', false);
        $l10nConverter->expects($this->once())
            ->method('convertL10nResourceList')
            ->with(array($l10nResource))
        ;

        $l10nExporter = new L10nExporter($l10nManager, $l10nConverter, 'php://temp/');
        $l10nExporter->exportAllL10nResourceList('');
    }
}