
var startButton = document.getElementById('closeModal'); //przypisanie zmiennej jako przycisk zamkniecia modala/uruchomienia grry
var infoModal = document.getElementById('myModal'); //pyrzpisanie zmiennej jako okno modal
console.log(startButton);
startButton.onclick = function () { //funkcja wywolana po wcisnieciu przycisku start, uruchomienie quizu i zamkniecie modala
    quizStart();
    $('#myModal').modal('hide');

}
var questions = [{ //wygenerowanie listy pytan, mozliwych odpowiedzi oraz tej jednej poprawnej
    question: "1. Jaka jest obecnie najnowsza stabilna wersja języka C#?",
    choices: ["7.3", "11.2", "2.1", "4.4.1"],
    correctAnswer: 0
}, {
    question: "2. Kto jest twórcą języka C#?",
    choices: ["James Gosling", "Bjarne Stroustrup", "Adrian Duda", "Anders Hejlsbergr"],
    correctAnswer: 3
}, {
    question: "3. W którym roku pojawił się C#?",
    choices: ["1997", "2000", "2002", "2004"],
    correctAnswer: 1
}, {
    question: "4. W jaki dzie tygodnia odbywa się kurs C# KN Kredek?",
    choices: ["Środa", "Czwartek", "Piątek", "Niedziela"],
    correctAnswer: 0
}, {
    question: "5. Który z założeń nie pasuje do programowania obiektowego?",
    choices: ["Polimorfizm", "Hermetyzacja", "Optymalizacja", "Dziedziczenie"],
    correctAnswer: 2
}];


var question = 0; //zmienna przechowujaca nr pytania
var currentAnswer = 0;
var points = 0;
var theEnd = false;
var iSelectedAnswer = [];
var c = 60;
var t;

function quizStart() { //funkcja startowania quizu
    var nextBtn = document.getElementById('nxtButton'); //pobranie przycisku nastepnego pytania i przypisanie go do zmiennej 
    var msg = document.getElementById('quizMessage'); //pobranie bloku komunikatu i przypisanie go do zmiennej
    displayquestion(); //wywolanie funckji pokazujacej pytanie
    msg.style.visibility = "hidden"; //ukrycie komunikatu
    timedCount(); //uruchomienie timeta

    nextBtn.onclick = function () { //funkcja wywolujaca sie po kliknieciu nastepne opytanie
        if (!theEnd) { //jezeli quiz nie zakonczony
            var val = $("input[type='radio']:checked").val(); //pobranie wartosci odpowiedzi
            if (val == undefined) { //jesli brak
                msg.innerHTML = "Musisz wybrać jedną z odpowiedzi"; //wyswietlamy komunikat z prosba o wybranie
                msg.style.visibility = "visible";
            }
            else { //jezeli cos wybrano
                msg.style.visibility = "hidden"; //ukrywamy komunikat
                if (val == questions[question].correctAnswer) { //sprawdzamy czy odp dobra
                    points++; //jesli tak to dodajemy punkt
                } 
                iSelectedAnswer[question] = val; 
                question++;
                if (question < questions.length) { //przechodzimy do pytania dalej
                    displayquestion();
                }
                else {
                    quizEnd(); //jezeli pytania sie skonczyly to wywolujemy funkcje konca quizu
                }
            }
        }

    }

    function quizEnd() { //funkcja konca quizu
        document.getElementById('qna').style.display = "none";//chowamy blok pytan i dop
        document.getElementById('nxtStep').style.visibility = "visible"; //pokazujemy przycisk nastepengo kroku rekrutacji
        $('#iTimeShow').html('Koniec quizu!'); //zamiast czasu pokazujemy komunikat koniec quizu
        $('#timer').html("Zdobyłeś: " + points + " na " + questions.length + " pkt"); //pokazujemy punktacje
        c = 0; //zerujemy czas
        nextBtn.style.visibility = "hidden"; //chowamy przycisk nast pytania
        theEnd = true; //zmienaimy koniec na true
        document.getElementById('result').value = points; //przypisujemy wartodc inputa niewidzialnego w html na wartosc osiagnietych pkt po to zeby je wrzucic do sesji
        return false; //zwracamy odp
    }

    function timedCount() { //funckja liczenia czasu
        if (c == 0) { //jesli czas sie skonczyl
            quizEnd(); //funckja konca
        }
        else { //jezeli nie 
            var result = (c < 10 ? "00:0" + c : "00:" + c); //zmieniamy wyswietlany timer
            $('#timer').html(result); //dajemy wartodc czasu na fronta
            c = c - 1; //zmieniejsamy czas
            t = setTimeout(function () { timedCount() }, 1000); //opozniamy o 1s
        }

    }

    function displayquestion() { //funkcja pokazania pytania

        var question = questions[question].question; //przypisujemy wartosc pytania
        var questionClass = $(document).find(".quiz >#qna> .question"); //pokazujemy gdzie ma sie pokazac pytanie
        var choiceList = $(document).find(".quiz >#qna> .choiceList"); //i odpoiwiedzi
        var numChoices = questions[question].choices.length; //ilosc opdoiwedzi 
        $(questionClass).text(question); //zmieniamy teskt pytania
        $(choiceList).find("li").remove(); 
        var choice; //zmienna wyboru

        for (i = 0; i < numChoices; i++) { //iterujemy po odp
            choice = questions[question].choices[i];
            if (iSelectedAnswer[question] == i) { //pokazujemy pytania
                $('<li><input type="radio" class="radio-inline" checked="checked"  value=' + i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
            } else {
                $('<li><input type="radio" class="radio-inline" value=' + i + ' name="dynradio" />' + ' ' + choice + '</li>').appendTo(choiceList);
            }
        }
    }

    function hideScore() { //chowamy wynik
        $(document).find(".result").hide();
    }

}
