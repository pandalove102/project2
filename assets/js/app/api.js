var API = API || {};

/*
|--------------------------------------------------------------------------
| API
|--------------------------------------------------------------------------
| @author: Tri Huynh
| @created: 11/09/2018
| @edited_by:
| @updated:
*/

(function () {
    "use strict";

    window.API = {
        AUTH: {
          AUTHENTICATE: 'auth/login/ajax_authorize'
        },
        USER: {
            GET_PROFILE: 'user/ajaxGetProfile',
            REGISTER: 'user/register'
        }
    };

})();
