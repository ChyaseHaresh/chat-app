let sdate = document.querySelector(".sdate");
dates = sdate.textContent;
let stime = document.querySelector("#stime");
let edate = document.querySelector(".edate");
let etime = document.querySelector("#etime");

sdate.addEventListener("change", (e) => {
    e.preventDefault();
    dates = sdate.value;
    edate.setAttribute('min', dates)
    console.log(dates);
});
