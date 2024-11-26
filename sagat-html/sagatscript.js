document.addEventListener("DOMContentLoaded", function () {
    const openCalendarBtn = document.getElementById("open-calendar");
    const calendar = document.getElementById("calendar");
    const monthYearDisplay = document.getElementById("month-year");
    const daysContainer = document.getElementById("days");
    const prevMonthBtn = document.getElementById("prev-month");
    const nextMonthBtn = document.getElementById("next-month");

    let currentDate = new Date();

    function updateCalendar() {
        const month = currentDate.getMonth();
        const year = currentDate.getFullYear();

        monthYearDisplay.textContent = `${new Intl.DateTimeFormat("en-US", { month: "long" }).format(new Date(year, month))} - ${year}`;

        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const lastDateOfMonth = new Date(year, month + 1, 0).getDate();

        daysContainer.innerHTML = "";

        for (let i = 0; i < firstDayOfMonth; i++) {
            const emptyCell = document.createElement("span");
            daysContainer.appendChild(emptyCell);
        }

        for (let date = 1; date <= lastDateOfMonth; date++) {
            const dayCell = document.createElement("span");
            dayCell.textContent = date;
            dayCell.addEventListener("click", function () {
                document.querySelectorAll(".days span").forEach(day => day.classList.remove("selected"));
                dayCell.classList.add("selected");
                calendar.classList.add("hidden");
                openCalendarBtn.textContent = `Таңдалған күн: ${date}/${month + 1}/${year}`;
            });
            daysContainer.appendChild(dayCell);
        }
    }

    openCalendarBtn.addEventListener("click", function () {
        calendar.classList.toggle("hidden");
    });

    prevMonthBtn.addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateCalendar();
    });

    nextMonthBtn.addEventListener("click", function () {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateCalendar();
    });

    updateCalendar();
});
