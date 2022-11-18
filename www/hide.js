function hideInfo($f_coaut_id) {

    let text1 = "coautors";
    let num = $f_coaut_id;
    let text2 = num.toString();
    $f_coaut_id = text1.concat(text2);
      var x = document.getElementById($f_coaut_id);
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    
    function hideRec1($f_rec1_id) {
    
    let text1 = "rec1-";
    let num = $f_rec1_id;
    let text2 = num.toString();
    $f_rec1_id = text1.concat(text2);
      var x = document.getElementById($f_rec1_id);
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    
    function hideRec2($f_rec2_id) {
    
    let text1 = "rec2-";
    let num = $f_rec2_id;
    let text2 = num.toString();
    $f_rec2_id = text1.concat(text2);
      var x = document.getElementById($f_rec2_id);
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }