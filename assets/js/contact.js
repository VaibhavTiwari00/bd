let sub1 = document.querySelector("#subject-1")
let sub2 = document.querySelector("#subject-2")
let sub3 = document.querySelector("#subject-3")

let user_subject = "";



sub1.addEventListener("click", function (e) {
    remove_active_sub()
    user_subject = "products"
    this.classList.add("active")
})

sub2.addEventListener("click", function (e) {
    remove_active_sub()
    user_subject = "job inquiries";
    this.classList.add("active")
})

sub3.addEventListener("click", function (e) {
    remove_active_sub()
    user_subject = "other";
    this.classList.add("active")
})

function remove_active_sub() {
    sub1.classList.remove("active")
    sub2.classList.remove("active")
    sub3.classList.remove("active")
}