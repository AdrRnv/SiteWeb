const arrow = document.querySelector('.arrow');

arrow.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })
})

document.addEventListener("scroll", (event) => {
    if (window.scrollY > 550) {
        arrow.style.display = "block";
    }else{
        arrow.style.display = "none";
    }
})

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("myForm");
    var submitButton = document.getElementById("submitButton");

    submitButton.disabled = true;

    form.addEventListener("input", function () {
        var nom = document.forms["myForm"]["nom"].value;
        var prenom = document.forms["myForm"]["prenom"].value;
        var email = document.forms["myForm"]["email"].value;
        var password = document.forms["myForm"]["password"].value;
        var codepostal = document.forms["myForm"]["codepostal"].value;
        var adresse = document.forms["myForm"]["adresse"].value;
        var ville = document.forms["myForm"]["ville"].value;
        var date = document.forms["myForm"]["date"].value;

        // Vérifiez également l'état des cases à cocher
        var sportChecked = document.getElementById("sport").checked;
        var musiqueChecked = document.getElementById("musique").checked;
        var cuisineChecked = document.getElementById("cuisine").checked;
        var serieChecked = document.getElementById("serie").checked;
        var autresChecked = document.getElementById("autres").checked;

        var genre = document.querySelector('input[name="genre"]:checked');

        var file = document.forms["myForm"]["file"].value;


        if (file !== "" && nom !== "" && prenom !== "" && email.includes("@") && password !== "" && codepostal !== "" && adresse !== "" && ville !== "" && date !== "" && genre !== null && (sportChecked || musiqueChecked || cuisineChecked || serieChecked || autresChecked)) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("my2Form");
    var submitButton = document.getElementById("submitButton");

    submitButton.disabled = true;

    form.addEventListener("input", function () {
        var msgnom = document.forms["my2Form"]["msgnom"].value;
        var msgemail = document.forms["my2Form"]["msgemail"].value;
        var msg = document.forms["my2Form"]["msg"].value;

        if (msgnom !== "" && msgemail !== "" && msg !== "") {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("my3Form");
    var submitButton = document.getElementById("submitButton");

    submitButton.disabled = true;

    form.addEventListener("input", function () {
        var msgnom = document.forms["my3Form"]["titre"].value;
        var msgemail = document.forms["my3Form"]["description"].value;
        var msg = document.forms["my3Form"]["contenu"].value;
        var fileArt = document.forms["my3Form"]["fileArt"].value;

        if (msgnom !== "" && msgemail !== "" && msg !== "" && fileArt != "") {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });
});