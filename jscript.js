$('#standing').click(function(){
    $('#standing').css('display','none');
    $('#sleeping').css('display','block');
    var number = Math.floor( Math.random() * 11);
    
    if (number == 7 ){
        $('p').text("ありがとよ");
    } else if (number == 1) {
        $('p').text("老けた？");
    } else {
        $('p').text("もっとなでろ");
    }
});

$('#sleeping').click(function(){
    $('#standing').css('display','block');
    $('#sleeping').css('display','none');
    $('p').text("プーだよ　なでてね");
});

