/**
 * Created by TinSky on 2017/6/29.
 */
$(document).ready(function () {
    $.ajax({
        url: "/BloodDistribution/public/checkData",
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data)
            renderTableData(data.data)
        },
        error: function (err) {
            console.err(err)
        }
    })

    function renderTableData (data) {
        console.log(data)
        $(data).each(function (idx, dataItem) {
            console.log(dataItem)
            var htmlTemp = "<tr>" +
                "<td><input type='checkbox'></td>" +
                "<td>" + dataItem.id + "</td>" +
                "<td>" + dataItem.title + "</td>" +
                "<td>" + dataItem.type + "</td>" +
                "<td>" + dataItem.username + "</td>" +
                "<td>" + dataItem.created_at + "</td>" +
                "</tr>";
            $('#showTable').append(htmlTemp)
        })
    }

    function renderPage(data) {
        console.log(data)
        var htmlTemp = '<span class="btn page-item"><a href首页</span>' +
            '<span class="btn page-item">上一页</span>' +
            '<span class="btn page-item">1</span>' +
            '<span class="btn page-item">2</span>' +
            '<span class="btn page-item">下一页</span>' +
            '<span class="btn page-item">尾页</span>';

        $('#pageCon').append(htmlTemp)
    }
})