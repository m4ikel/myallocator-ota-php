<?php
/**
 * MyAllocator Inbound API Definitions
 *
 * @package     myallocator/myallocator-php-sdk-ota
 * @author      Nathan Helenihi <support@myallocator.com>
 * @copyright   Copyright (c) MyAllocator
 * @license     http://mit-license.org/
 * @link        https://github.com/MyAllocator/myallocator-php-sdk-ota
 */

return array(
    'HealthCheck' => array(
        'args' => array(
            'req' => array(
                'verb'
            ),
            'opt' => array()
        )
    ),
    'CreateProperty' => array(
        'args' => array(
            'req' => array(
                'verb',
                'mya_property_id',
                'ota_property_id',
                'Property'
            ),
            'opt' => array(
                'ota_property_password',
                'guid'
            )
        )
    ),
    'SetupProperty' => array(
        'args' => array(
            'req' => array(
                'verb',
                'mya_property_id',
                'ota_property_id',
                'ota_regcode'
            ),
            'opt' => array(
                'ota_property_password',
                'guid'
            )
        )
    ),
    'GetRoomTypes' => array(
        'args' => array(
            'req' => array(
                'verb',
                'mya_property_id',
                'ota_property_id'
            ),
            'opt' => array(
                'ota_property_password',
                'guid'
            )
        )
    ),
    'GetBookingId' => array(
        'args' => array(
            'req' => array(
                'verb',
                'mya_property_id',
                'ota_property_id',
                'booking_id'
            ),
            'opt' => array(
                'ota_property_password',
                'guid',
                'booking_id_version'
            )
        )
    ),
    'GetBookingList' => array(
        'args' => array(
            'req' => array(
                'verb',
                'mya_property_id',
                'ota_property_id'
            ),
            'opt' => array(
                'ota_property_password',
                'ota_booking_version',
                'guid'
            )
        )
    ),
    'GetRatePlans' => array(
        'args' => array(
            'req' => array(
                'verb',
                'mya_property_id',
                'ota_property_id'
            ),
            'opt' => array(
                'ota_property_password',
                'guid'
            )
        )
    ),
    'ARIUpdate' => array(
        'args' => array(
            'req' => array(
                'verb',
                'mya_property_id',
                'ota_property_id',
                'currency',
                'Inventory'
            ),
            'opt' => array(
                'ota_property_password',
                'guid'
            )
        )
    )
);
