
let htmlLevelsComplete = [false, false, false, false, false];
let cssLevelsComplete = [false, false, false, false, false];
let mobileNav = false;
const mobileNavigation = document.getElementById("mobileNavigation")

const headerOut = document.getElementById('headerOutput');
const paraOut = document.getElementById('paraOutput');




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
        window.location.href="lessons/HTMLLvl1.html"

}
function openBeginner2(){
        document.getElementById("beginButton2").disabled = false;
        document.getElementById("beginButton2-mobile").disabled = false;
        document.getElementById("beginButton3").disabled = false;
        document.getElementById("beginButton3-mobile").disabled = false;
        window.location.href = "lessons/CSSLvl1.html"
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
        document.getElementById("managePostForm").style.display = "none";

}

function openManageForm() {
        document.getElementById("managePostForm").style.display = "block";
        document.getElementById("createPostForm").style.display = "none";
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
                document.getElementById("edit-username").hidden = true;
                document.getElementById("edit-post").hidden = false;

        }
        else{
                document.getElementById("edit-post").hidden = true;
                document.getElementById("edit-username").hidden = false;
        }
}

function progressBar() {
        var i = 0;

        if (i == 0) {
                i = 1;
                var elem = document.getElementById("overviewBar");
                var width = 1;
                var id = setInterval(frame, 10);

                function frame() {
                        if (width >= 100) {
                                clearInterval(id);
                                i = 0;
                        } else {
                                width++;
                                elem.style.width = width + "%";
                        }
                }
        }
}

function markLevelComplete(level, levelType){

        if (levelType.toLowerCase() === 'html') {
                htmlLevelsComplete[level - 1] = true;
        } else if (levelType.toLowerCase() === 'css'){
                cssLevelsComplete[level - 1] = true;
        }

}

function levelProgress(levelType){
        if (levelType.toLowerCase() === 'html') {
                return htmlProgress();
        } else if (levelType.toLowerCase() === 'css'){
                return cssProgress();
        }

}


function htmlProgress(){

        i = 0;

        for (const complete of htmlLevelsComplete){
                if (complete){
                        i = i + 20;
                }
        }

}

function cssProgress(){

        i = 0;

        for (const complete of cssLevelsComplete){
                if (complete){
                        i = i + 20;
                }
        }

}
function setImageDimensions(){

        if (document.getElementById('codingSpaceHeight').value){
                document.getElementById('cssLessonImage').height = document.getElementById('codingSpaceHeight').value;
        }

        if (document.getElementById('codingSpaceWidth').value) {
                document.getElementById('cssLessonImage').width = document.getElementById('codingSpaceWidth').value;
        }
}

function setHtmlPracticePageValues(){

        if (document.getElementById('htmlHeader').value){
                headerOut.innerHTML = document.getElementById('htmlHeader').value;

        }

        if (document.getElementById('htmlParagraph').value) {
                paraOut.innerHTML = document.getElementById('htmlParagraph').value;
        }
}

function startRegQuiz(){
        window.location.href = "post-registration.html"
}


