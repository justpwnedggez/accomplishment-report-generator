import { Calendar } from '@fullcalendar/core';
import interactionPlugin from '@fullcalendar/interaction';
import dayGridPlugin from '@fullcalendar/daygrid';

const calendarEl = document.getElementById('calendar');
const calendar = new Calendar(calendarEl, {
    plugins: [
        interactionPlugin,
        dayGridPlugin
    ],
    initialView: 'dayGridMonth',
  
    editable: true, // important for activating event interactions!
    selectable: true, // important for activating date selectability!
    events: [
        { title: 'Meeting', start: new Date() }
    ],  
    // Define the dateClick event handler
    dateClick: function(info) {
      console.log(info)
    }
});

// Render the calendar

// Define the goToDate function in the global scope
window.goToDate = function() {
  // Get the value of the date input
  const selectedDate = document.getElementById('date').value;
  
  // Navigate the calendar to the selected date
  calendar.gotoDate(selectedDate);
};

calendar.render();