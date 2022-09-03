let a = document.querySelector("#dd");
a.addEventListener("click", (e) => {
    e.preventDefault();
    console.log("you clicked me");
    location.href = "/admin/dashboard/change_status";
});
