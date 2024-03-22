(function (win, doc) {
    'use strict';

    //Exibir o calendário
    function getCalendar(perfil, div) {
        let calendarEl = doc.querySelector(div);
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            headerToolbar: {
                start: 'prev,next,today',
                center: 'title',
                end: 'dayGridMonth, timeGridWeek, timeGridDay'
            },
            buttonText: {
                today: 'hoje',
                month: 'mês',
                week: 'semana',
                day: 'dia',
                list: 'lista'
            },
            locale: 'pt-br',
            dateClick: function (info) {
                if (perfil == 'manager') {
                    calendar.changeView('timeGrid', info.dateStr);
                } else {
                    if (info.view.type == 'dayGridMonth') {
                        calendar.changeView('timeGrid', info.dateStr);
                    } else {
                        win.location.href = `/agenda/views/user/add.php?date=${info.dateStr}`;
                    }
                }

            },
            events: 'http://localhost/agenda/controllers/ControllerEvents.php',
            eventClick: function (info) {
                if (perfil == 'manager') {
                    win.location.href = `/agenda/views/manager/editar.php?id=${info.event.id}`;
                }

            }
            // selectable: true,
            // select: async (arg) => {
            //     // console.log(arg);
            //     let title = prompt("Nome do Evento");
            //     // console.log(title);

            //     if (title) {
            //         let response = await fetch('http://localhost/agenda/controllers/ControllerSelectable.php', {
            //             method: 'post',
            //             headers: {
            //                 'Content-Type': 'application/json',
            //                 'Accept': 'application/json'
            //             },
            //             body: JSON.stringify({
            //                 title: title,
            //                 start: arg.start,
            //                 end: arg.end
            //             })
            //         });

            //         if(response.status==200){
            //             window.location.href="http://localhost/agenda/views/manager";
            //         }
            //     }
            // }
        });

        calendar.render();
    }

    if (doc.querySelector('.calendarUser')) {
        getCalendar('user', '.calendarUser');
    } else if (doc.querySelector('.calendarManager')) {
        getCalendar('manager', '.calendarManager');
    }

    if (doc.querySelector('#delete')) {
        let btn = doc.querySelector('#delete');

        btn.addEventListener('click', (event) => {
            event.preventDefault();

            if (confirm("Deseja mesmo apagar esse dado?")) {
                win.location.href = event.target.parentNode.href;
            }
        }, false);
    }



})(window, document);