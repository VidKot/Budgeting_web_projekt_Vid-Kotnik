<!DOCTYPE html>
<html>
    <head>
        <title>Calander</title>
        <link rel="stylesheet" href="calander.css"> 
    </head>
    <body>
        <div class="side-buttons">
            <a href="register.php">Add account</a>
            <a href="main.php">Home</a>
            <a href="card.php">My card</a>
            <a href="calander.php">Calander</a>
            <a href="transaction.php">Transactions</a>
            <a href="contacts.php">Contacts</a>
        </div>
        <div class="calendar">
        </div>
        <script>
            const today = new Date();
            const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

            function formatDate(day) {
                return day < 10 ? `0${day}` : day;
            }

            const currentDayIndex = today.getDay();
            const currentDay = today.getDate();

            const prevDay1 = new Date(today);
            prevDay1.setDate(currentDay - 2);

            const prevDay2 = new Date(today);
            prevDay2.setDate(currentDay - 1);

            const nextDay1 = new Date(today);
            nextDay1.setDate(currentDay + 1);

            const nextDay2 = new Date(today);
            nextDay2.setDate(currentDay + 2);

            const calendarDiv = document.querySelector('.calendar');
            calendarDiv.innerHTML = `
                <div>
                <div class="day-name">${dayNames[prevDay1.getDay()]}</div>
                <div class="day-number">${prevDay1.getDate()}</div>
                </div>
                <div>
                <div class="day-name">${dayNames[prevDay2.getDay()]}</div>
                <div class="day-number">${prevDay2.getDate()}</div>
                </div>
                <div>
                <div class="day-name current-day">${dayNames[currentDayIndex]}</div>
                <div class="day-number selected">${currentDay}</div>
                </div>
                <div>
                <div class="day-name">${dayNames[nextDay1.getDay()]}</div>
                <div class="day-number">${nextDay1.getDate()}</div>
                </div>
                <div>
                <div class="day-name">${dayNames[nextDay2.getDay()]}</div>
                <div class="day-number">${nextDay2.getDate()}</div>
                </div>
            `;
        </script>
    </body>
</html>
