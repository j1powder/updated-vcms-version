const Btn = document.getElementById('demo-data-btn');

console.log("Yowzer");
function showForm() {
    const demoForm = document.getElementById('demo-data-form');
    demoForm.style.display = "block";
}

function getValues() {
    const corrects = document.getElementsByClassName('yes');
    let totalCorrect = 0; 
    for (const correct of corrects ){
          if(correct.checked == true){
              totalCorrect++;

          }
        }

      document.getElementById('overall-score').innerHTML = Math.round(totalCorrect * 100 / 7) + "%";
    
    }

    

  








