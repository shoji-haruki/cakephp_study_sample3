$(function(){
    $('#ajaxBtn').on('click', function(){

        $.ajax({

            type: 'get',
            dataType: 'json',
            url: 'http://localhost:8765/messages/myapicustum',
            // 'data':'data',
        })
        console.log('aa')
        .done(function(data) {
            var user = null;
            if(data.status) {
                user = data.result;

            } else {
                // 失敗時の処理。失敗したことを伝える。
                alert(data.message);
            }
        })
            // 'error': function() {
            // // アクション側でExceptionが投げられた場合はここに来る。
            // // エラーをここで処理したい場合はExceptionを投げても良い
            // }
    })
});
