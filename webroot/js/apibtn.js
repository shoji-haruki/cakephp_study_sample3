$(function(){
    $('#ajaxBtn').on('click', function(){
        $.ajax({
            type: 'get',
            // dataType: 'html',
            url: '/messages/myapicustum',
        })
        .done( (data) => {
            console.log('読み込み成功');
            $("#response").html(data);
            console.log(data);
        })
        // Ajaxリクエストが失敗した時発動
        .fail( (data) => {
            alert('読み込み失敗');
        })
    });
});
        // .then(
        //     data => console.log(data),
        //     error => alert('読み込み失敗')
        //     // // 1つめは通信成功時のコールバック
        //     // function (data) {
        //     //     // $("#results").append(data);
        //     //     alert("成功");
        //     // },
        //     // // 2つめは通信失敗時のコールバック
        //     // function () {
        //     //     alert("読み込み失敗");
        // );
        // .then(
        //     function(data) {
        //     alert("成功");
        //     console.log('aa');
        //     var user = null;
        //     // if(data.status) {
        //         user = data.result;
        //     function () {
        //         alert("読み込み失敗");
        //     });
        //     // } else {
        //     //     // 失敗時の処理。失敗したことを伝える。
        //     //     alert(data.message);
        //     // }
        // });
            // 'error': function() {
            // // アクション側でExceptionが投げられた場合はここに来る。
            // // エラーをここで処理したい場合はExceptionを投げても良い
            // }

