function analyzeText() {

    // Step 1: Take input
    var text = document.getElementById("textInput").value;

    // Step 2: Check empty input
    if (text.trim() == "") {
        document.getElementById("result").innerHTML = "Please enter text";
        return;
    }

    // Step 3: Count characters
    var charCount = text.length;

    // Step 4: Count words (handle multiple spaces)
    var words = text.trim().split(" ");
    var wordCount = 0;

    for (var i = 0; i < words.length; i++) {
        if (words[i] != "") {
            wordCount++;
        }
    }

    // Step 5: Reverse text
    var reverse = "";

    for (var i = text.length - 1; i >= 0; i--) {
        reverse = reverse + text[i];
    }

    // Step 6: Display result
    document.getElementById("result").innerHTML =
        "Characters: " + charCount + "<br>" +
        "Words: " + wordCount + "<br>" +
        "Reversed Text: " + reverse;
}