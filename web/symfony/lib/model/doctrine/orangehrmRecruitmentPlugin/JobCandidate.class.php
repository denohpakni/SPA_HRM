<?php

/**
 * JobCandidate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class JobCandidate extends PluginJobCandidate {
    const ACTIVE = 1;
    const ARCHIVED = 2;
    const TYPE = "CANDIDATE";

    const MODE_OF_APPLICATION_MANUAL = 1;
    const MODE_OF_APPLICATION_ONLINE = 2;

    public function getFullName() {
        $middleName = trim($this->getMiddleName());
        return $this->getFirstName() . ' ' . (empty($middleName) ? '' : $middleName . ' ') . $this->getLastName();
    }

}