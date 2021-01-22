const date = new Date();

const renderCalendar = () => {
    const monthDays = document.querySelector('.days')
    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate(); //last day of current month;
    const firstDayIndex = date.getDay();
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate(); //Last day of previous month;
    const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();
    const nextDays = 7 - lastDayIndex - 1;
    const months = [
        "january",
        "february",
        "march",
        "april",
        "may",
        "june",
        "july",
        "august",
        "september",
        "oktober",
        "november",
        "december"
    ];
    document.querySelector('.date p').innerHTML = months[date.getMonth()];
    document.querySelector('.month p').innerHTML = date.toDateString();

    let days = "";

<<<<<<< Updated upstream
    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay-x +1}</div>`;
=======
    let today = new Date();

    const month = today.getMonth();
    const year = today.getFullYear();

    let firstDay = (((new Date(year, month)).getDay() - 1) + 7) % 7;
    let daysInMonth = 32 - new Date(year, month, 32).getDate();

    /* let tbl = document.getElementById("calendar-body");

    tbl.innerHTML = "";

    monthAndYear.innerHTML = months[month] + " " + year;
    selectYear.value = year;
    selectMonth.value = month;

*/
    /*let date = 1;
    for (let i = 0; i < 6; i++) {
        let row = document.createElement("tr");

        for (let j = 0; j < 7; j++) {
            if (i === 0 && j < firstDay) {
                let cell = document.createElement("td");
                let cellText = document.createTextNode("");
                cell.appendChild(cellText);
                cell.classList.add("prev-date");
                row.appendChild(cell);
            } else if (date > daysInMonth) {
                break;
            } else {
                let cell = document.createElement("td");
                let cellDate = document.createElement("span");
                cellDate.classList.add("date");
                let cellText = document.createTextNode(date);
                if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    cell.classList.add("today");
                }

                cellDate.appendChild(cellText);
                cell.appendChild(cellDate);

                row.appendChild(cell);
                date++;
            }


        }

        tbl.appendChild(row);
    }*/

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<p class="prev-date">${prevLastDay-x +1}</p>`;
>>>>>>> Stashed changes
    }
    //Dates from previous month to fill up the square
    for (let i = 1; i <= lastDay; i++) {
        if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
<<<<<<< Updated upstream
            days += `<div class="today">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;
=======
            days += `<p class="today">${i}</p>`;
        } else {
            days += `<p class="day">${i}</p>`;
>>>>>>> Stashed changes

        }
        monthDays.innerHTML = days;
    }

    for (let y = 1; y <= nextDays - 2; y++) {
<<<<<<< Updated upstream
        days += `<div class="next-date">${y}</div>`
=======
        days += `<p class="next-date">${y}</p>`
>>>>>>> Stashed changes
        monthDays.innerHTML = days;
    }
}



document.querySelector('p.prev').addEventListener('click', () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
})

document.querySelector('p.next').addEventListener('click', () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
})
renderCalendar();