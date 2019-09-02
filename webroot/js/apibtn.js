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

$(function(){
    $('#ajaxBtn2').on('click', function(){
        $.ajax({
            type: 'get',
            url: 'https://stg-api.jobdb.career.joi.media/api/v1.0/jobs',
        })
        .done( (data) => {
            console.log('読み込み成功');
            $("#response2").html(data);
            console.log(data);
        })
        .fail( (data) => {
            alert('読み込み失敗');
        })
    });
});
