var AJAX = AJAX || {};

/*
|--------------------------------------------------------------------------
| AJAX
|--------------------------------------------------------------------------
| @author: Tri Huynh
| @created: 11/09/2018
| @edited_by:
| @updated:
*/

$(function () {
    'use strict';

    /* --- AJAX SETUP --- */
    $.ajaxSetup({
        // contentType: 'application/json; charset=UTF-8',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        timeout: 3000, // 3s
        statusCode: {
            404: function() {
                console.error("Page not found");
            },
            401: function(){
                console.error("Unauthorized");
            }
        }
    });

    window.AJAX = (function () {
        /**
         * Check url is absolute
         * @param url
         * @returns {boolean}
         */
        function isAbsoluteUrl(url){
            return /^(f|ht)tps?:\/\//i.test(url);
        }

        /**
         * Send AJAX Request
         * @param method
         * @param url
         * @param params
         * @returns {*|{readyState, getResponseHeader, getAllResponseHeaders, setRequestHeader, overrideMimeType, statusCode, abort}}
         */
        function callAPI(method, url, params) {
            return $.ajax({
                method: method,
                url: isAbsoluteUrl(url) ? url : (HALO_CONSTANT.BASE_URL + url),
                data: params
            })
        }

        /**
         * Send Upload Request
         * @param method
         * @param url
         * @param params
         * @returns {*|{readyState, getResponseHeader, getAllResponseHeaders, setRequestHeader, overrideMimeType, statusCode, abort}}
         */
        function uploadAPI(method, url, params) {
            return $.ajax({
                method: 'POST',
                contentType: 'multipart/form-data; charset=UTF-8',
                url: isAbsoluteUrl(url) ? url : (HALO_CONSTANT.BASE_URL + url),
                data: params
            })
        }

        return {
            post: function (url, params) {
                return callAPI('POST', url, params);
            },
            get: function (url, params) {
                return callAPI('GET', url, params);
            },
            upload: function (url, params){
                return uploadAPI('GET', url, params);
            }
        };
    })();
});