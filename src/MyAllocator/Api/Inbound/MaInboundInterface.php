<?php
/**
 * MyAllocator BuildToUs PHP SDK Inbound API Interface (MA -> OTA)
 *
 * @package     myallocator/myallocator-php-sdk-ota
 * @author      Nathan Helenihi <support@myallocator.com>
 * @copyright   Copyright (c) MyAllocator
 * @license     http://mit-license.org/
 * @link        https://github.com/MyAllocator/myallocator-php-sdk-ota
 */

namespace MyAllocator\phpsdkota\src\Api\Inbound;

interface MaInboundInterface
{
    /**
     * Authenticate Myallocator/OTA property.
     *
     * After myallocator calls setupProperty, OTA stores mya_property_id to ota_property_id mapping.
     * On each request, validate the 1:1 mya_property_id to ota_property_id mapping.
     *
     * args['mya_property_id']* string The property_id in MyAllocator.
     * args['ota_property_id']* string The property_id in OTA.
     *
     * @param array $args (See above)
     *
     * @return \MyAllocator\phpsdkota\src\Object\MaResponse
     */
    public function authenticateProperty($args);

    /**
     * Setup a new property on OTA.
     *
     * args['verb']*                    string Defines the API endpoint method.
     * args['guid']*                    string A unique 36 character code that identifies a request.
     * args['ota_property_id']*         string For this call always empty
     * args['ota_property_password']*   string For this call always empty
     * args['mya_property_id']*         string The property_id in MyAllocator.
     * args['Property']*                array The property to insert.
     *
     * @param array $args (See above)
     *
     * @return \MyAllocator\phpsdkota\src\Object\MaResponse
     */
    public function createProperty($args);

    /**
     * Setup a new property on OTA.
     *
     * args['verb']*            string Defines the API endpoint method.
     * args['guid']*            string A unique 36 character code that identifies a request.
     * args['mya_property_id']* string The property_id in MyAllocator.
     * args['ota_property_id']* string The property_id in OTA.
     * args['ota_regcode']      string The password used to access the OTA extranet by the client.
     *
     * @param array $args (See above)
     *
     * @return \MyAllocator\phpsdkota\src\Object\MaResponse
     */
    public function setupProperty($args);

    /**
     * Get room type information for a property.
     *
     * args['verb']*            string Defines the API endpoint method.
     * args['guid']*            string A unique 36 character code that identifies a request.
     * args['mya_property_id']* string The property_id in MyAllocator.
     * args['ota_property_id']* string The property_id in OTA.
     *
     * @param array $args (See above)
     *
     * @return \MyAllocator\phpsdkota\src\Object\MaResponse
     */
    public function getRoomTypes($args);

    /**
     * Get information for a specific booking for a property.
     *
     * args['verb']*                string Defines the API endpoint method.
     * args['guid']*                string A unique 36 character code that identifies a request.
     * args['mya_property_id']*     string The property_id in MyAllocator.
     * args['ota_property_id']*     string The property_id in OTA.
     * args['booking_id']*          string The booking identifier.
     * args['booking_id_version']   string The OTA version at time of booking.
     *
     * @param array $args (See above)
     *
     * @return \MyAllocator\phpsdkota\src\Object\MaResponse
     */
    public function getBookingId($args);

    /**
     * Get a list of bookings within a date range for a property.
     *
     * args['verb']*            string Defines the API endpoint method.
     * args['guid']*            string A unique 36 character code that identifies a request.
     * args['mya_property_id']* string The property_id in MyAllocator.
     * args['ota_property_id']* string The property_id in OTA.
     * args['start_ts']*        string The start timestamp (YYYYMMDDtHHMMSSZ).
     * args['end_ts']*          string The end timestamp (YYYYMMDDtHHMMSSZ).
     *
     * @param array $args (See above)
     *
     * @return \MyAllocator\phpsdkota\src\Object\MaResponse
     */
    public function getBookingList($args);

    /**
     * Get a list of rate plans information for a property.
     *
     * args['verb']*            string Defines the API endpoint method.
     * args['guid']*            string A unique 36 character code that identifies a request.
     * args['mya_property_id']* string The property_id in MyAllocator.
     * args['ota_property_id']* string The property_id in OTA.
     *
     * @param array $args (See above)
     *
     * @return \MyAllocator\phpsdkota\src\Object\MaResponse
     */
    public function getRatePlans($args);

    /**
     * Update inventory (rates and availability) for a property.
     *
     * args['verb']*            string Defines the API endpoint method.
     * args['guid']*            string A unique 36 character code that identifies a request.
     * args['mya_property_id']* string The property_id in MyAllocator.
     * args['ota_property_id']* string The property_id in OTA.
     * args['ota_room_id']*     string The room_id in OTA.
     * args['currency']*        string The ISO-4217 currency of rates.
     * args['Inventory']*       array The rates to update.
     *
     * @param array $args (See above)
     *
     * @return \MyAllocator\phpsdkota\src\Object\MaResponse
     */
    public function ARIUpdate($args);

    /**
     * Inbound API logs. Implement a logging method here to capture the inbound API logs.
     *
     * @param string $str The log.
     */
    public function log($str);
}
