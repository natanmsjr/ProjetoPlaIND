        </div>
        <!-- footer -->
        <div class="copyright">
            <div class="container-fluid">
                <p>&copy; 2017 <a href="/">Pla<strong>IND</strong></a>. Todos os direitos reservados. <!-- Desenvolvido por <a href="#">@NatanMacedo</a> --> </p>
            </div>
        </div>
        <!-- /footer -->
        <!-- ================================================== --> 
        <!-- Placed at the end of the document so the pages load faster --> 
        <script src="/assets/js/publicJS/jquery.js"></script>
        <script src="/assets/js/publicJS/bootstrap.min.js"></script>
        <script src="/assets/js/restrictedJS/excanvas.min.js"></script> 
        <script src="/assets/js/restrictedJS/chart.min.js" type="text/javascript"></script> 
        <script language="javascript" type="text/javascript" src="/assets/js/restrictedJS/full-calendar/fullcalendar.min.js"></script>
        <script src="/assets/js/restrictedJS/base.js"></script> 
        <script>     
            var barChartData = {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40, 20]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100, 17]
				}
			]

        }

        var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);

            $(document).ready(function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var calendar = $('#calendar').fullCalendar({
              header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
              },
              selectable: true,
              selectHelper: true,
              select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                  calendar.fullCalendar('renderEvent',
                    {
                      title: title,
                      start: start,
                      end: end,
                      allDay: allDay
                    },
                    true // make the event "stick"
                  );
                }
                calendar.fullCalendar('unselect');
              },
              editable: true,
              events: [
                {
                  title: 'All Day Event',
                  start: new Date(y, m, 1)
                },
                {
                  title: 'Long Event',
                  start: new Date(y, m, d+5),
                  end: new Date(y, m, d+7)
                },
                {
                  id: 999,
                  title: 'Repeating Event',
                  start: new Date(y, m, d-3, 16, 0),
                  allDay: false
                },
                {
                  id: 999,
                  title: 'Repeating Event',
                  start: new Date(y, m, d+4, 16, 0),
                  allDay: false
                },
                {
                  title: 'Meeting',
                  start: new Date(y, m, d, 10, 30),
                  allDay: false
                },
                {
                  title: 'Lunch',
                  start: new Date(y, m, d, 12, 0),
                  end: new Date(y, m, d, 14, 0),
                  allDay: false
                },
                {
                  title: 'Birthday Party',
                  start: new Date(y, m, d+1, 19, 0),
                  end: new Date(y, m, d+1, 22, 30),
                  allDay: false
                },
                {
                  title: 'EGrappler.com',
                  start: new Date(y, m, 28),
                  end: new Date(y, m, 29),
                  url: 'http://EGrappler.com/'
                }
              ]
            });
          });
        </script><!-- /Calendar -->
    </body>
</html>