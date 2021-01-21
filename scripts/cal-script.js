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

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay-x +1}</div>`;
    }
    //Dates from previous month to fill up the square

    for (let i = 1; i <= lastDay; i++) {
        if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
            days += `<div class="today">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;

        }
        monthDays.innerHTML = days;
    }

    for (let y = 1; y <= nextDays - 2; y++) {
        days += `<div class="next-date">${y}</div>`
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