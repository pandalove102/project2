var API = API || {};

/*
|--------------------------------------------------------------------------
| API
|--------------------------------------------------------------------------
| @author: Tri Huynh
| @created: 11/09/2018
| @edited_by: PhuongTT
| @updated: PhuongTT
*/

(function () {
    "use strict";

    window.API = {
        /*
        |--------------------------------------------------------------------------
        |  API USING FOR (LOGIN/USERS/TOUR/SHOP/HOTEL/SERVICE)
        |--------------------------------------------------------------------------
        | @author: PhuongTT
        */
        AUTH: {
          AUTHENTICATE: 'auth/login/ajax_authorize'
        },
        USER: {
            // GET_PROFILE: 'user/ajaxGetProfile',
            // REGISTER: 'user/register',
            SEARCH_USERS: 'user/ajax_search_user'
        },
        HOTEL: {
            
        },
        TOUR: {

        },
        SHOP: {

        },
        SERVICE: {

        },
    };

})();
