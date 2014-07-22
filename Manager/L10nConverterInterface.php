<?php

namespace L10nBundle\Manager;

/**
 * @@TODO doc
 * @author Cyril Otal
 *
 */
interface L10nConverterInterface
{

   /**
    * Convert a list of L10nResources
    * @param array(L10nResources) $l10nResourceList
    * @return string
    */
    public function convertL10nResourceList(array $l10nResourceList);

    /**
     * Convert an input string to a list of L10nResources
     * @param string $input
     * @return array(L10nResources) $l10nResourceList
     */
    public function convertToL10nResourceList($input);
}