/**
 * posts-content.html
 */
$(function(){
    function contentRender(){
        $('.well').hide().fadeIn('slow').show();
        $('.diy-content-title-back').css('cursor','pointer').click(function(){ history.go('-1'); });
        $('.diy-markdown').each(function(i, e){
            $(e).removeClass('hide').html(markdown.toHTML($(e).html()));//.diy-markdown区域进行MD解析,建议这些区域都加上.hide,效果更好
        });
    }
    
    contentRender();
});



/**
 * posts-getlist.html
 */
$(function(){
    function list(){
        var jLines = $('.diy-posts-line');
        jLines.css({'cursor':'pointer'}).hide();
        jLines.each(function(i, e){
            $(e).fadeIn('slow').show();
            line($(e));
        });
    }
    
    function line(jLine){
        jLine.click(function(){
            var id = $(this).data('id');
            location.href = '/posts-' + id + '.po';
        });
    }
    
    list();
});



/**
 * posts_bottom_recommend.html
 */
$(function(){
    var imgs = [];
    var imgsLen = 12;
    
    function getAvatars(){
        return $.get('http://miku.us/?audio/randAvatars/' + imgsLen, function(j){
            $.each(j.data, function(i, e){
                imgs.push(e.avatar);
            });
        }, 'jsonp');
    }
    
    function bottomRender(){
        var elems = $('.diy-bottom-recommend>.diy-bottom-recommend-elem');
        var inTpl = $('.diy-bottom-recommend:first').data('needtpl').toLowerCase() == $('#dataStore').data('tpl').toLowerCase();
        elems.each(function(i, e){
            var w = $(e).css('width');
            var r = parseInt(Math.random()*255);
            var g = parseInt(Math.random()*255);
            var b = parseInt(Math.random()*255);
            var a = Math.random();
            $(e).css({
                'height': w,
                'cursor': 'pointer',
                'background-color': 'rgba('+r+','+g+','+b+','+a+')'
            });
            if (inTpl) {
                var intvid = setInterval(function(){
                    $(e).css('background-image', 'url("' + imgs[i] + '")');
                    imgsLen == imgs.length && imgs[i] != undefined && clearInterval(intvid);
                }, 1000);//使用懒加载，来应对异步获取图片地址的现状；加载完成后，停止循环检测
            }
        });
    }
    
    getAvatars();
    bottomRender();
});

