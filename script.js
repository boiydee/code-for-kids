// Function for displaying navbar when menu icon is clicked

let mobileNav = false;
const mobileNavigation = document.getElementById("mobileNavigation")

window.onload = () => {
        document.getElementById("mobileNavIcon").addEventListener("click", () => {
               if (mobileNav==true){
                   mobileNavigation.style.display="none";
               } else
               {
                   mobileNavigation.style.display="flex";
               }
               mobileNav = !mobileNav;
               console.log(mobileNav)
        });
}

// Functions for opening certain pages when button is clicked
// Once button has been clicked, the next button will be enabled
function openBeginner1(){
        document.getElementById("beginButton2").disabled = false;
        document.getElementById("beginButton2-mobile").disabled = false;
}
function openBeginner2(){
        document.getElementById("beginButton2").disabled = false;
        document.getElementById("beginButton2-mobile").disabled = false;
        document.getElementById("beginButton3").disabled = false;
        document.getElementById("beginButton3-mobile").disabled = false;
}
function openBeginner3(){
        document.getElementById("beginButton2").disabled = false;
        document.getElementById("beginButton2-mobile").disabled = false;
        document.getElementById("beginButton3").disabled = false;
        document.getElementById("beginButton3-mobile").disabled = false;
        document.getElementById("beginButton4").disabled = false;
        document.getElementById("beginButton4-mobile").disabled = false;
}
function openBeginner4(){
        document.getElementById("beginButton2").disabled = false;
        document.getElementById("beginButton2-mobile").disabled = false;
        document.getElementById("beginButton3").disabled = false;
        document.getElementById("beginButton3-mobile").disabled = false;
        document.getElementById("beginButton4").disabled = false;
        document.getElementById("beginButton4-mobile").disabled = false;
        document.getElementById("beginBossButton").disabled = false;
        document.getElementById("beginBossButton-mobile").disabled = false;
}

function openBeginnerBoss(){
        document.getElementById("beginButton2").disabled = false;
        document.getElementById("beginButton2-mobile").disabled = false;
        document.getElementById("beginButton3").disabled = false;
        document.getElementById("beginButton3-mobile").disabled = false;
        document.getElementById("beginButton4").disabled = false;
        document.getElementById("beginButton4-mobile").disabled = false;
        document.getElementById("beginBossButton").disabled = false;
        document.getElementById("beginBossButton-mobile").disabled = false;
}
function openIntermediate1(){
        document.getElementById("intButton2").disabled = false;
        document.getElementById("intButton2-mobile").disabled = false;
}

function openIntermediate2(){
        document.getElementById("intButton2").disabled = false;
        document.getElementById("intButton2-mobile").disabled = false;
        document.getElementById("intButton3").disabled = false;
        document.getElementById("intButton3-mobile").disabled = false;
}
function openIntermediate3(){
        document.getElementById("intButton2").disabled = false;
        document.getElementById("intButton2-mobile").disabled = false;
        document.getElementById("intButton3").disabled = false;
        document.getElementById("intButton3-mobile").disabled = false;
        document.getElementById("intButton4").disabled = false;
        document.getElementById("intButton4-mobile").disabled = false;
}
function openIntermediate4(){
        document.getElementById("intButton2").disabled = false;
        document.getElementById("intButton2-mobile").disabled = false;
        document.getElementById("intButton3").disabled = false;
        document.getElementById("intButton3-mobile").disabled = false;
        document.getElementById("intButton4").disabled = false;
        document.getElementById("intButton4-mobile").disabled = false;
        document.getElementById("intBossButton").disabled = false;
        document.getElementById("intBossButton-mobile").disabled = false;
}

function openIntermediateBoss(){
        document.getElementById("intButton2").disabled = false;
        document.getElementById("intButton2-mobile").disabled = false;
        document.getElementById("intButton3").disabled = false;
        document.getElementById("intButton3-mobile").disabled = false;
        document.getElementById("intButton4").disabled = false;
        document.getElementById("intButton4-mobile").disabled = false;
        document.getElementById("intBossButton").disabled = false;
        document.getElementById("intBossButton-mobile").disabled = false;
}
function openHard1(){
        document.getElementById("hardButton2").disabled = false;
        document.getElementById("hardButton2-mobile").disabled = false;
}

function openHard2(){
        document.getElementById("hardButton2").disabled = false;
        document.getElementById("hardButton2-mobile").disabled = false;
        document.getElementById("hardButton3").disabled = false;
        document.getElementById("hardButton3-mobile").disabled = false;
}
function openHard3(){
        document.getElementById("hardButton2").disabled = false;
        document.getElementById("hardButton2-mobile").disabled = false;
        document.getElementById("hardButton3").disabled = false;
        document.getElementById("hardButton3-mobile").disabled = false;
        document.getElementById("hardButton4").disabled = false;
        document.getElementById("hardButton4-mobile").disabled = false;
}
function openHard4(){
        document.getElementById("hardButton2").disabled = false;
        document.getElementById("hardButton2-mobile").disabled = false;
        document.getElementById("hardButton3").disabled = false;
        document.getElementById("hardButton3-mobile").disabled = false;
        document.getElementById("hardButton4").disabled = false;
        document.getElementById("hardButton4-mobile").disabled = false;
        document.getElementById("hardBossButton").disabled = false;
        document.getElementById("hardBossButton-mobile").disabled = false;
}
function openHardBoss(){
        document.getElementById("hardButton2").disabled = false;
        document.getElementById("hardButton2-mobile").disabled = false;
        document.getElementById("hardButton3").disabled = false;
        document.getElementById("hardButton3-mobile").disabled = false;
        document.getElementById("hardButton4").disabled = false;
        document.getElementById("hardButton4-mobile").disabled = false;
        document.getElementById("hardBossButton").disabled = false;
        document.getElementById("hardBossButton-mobile").disabled = false;
}


// Functions for opening forms when button is clicked in admin.html
function openCreateForm() {
        document.getElementById("createPostForm").style.display = "block";

}

function openManageForm() {
        document.getElementById("managePostForm").style.display = "block";
}

// Functions for displaying alerts to user after clicking submit button admin.html forms
function createPost(){
        alert("Post has been created!")
        window.location.reload();
}

function performAction(){
        alert("Changes have been made!")
        window.location.reload();
}

// Functions for displaying relevant options depending on option selected in drop down menu
function checkAction(){
        var value = document.getElementById("actions").value;
        if(value == "editAction") {
                document.getElementById("edit-attribute").hidden = false;
        }
        else{
                document.getElementById("edit-attribute").hidden = true;
        }
}

function checkValue(){
        var value = document.getElementById("table-values").value;
        if(value == "postName") {
                document.getElementById("edit-post").hidden = false;
                document.getElementById("edit-username").hidden = true;
        }
        else{
                document.getElementById("edit-post").hidden = true;
                document.getElementById("edit-username").hidden = false;
        }
}