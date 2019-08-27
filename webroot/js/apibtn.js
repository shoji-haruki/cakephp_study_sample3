$(function(){
    $('#ajaxBtn').on('click', function(){
        $.ajax({
            type: 'get',
            url: '/messages/myapicustum',
        })
        .done( (data) => {
            console.log('読み込み成功');
            $("#response").html(data);
            console.log(data);
        })
        .fail( (data) => {
            alert('読み込み失敗');
        })
    });
});
