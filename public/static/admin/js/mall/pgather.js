define(["jquery", "easy-admin"], function ($, ea) {

    var table = layui.table,
        treetable = layui.treetable,
        iconPickerFa = layui.iconPickerFa,
        autocomplete = layui.autocomplete;
		
    var init = {
        table_elem: '#currentTable',
        table_render_id: 'currentTableRenderId',
        index_url: 'mall.pgather/index',
        modify_url: 'mall.pgather/modify',
        show_url: 'mall.proshow/index',
    };

    var Controller = {

        index: function () {
            ea.table.render({
                init: init,
                toolbar: ['refresh'],
                totalRow: true,
                cols: [[
                    {field: 'id', width: 80, title: 'ID',totalRowText: '总计:', fixed:'left'},
                    {field: 'cate_title', minWidth: 120, title: '类别',search:'select',selectList:{'name':'/gladmin/mall.category/getpcate'},fieldAlias:'cid',dong:true, sort: true},
                    {field: 'type_title', minWidth: 110, title: '分类',search:'select',selectList:{'name':'/gladmin/mall.type/getptype'},fieldAlias:'pid',dong:true, sort: true},
                    {field: 'name', minWidth: 100, title: '外显名称',sort:true},
                    {field: 'k_name', minWidth: 100, title: '客户名称',sort:true},
                    {field: 'androidurl', minWidth: 200, title: '推广链接',sort:true},
                    {field: 'date', minWidth: 0, title: '查询时间',hide:true,search: 'range',delete:true},
                    {field: 'channelCode', minWidth: 0, title: '推广渠道',hide:true,search:'select',selectList:{'name':'/gladmin/mall.data/getchannelCode1'},dong:true},
                    // {field: 'shows', Width: 80, title: '展示次数', search: false,sort:true},
                    {field: 'clicks', Width: 80, title: '点击次数', search: false,sort:true},
                   
                    // {field: 'downfinish', Width: 80, title: '下载次数', search: false,sort:true},
                    // {field: 'ratio1', Width: 80, title: '点击/展示', search: false,sort:true,templet:function(d) {return d.ratio1 + '%'}},
                    // {field: 'ratio', Width: 80, title: '下载/点击', search: false,sort:true,templet:function(d) {return d.ratio + '%'}},
                    {
                        minWidth: 80,
                        title: '操作',
                        templet: ea.table.tool,
                        operat: [
                            [{
                                text: '查看',
                                url: init.show_url+"?filter="+getUrlParam('filter'),
                                method: 'open',
                                auth: 'show',
                                class: 'layui-btn layui-btn-normal layui-btn-xs',
                                extend: 'data-full="true"',
                            }],
                        ]
                    }
                ]],
            });
            ea.listen();
        },
        all: function () {
            var init = {
                table_elem: '#currentTable',
                table_render_id: 'currentTableRenderId',
                index_url: 'mall.pgather/all',
            };
            ea.table.render({
                init: init,
                toolbar: ['refresh'],
                totalRow: true,
                cols: [[

                    {field: 'cate_title', minWidth: 120, title: '类别',search:'select',selectList:{'name':'/gladmin/mall.category/getpcate'},fieldAlias:'cid',dong:true, sort: true},
                    {field: 'k_name', minWidth: 100, title: '客户名称',sort:true},
                    {field: 'date', minWidth: 0, title: '查询时间',hide:true,search: 'range',delete:true},
                    {field: 'channelCode', minWidth: 0, title: '推广渠道',hide:true,search:'select',selectList:{'name':'/gladmin/mall.data/getchannelCode1'},dong:true},
                    // {field: 'shows', Width: 80, title: '展示次数', search: false,sort:true},
                    {field: 'clicks', Width: 80, title: '点击次数', search: false,sort:true},
               
                    // {field: 'downfinish', Width: 80, title: '下载次数', search: false,sort:true},
                    // {field: 'ratio1', Width: 80, title: '点击/展示', search: false,sort:true,templet:function(d) {return d.ratio1 + '%'}},
                    // {field: 'ratio', Width: 80, title: '下载/点击', search: false,sort:true,templet:function(d) {return d.ratio + '%'}},
                    {
                        minWidth: 80,
                        title: '操作',
                        templet: ea.table.tool,
                        operat: [
                            [{
                                text: '查看2',
                                url: init.show_url,
                                field: 'id,date',
                                method: 'open',
                                auth: 'show',
                                class: 'layui-btn layui-btn-normal layui-btn-xs',
                                extend: 'data-full="true"',
                            }],
                        ]
                    }
                ]],
            });
            ea.listen();
        },
    };
    return Controller;
});
function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r != null) return unescape(r[2]); return null; //返回参数值
}