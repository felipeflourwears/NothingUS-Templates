const textarea = document.getElementById("test"),
voiceList = document.querySelector("select"),
speechBtn = document.getElementById("button-test");

let synth = speechSynthesis,
isSpeaking = true;

voices();

/* function voices() {
    let selectedVoice = null; // Variable para almacenar la voz seleccionada
  
    for (let voice of synth.getVoices()) {
      if (voice.name === "Google Español") {
        selectedVoice = voice; // Guardar la voz seleccionada en la variable
        break; // Salir del bucle una vez que se haya encontrado la voz deseada
      }
    }
  
    if (selectedVoice !== null) {
      synth.voice = selectedVoice; // Establecer la voz seleccionada en el sintetizador
      console.log(`Voz seleccionada: ${selectedVoice.name} (${selectedVoice.lang})`);
    } else {
      console.log("La voz deseada no está disponible.");
    }
  
    return selectedVoice; // Devolver la voz seleccionada
  } */

  function voices() {
    let selectedVoice = null; // Variable para almacenar la voz seleccionada
  
    for (let voice of synth.getVoices()) {
      if (voice.lang.includes("es")) {
        selectedVoice = voice; // Guardar la voz seleccionada en la variable
        break; // Salir del bucle una vez que se haya encontrado una voz en español
      }
    }
  
    if (selectedVoice !== null) {
      synth.voice = selectedVoice; // Establecer la voz seleccionada en el sintetizador
      console.log(`Voz seleccionada: ${selectedVoice.name} (${selectedVoice.lang})`);
    } else {
      console.log("No se encontró una voz en español disponible.");
    }
  
    return selectedVoice; // Devolver la voz seleccionada
  }
  
synth.addEventListener("voiceschanged", voices);

function textToSpeech(text) {
    let utterance = new SpeechSynthesisUtterance(text);
    let selectedVoice = voices(); // Obtener la voz seleccionada
  
    if (selectedVoice !== null) {
      utterance.voice = selectedVoice; // Establecer la voz seleccionada en el objeto Utterance
    } else {
      console.log("No se encontró una voz en español disponible.");
      return;
    }
  
    synth.speak(utterance);
  }

speechBtn.addEventListener("click", e =>{
    e.preventDefault();
    if(textarea.value !== ""){
        if(!synth.speaking){
            textToSpeech(textarea.value);
        }
        if(textarea.value.length > 80){
            setInterval(()=>{
                if(!synth.speaking && !isSpeaking){
                    isSpeaking = true;
                    speechBtn.innerText = "Convert To Speech";
                }else{
                }
            }, 500);
            if(isSpeaking){
                synth.resume();
                isSpeaking = false;
                speechBtn.innerText = "Pause Speech";
            }else{
                synth.pause();
                isSpeaking = true;
                speechBtn.innerText = "Resume Speech";
            }
        }else{
            speechBtn.innerText = "Convert To Speech";
        }
    }
});