$(document).ready(function() {
    $('#calendar').fullCalendar({
        events: 'https://www.google.com/calendar/feeds/tommy.t.lee%40gmail.com/public/basic',
        currentTimezone: 'America/New_York'
    });
});
