
define(["jquery", "easy-admin"], function ($, ea) {

    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.pro_click_show/index?id=' + getUrlParam('id') + '&date=' + getUrlParam('date'),
  
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                cols: [[
                    {type: "checkbox"},
                    {field: 'id', width: 80, title: 'ID',search: false},
                    // {field: 'weizhi', minWidth: 150, title: '排序(越小越靠前)'},
                    {field: 'name', Width: 80, title: '产品名称',search: false},
                    {field: 'img', Width: 80, title: '产品图片', search: false, templet: ea.table.image},
                    {field: 'url_type', minWidth: 0, title: '类型',search: false,delete:true},
                    {field: 'date', minWidth: 0, title: '查询时间',search: false,delete:true},
                    // {field: 'channelCode', minWidth: 0, title: '推广渠道',search:'select',selectList:{'name':'/gladmin/mall.data/getchannelCode1'},dong:true},
                    {field: 'clicks', Width: 80, title: '点击次数', search: false,sort:true},
                    // {field: 'cost', Width: 80, title: '点击收益', search: false},
                    // {field: 'income', Width: 80, title: '产品收益',edit:'int', search: false,sort:true},		
                ]],
            });

            ea.listen();
        },
        // add: function () {
        //     ea.listen();
        // },
        // edit: function () {
        //     ea.listen();
        // },
    };
    return Controller;
});
function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r != null) return unescape(r[2]); return null; //返回参数值
}