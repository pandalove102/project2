/*global Backbone, _ */
var app = app || {};

(function () {
	'use strict';

	app.UserCollection = Backbone.Collection.extend({
		model: app.UserModel,
		localStorage: new Backbone.LocalStorage('UserCollection'),

        initialize: function () {
            console.log('This collection has been initialized.');
            /*
            |--------------------------------------------------------------------------
            | EVENTS
            |--------------------------------------------------------------------------
            | Backbone collection có các sự kiện:
            | - add : Lúc add thêm object vào collection
            | - remove: lúc xóa bớt 1 object khỏi collection
            | - reset: lúc reset lại danh sách object của collection
            | - sort: lúc sắp xếp lại danh sách object trong collection
            */

            // Tương tự như bên model thôi :D không làm gì thì cũng chẳng cần define
        },


        /*
        |--------------------------------------------------------------------------
        | DEFINE METHOD :: FETCH
        |--------------------------------------------------------------------------
        | Lấy danh sách user rồi nạp vào collection hiện tại
        */
		fetch : function(params) {
		    var collection = this;
		    // Gọi API
            AJAX.get(API.USER.SEARCH_USERS, params).done(function(res){
                if(res.success){
                    var data = Helper.getData(res);
                    // Chúng ta đã có dữ liệu được trích xuất => nạp data đó vào collection thông qua hàm reset
                    collection.reset(data);
                    console.log(collection);
                    // Ngoài hàm reset ra thì Backbone collection còn có nhiều hàm khác như add, destroy, sort..
                    // http://backbonejs.org/#Collection

                    // Bây giờ xem console => có bao nhiêu object là hiện bấy nhiêu log init model :D
                } else{
                    // Dựa theo res.error mà trả thông báo lỗi
                }
			});
		},

		/* --- CUSTOM METHOD --- */
        tim_hot_girl: function(tieu_chi){
            console.log('Có %s phù hợp tiêu chí', 0);
        }

        /* --- END --- */
        // https://devhints.io/backbone
        // http://backbonejs.org

	});
})();
