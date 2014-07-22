<?php

namespace L10nBundle\Business;

use L10nBundle\Manager\L10nManagerInterface;
use L10nBundle\Manager\L10nConverterInterface;

/**
 * @@TODO doc
 * @author Cyril Otal
 *
 */
class L10nImporter
{

    /**
     * @var L10nManagerInterface $l10nManager
     */
    protected $l10nManager;

    /**
     *
     * @var L10nConverterInterface
     */
    protected $l10nConverter;


    /**
     * @param L10nManagerInterface $l10nManager
     * @param L10nConverterInterface $l10nConverter
     */
    public function __construct(L10nManagerInterface $l10nManager, L10nConverterInterface $l10nConverter)
    {
        $this->l10nManager = $l10nManager;
        $this->l10nConverter = $l10nConverter;
    }

    /**
     * Import L10nResources from the given filename
     * @param string $path path to the import file
     */
    public function importL10nResourceList($path)
    {

        $input = file_get_contents($path);

        $l10nResourceList = $this->l10nConverter->convertToL10nResourceList($input);

        // $this->l10nManager->getAllL10nResourceList();
    }
}
