jQuery(document).ready(function(){
    var is_transition_enabled = false;
    if (window.Modernizr && window.Modernizr.csstransitions) {
        is_transition_enabled = true;
    }
    
    // 瀑布流布局
    jQuery("#post-wrapper").SimpleFliud({
        // 数值设置
        panel_width: 445,      // 面板宽度，单位为像素，默认为第一个选择器元素的宽度(默认为选择结果第一个元素的宽度)
        margin_row: 15,
        margin_col: 15,
        duration: 500, // 动画过度时间
        
        // 选择器设置
        panel: ">div.post_fliud_panel",            // 内部面板选择器(默认为div)
        wrapper: "#content",     // 包装器选择器，默认为容器选择器

        // 其他设置
        auto_width: true,         // 自动调整宽度使之填满整个panel(默认为false)
        action_type: is_transition_enabled? "immediately": "animation"  // 变换类型,当浏览器支持CSS3时,使用CSS3动画
    });

    // Menu
    jQuery("#widget-area-toggle-btn").click(function(){
        jQuery(".widget-area").slideToggle();
    });
    jQuery(".widget-area").hide();
    
    if (is_transition_enabled) {
        jQuery("#post-wrapper").css({"transition": "all .5s ease-in-out"})
        jQuery("#post-wrapper>div.post_fliud_panel").css({"transition": "all .5s ease-in-out"})
    }
});
