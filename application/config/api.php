<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CORE CONSTANTS
|--------------------------------------------------------------------------
*/

define('API_REST_URL', 'http://alp-api.hahalolo.com:8080');
define('API_ES_URL', 'http://esapi.hahalolo.com:3000');
define('API_MAX_TIMEOUT', 2.0); // 2s

/*
|--------------------------------------------------------------------------
| API PATH
|--------------------------------------------------------------------------
*/

define('API_PATH_PAYMENT_SERVICE', 'api-rest-payment/service');
define('API_PATH_OAUTH', 'api-rest-oauth');
define('API_PATH_USER_SERVICE', 'api-rest-user/service');
define('API_PATH_OAUTH_SERVICE', 'api-rest-oauth/service');
define('API_PATH_BUSINESS_SERVICE', 'api-rest-business/service');
define('API_PATH_PAGE_SERVICE', 'api-rest-pages/service');
define('API_PATH_SERVICE_SERVICE', 'api-rest-service/service');
define('API_PATH_ORDER_SERVICE', 'api-rest-order/service');
define('API_PATH_HOTEL_SERVICE', 'api-rest-hotel/service');
define('API_PATH_ORDER_HOTEL_SERVICE', 'api-rest-order-hotel/service');
define('API_PATH_EXPERIENCE_SERVICE', 'api-rest-experience/service');
define('API_PATH_SETTING_SERVICE', 'api-rest-setting/service');
define('API_PATH_TOUR_SERVICE', 'api-rest-tour/service');
define('API_PATH_SHOP_SERVICE', 'api-rest-shop/service');

/*
|--------------------------------------------------------------------------
| MEHOD API PATH
|--------------------------------------------------------------------------
*/

//HOTEL
define('CREATE_HOTEL_GROUP_FACILITIES', 'hotelAdmin/createGroupFacilities');
define('GET_HOTEL_GROUP_FACILITIES', 'hotelAdmin/groupFacilities');
define('CREATE_HOTEL_GROUP_SERVICE', 'hotelAdmin/createGroupService');
define('GET_HOTEL_GROUP_SERVICE', 'hotelAdmin/groupService');
define('REMOVE_HOTEL_GROUP_FACILITIES_OR_SERVICE', 'hotelAdmin/remove');
define('CREATE_HOTEL_FACILITIES', 'haloFacilities/create');
define('GET_HOTEL_FACILITIES', 'haloFacilities/facilities');
define('GET_HOTEL_LIST_SERVICE', 'haloFacilities/services');
define('REMOVE_HOTEL_FACILITIES_OR_SERVICE', 'haloFacilities/remove');

//CURRENCY
define('GET_CURRENTCY', 'currency/currency');
define('CREATE_LIST_CURRENTCY', 'currency/createCurrency');
define('UPDATE_CURRENTCY', 'currency/updateCurrency');
define('FIND_CURRENTCY_BY_CODE', 'currency/findByCode');
define('REMOVE_CURRENTCY', 'currency/remove');
define('UPDATE_CURRENTCY_BY_DATE', 'currency/updateCurrencyByDate');

//SHOP
define('CREATE_SHOP_CATEGORIES', 'categories/create');
define('GET_SHOP_LIST_CATEGORIES_DEFAULT', 'categories/categories');
define('GET_SHOP_LIST_CATEGORIES_BY_ID', 'categories/findById');
define('REMOVE_SHOP_CATEGORIES', 'categories/remove');
define('REMOVE_SHOP_ALL_CATEGORIES', 'categories/removeAll');


//TOPIC
define('CREATE_TOUR_TOPIC', 'topic_system/create');
define('GET_TOUR_LIST_TOPIC', 'topic_system/showTopic');
define('REMOVE_TOUR_TOPIC', 'topic_system/remove');

//TIMEZONE
define('GET_TIMEZONE', 'currency/timezone');
define('CREATE_TIMEZONE_FROM_EXTERNAL', 'currency/createTimezone');
define('UPDATE_TIMEZONE', 'currency/updateTimezone');
define('REMOVE_TIMEZONE', 'currency/removeTimeZone');
