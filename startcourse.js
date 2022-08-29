var vid = document.getElementById("myVideo");

function myFunction() {
  document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
    isSupp = vid.canPlayType("video/mp4");

    if (isSupp == 1) {
    vid.src = "https://www.youtube.com/embed/tgbNymZ7vqY";
  } else if(isSupp==2){
    vid.src = "https://www.youtube.com/embed/il_t1WVLNxk";
  }
}