jQuery(function(){
        // Get list of upcoming iCal events formatted in JSON

        var event_url = "https://www.google.com/calendar/feeds/tommy.t.lee%40gmail.com/public/full";
        event_url = event_url + "?orderby=starttime&sortorder=ascending&futureevents=true&alt=json";
        jQuery.getJSON(event_url, function(data){
            // Utility method to pad a string on the left
            // Source: http://sajjadhossain.com/2008/10/31/javascript-string-trimming-and-padding/
            function lpad(str, pad_string, length) {
              var str = new String(str);
              while (str.length < length)
                str = pad_string + str;
              return str;
            };
            // Parse and render each event
            jQuery.each(data.feed.entry, function(i, item){
              if(i == 0) {
                jQuery("#next-gigs li").first().hide();
              };
              var event_url = jQuery.trim(item.content.$t);
              var event_header = item.title.$t;
              if(event_url.length > 0) {
                event_header = "<a href='" + event_url + "'>" + event_header + "</a>";
              };
                // Format the date string
                var d = new Date(item.gd$when[0].startTime);
                var d_string = '<strong>' + d.getFullYear() + '-' + lpad((d.getMonth() + 1),'0',2) + '-' + lpad((d.getDate()),'0',2) + '</strong>';
                if(d.getHours() != 0 || d.getMinutes() != 0) {
                  d_string = d_string + ' at ' + lpad(d.getHours(), '0', 2) + ':' + lpad(d.getMinutes(), '0', 2);
                };
                // Render the event
                jQuery("#next-gigs li").last().before(
                  "<li><strong>"
                  + event_header
                  + "</strong><br/>Date: "
                  + d_string
                  + "<br/>Location: <a href='http://maps.google.com/maps?q="
                  + item.gd$where[0].valueString
                  + "' target='_blank'>"
                  + item.gd$where[0].valueString
                  + "</a>"
                  + "<br />Description:"
                  + event_url
                  + "</li>"
                  );
              });
});
});