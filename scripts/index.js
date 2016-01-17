/**
 * Created by taras on 08.12.15.
 */

$(function () {

    var lang = 'rus';
    var words = {
        rus: [
            ["Вы действительно хотите удалить?"],//0
            ["Это действие необратимо"],//1
            ["Удалено"],//2
            ["Элемент удален"],//3
            ["Отмена"],//4
            ["Действие отменено"],//5
            ["Да, удалить"],//6
            ["Нет, отмена"],//7
            ["Список всех товаров"],//8
            ["Здесь вы можете посмотреть все позиции"],//9
            ["Пагинация"],//10
            ["Вы можете задать количество строк, которое будет показываться на странице"],//11
            ["Поиск"],//12
            ["Вы можете искать нужную вам информацию, строки автоматически будут фильтрироваться"],//13
            ["Сортировка"],//14
            ["Вы можете сортировать информацию по нужному полю"],//15
            ["Страницы"],//16
            ["Вы можете переходить на нужную страницу"],//17
            ["Действия"],//18
            ["Синяя кнопка - переход на редактирование, красная - удаление"],//19
            ["Создание"],//20
            ["Для того, что бы создать новый элемент, нажмите эту кнопку"],//21
            ["назад"],//22
            ["дальше"],//23
            ["завершить"]//24

        ]
    };

    $("#loginForm").formAjax({
        url: '/admin/ajax/System.php',
        flag: 'login',
        damp: true,
        onsuccess: function (res) {
            var deb = JSON.parse(res);
            msg(deb[0].status, deb[0].sms);
            if (deb[0].status == 'success') {
                setTimeout(function () {
                    window.location.replace('/admin/home/');
                }, 2000);
            }
        }
    })

    $("[data-toggle=select2]").select2();

    /*** TODO ініціалізація таблиці ***/
    $("table[data-toggle=ajax]").each(function () {
        var table = $(this).attr('data-table');
        $(this).dataTable({
            "ajax": '/admin/ajax/Module.php?flag=json&table=' + table,
            "language": {
                "url": "/admin/api/" + lang + ".json"
            },
            stateSave: true
        });
    });

    /*** TODO видалення ***/
    $(document).on('click', '[data-toggle=delete]', function () {
        var id = $(this).attr('data-id'),
            table = $(this).attr('data-table'),
            th = $(this);
        swal({
                title: words.rus[0][0],
                text: words.rus[1][0],
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: words.rus[6][0],
                cancelButtonText: words.rus[7][0],
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: '/admin/ajax/Module.php',
                        type: 'post',
                        data: {flag: 'delete', table: table, id: id},
                        success: function () {
                            swal(words.rus[2][0], words.rus[3][0], "success");
                            th.parents('tr').remove();
                        }
                    })
                } else {
                    swal(words.rus[4][0], words.rus[5][0], "error");
                }
            });
    });

    /*** TODO додавання ***/
    $("#add").formAjax({
        url: '/admin/ajax/Module.php',
        flag: 'add',
        damp: false,
        table: true,
        reset: true,
        onsuccess: function (res) {
            var deb = JSON.parse(res);
            msg(deb[0].status, deb[0].sms);
        }
    })

    /*** TODO редагування ***/
    $("#edit").formAjax({
        url: '/admin/ajax/Module.php',
        flag: 'edit',
        damp: true,
        table: true,
        reset: false,
        onsuccess: function (res) {
            var deb = JSON.parse(res);
            msg(deb[0].status, deb[0].sms);
        }
    })

    /*** TODO допомога ***/
    // Instance the tour
    var tour = new Tour({
        backdrop: true,
        template: "<div class='popover tour'><div class='arrow'></div><h3 class='popover-title'></h3><div class='popover-content'></div><div class='popover-navigation'><button class='btn btn-default btn-xs' data-role='prev'>« "+words.rus[22]+"</button>&nbsp;<button class='btn btn-default btn-xs' data-role='next'>"+words.rus[23]+" »</button><button class='btn btn-default btn-xs pull-right' data-role='end'>"+words.rus[24]+"</button></div></nav></div>",
        onShown: function(tour) {

            // ISSUE    - https://github.com/sorich87/bootstrap-tour/issues/189
            // FIX      - https://github.com/sorich87/bootstrap-tour/issues/189#issuecomment-49007822

            // You have to write your used animated effect class
            // Standard animated class
            $('.animated').removeClass('fadeIn');
            // Animate class from animate-panel plugin
            $('.animated-panel').removeClass('zoomIn');

        },
        steps: [
            {
                element: ".tour-1",
                title: words.rus[8][0],
                content: words.rus[9][0],
                placement: "top"
            },
            {
                element: ".dataTables_length label",
                title: words.rus[10][0],
                content: words.rus[11][0],
                placement: "bottom"

            },
            {
                element: ".dataTables_filter label",
                title: words.rus[12][0],
                content: words.rus[13][0],
                placement: "left"

            },
            {
                element: ".sorting_asc",
                title: words.rus[14][0],
                content: words.rus[15][0],
                placement: "bottom"

            },
            {
                element: ".pagination",
                title: words.rus[16][0],
                content: words.rus[17][0],
                placement: "top"

            },
            {
                element: ".odd td:last",
                title: words.rus[18][0],
                content: words.rus[19][0],
                placement: "left"

            },
            {
                element: ".tour-final",
                title: words.rus[20][0],
                content: words.rus[21][0],
                placement: "bottom"

            }
        ]});

    // Initialize the tour
    tour.init();

    // Restart the tour
    $('.run-tour').click(function(){
        tour.restart();
    });
});

function msg(status, sms) {
    toastr.options = {
        "debug": false,
        "newestOnTop": false,
        "positionClass": "toast-top-right",
        "closeButton": true,
        "debug": false,
        "toastClass": "animated fadeInDown",
    };

    switch (status) {
        case 'info':
            toastr.info(sms);
            break;

        case 'success':
            toastr.success(sms);
            break;

        case 'warning':
            toastr.warning(sms);
            break;

        case 'error':
            toastr.error(sms);
            break;
    }
}

(function ($) {
    $.fn.formAjax = function (options) {
        options = $.extend({
            url: '/404.php',
            error: false,
            flag: 'default',
            table: false,
            reset: false,
            onsuccess: function (res) {
                console.log(res);
            }
        }, options);
        $(this).submit(function (e) {
            e.preventDefault();
            var er = 0;
            if (options.error !== false) {
                $(this).find('*[data-valid=true]').each(function () {
                    var patern = new RegExp($(this).attr('data-patern'));
                    var val = $.trim($(this).val());
                    var new_val = val.replace(/[^\d@.a-zA-Zа-яА-Я]/g, '');
                    if (new_val.search(patern) == -1) {
                        $(this).addClass(options.error);
                        $(".box-color-pl1").show();
                        er = er + 1;
                    }
                });
            }

            if (er > 0) {
                setTimeout(function () {
                    $(document).find('*[data-valid=true]').removeClass(options.error);
                    $(".box-color-pl1").hide();
                }, 2000);
            } else {
                var obj = $(this).serialize();
                var table=options.table===true?'&table='+$(this).attr('data-table'):'';
                var th=$(this);
                $.ajax({
                    type: 'post',
                    url: options.url,
                    data: obj + '&flag=' + options.flag + table,
                    success: function (res) {
                        if (options.damp == true) {
                            console.log(res);
                        }
                        options.onsuccess(res);
                        th[0].reset();
                    }
                })
            }

        });
        return this;
    };
})(jQuery);