jQuery(document).ready(function(){
    // 瀑布流布局
    $("#post-wrapper").SimpleFliud({
        // 数值设置
        panel_width: 220,      // 面板宽度，单位为像素，默认为第一个选择器元素的宽度(默认为选择结果第一个元素的宽度)

        // 选择器设置
        panel: ">div.post",            // 内部面板选择器(默认为div)
        wrapper: "#content",     // 包装器选择器，默认为容器选择器

        // 其他设置
        auto_width: true,         // 自动调整宽度使之填满整个panel(默认为false)
        action_type: "animation"  // 变换类型,此处设为动画渐变（默认为immediately）
    });
});
