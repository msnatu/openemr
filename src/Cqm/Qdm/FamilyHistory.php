<?php
/**
 * @package OpenEMR
 * @link      http://www.open-emr.org
 * @author    Ken Chapple <ken@mi-squared.com>
 * @copyright Copyright (c) 2021 Ken Chapple <ken@mi-squared.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU GeneralPublic License 3
 */

namespace OpenEMR\Cqm\Qdm;

/**
 * OpenEMR\Cqm\Qdm\FamilyHistory
 *
 * This is a class generated with Laminas\Code\Generator.
 *
 * @QDM Version 5.6
 * @author Ken Chapple <ken@mi-squared.com>
 * @license https://github.com/openemr/openemr/blob/master/LICENSE GNU General
 * Public License 3
 */
class FamilyHistory extends QDMBaseType
{
    /**
     * @property BaseTypes\DateTime $authorDatetime
     */
    public $authorDatetime = null;

    /**
     * @property BaseTypes\Code $relationship
     */
    public $relationship = null;

    /**
     * @property BaseTypes\Any $recorder
     */
    public $recorder = null;

    /**
     * @property string $qdmTitle
     */
    public $qdmTitle = 'Family History';

    /**
     * @property string $hqmfOid
     */
    public $hqmfOid = '2.16.840.1.113883.10.20.28.4.111';

    /**
     * @property string $qrdaOid
     */
    public $qrdaOid = '2.16.840.1.113883.10.20.24.3.12';

    /**
     * @property string $qdmCategory
     */
    public $qdmCategory = 'family_history';

    /**
     * @property string $qdmStatus
     */
    public $qdmStatus = '';

    public $_type = 'QDM::FamilyHistory';
}

