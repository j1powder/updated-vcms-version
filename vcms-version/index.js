
const Btn = document.getElementById('demo-data-btn');

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

console.log(document.getElementById('overall-score').value = Math.round(totalCorrect * 100 / 7) + "%");
     

    }


    

  








