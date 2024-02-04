function myFunction() {
    var x = document.getElementById("mobile_container");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  let lip = document.getElementById('lip_stick');
  let lip1 = document.getElementById('lip_stick2');
  let lip3 = document.getElementById('lip_stick3');
  let lip4 = document.getElementById('lip_stick4');

  
  
  
  
  window.addEventListener('scroll', function(){
      let value = this.window.scrollY;
      lip.style.left = value * 1.25 + 'px'; 
      lip1.style.top = value * 1.25 + 'px';
      lip3.style.left = value * -1.25 + 'px';
      lip4.style.top = value * -1.25 + 'px';
  })


