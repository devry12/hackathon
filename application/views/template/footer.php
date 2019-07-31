
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" charset="utf-8"></script>
<script src="<?=base_url('assets/bootstrap/js/bootstrap.bundle.js')?>" charset="utf-8"></script>
<script src="<?=base_url('assets/smartedu/js/main.js')?>" charset="utf-8"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: ['interaction', 'dayGrid'],
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [{
        title: 'All Day Event',
        start: '2019-07-02'
      }, ]
    });

    calendar.render();
  });
</script>

</html>
