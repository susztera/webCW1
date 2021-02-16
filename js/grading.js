function grading() {
    let i;
    let res = 0;
    for (i = 0; i < document.getElementById('formy').elements.length - 1; i++) {
        if (document.getElementById('formy').elements[i].value !== "") {
            res += Number(document.getElementById('formy').elements[i].value);
        }
    }
    document.getElementById("result").innerHTML = res / i + "% \n" + grade(res / i);
    document.getElementById("result").style.display = "block";
}

function grade(percent) {
    if (percent >= 70) {
        return "That means your grade is first class. Good job!";
    } else if (percent >= 60) {
        return "That means your grade is 2:1. This is the second best grade you can earn, so you should still feel good about it.";
    } else if (percent >= 50) {
        return "That means your grade is 2:2. This is the third best result you can earn.";
    } else if (percent >= 40) {
        return "That means your grade is third class.";
    } else {
        return "Sorry, you did not pass.";
    }
}