var calendarParam = {
        "calendarUrl": 'https://www.googleapis.com/calendar/v3/calendars/communication.cdpvn@gmail.com/events?key=AIzaSyCTgoNmDsC14zAmLQnuSj15MqTxzKYxYlY',
        "past": false,
        "upcoming": true,
        "pastTopN": 0,
        "upcomingTopN": 1,
        "itemsTagName": 'div',
        "upcomingSelector": '#events-upcoming',
        "pastSelector": '#events-past',
        "upcomingHeading": '',
        "pastHeading": '',
        "format": ['Prochain rendez-vous : ', '*summary*', ' le ', '*date*']
	};

formatGoogleCalendar.init(calendarParam);