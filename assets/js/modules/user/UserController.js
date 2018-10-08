
/*global Knockback */
var app = app || {};

(function () {
    'use strict';

    window.UserController = kb.ViewModel.extend({
        /*
        |--------------------------------------------------------------------------
        | CONSTRUCTOR
        |--------------------------------------------------------------------------
        | Model      :: định nghĩa cấu trúc, thuộc tính mặc định của 1 object => tương tác với API/Database
        | Collection :: chứa nhiều object cùng loại Model
        | View       :: định nghĩa các thuộc tính, function cụ thể cho từng đối tượng Model => tương tác với UI
        | Controller :: chỉ nắm giữ các Collection hoặc View để bind ra UI mà thôi
        | ------------
        | Áp dụng như vậy mới đúng chức năng của mô hình MVC/MVVM
        */

        constructor: function () {
			let self = this;
			// Gọi construct của parent
			kb.ViewModel.prototype.constructor.call(this);

			// -- Log để biết là controller đã được binding thành công --
			console.log('Init controller success');

			// Định nghĩa Collection nếu cần handle 1 array các object cùng loại
            // Trong trường hợp chỉ xử lý 1 object thì chỉ cần định nghĩa Model là đủ rồi.

            // Thao tác với dữ liệu thường thì có các thao tác CRUD cơ bản sau
            // 1. Get danh sách object (fetch) => tương tác với nhiều object => định nghĩa trong collection
            // 2a. Lấy thông tin 1 object (fetch) => tương tác với 1 object => định nghĩa trong model
            // 2b. Cập nhật thông tin 1 object (save) => tương tác với 1 object => định nghĩa trong model
            // => nếu có id thì là cập nhật, còn chưa có id là tạo mới
            // 2c. Xóa 1 object (destroy) => tương tác với 1 object => định nghĩa ở model

            // -- Bắt đầu định nghĩa collectionObservable từ Collection và View ban đầu --
			self.users = kb.collectionObservable(new app.UserCollection(), app.UserView);
            self.q = ko.observable('');
			// -- Get user từ API và nạp vào collection vừa nãy --
			self.users.collection().fetch({ q:'', l:'', a:''});

            self.userView = new app.UserView(new app.UserModel());
            console.log('userView',self.userView);
            // console.log('Deptrai',deptraiModel);

            /* ---======= GIỜ TẠO MỚI USER ========--- */

            var deptraiModel = new app.UserModel({username: 'Tri Huynh'});
            console.log('isNew', deptraiModel.isNew());

            deptraiModel.set({ age:16, type: 'Em chưa 18 hehe'}); // Set thêm giá trị
            console.log('Hmm, có tuổi vừa thay đổi', deptraiModel.hasChanged('age'))

            // Méo ưa set nữa
            deptraiModel.unset('age');
            

            

            // Tạo thêm một người đẹp trai nữa coi
            var deptrai6muiModel = deptraiModel.clone();
            // deptrai6muiModel.save();
            // deptrai6muiModel.destroy();


            // Nhiều trò nữa, xem ở đây
            // https://devhints.io/backbone
            // http://backbonejs.org
        },
    });

})();
