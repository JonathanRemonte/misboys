<!--location-->
  <script>
  var subjectObject = {
    "Marinduque": {
      "Boac": ["Agot", "Agumaymayan", "Amoingon", "Apitong"],
      "Buenavista": ["Bagacay", "Bagtingon", "Barangay I (Pob.)", "Barangay II (Pob.)"]
    },
    "Occidental Mindoro": {
      "Abra De Ilog": ["Armado", "Balao", "Cabacao", "Lumangbayan"],
      "Calintaan": ["Concepcion", "Iriron", "Malpalon", "New Dagupan"]
    },
    "Oriental Mindoro": {
      "Baco": ["Alag", "Bangkatan", "Baras (Mangyan Minority)", "Bayanan"],
      "Bansud": ["Alcadesma", "Bato", "Conrazon", "Malo"]
    },
    "Palawan": {
      "Aborlan": ["Apo-Aporawan", "Apoc-apoc", "Aporawan", "Barake"],
      "Agutaya": ["Abagat (Pob.)", "Algeciras", "Bangcal (Pob.)", "Cambian (Pob.)"]
    },
    "Romblon": {
      "Alcantara": ["Bagsik", "Bonlao", "Calagonsao"],
      "Banton": ["Balogo", "Banice", "Hambi-an"]
    }
  }
  window.onload = function() {
    var subjectSel = document.getElementById("fprov");
    var topicSel = document.getElementById("fmun");
    var chapterSel = document.getElementById("fbrgy");
    for (var x in subjectObject) {
      subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }
    subjectSel.onchange = function() {
      //empty Chapters- and Topics- dropdowns
      chapterSel.length = 1;
      topicSel.length = 1;
      //display correct values
      for (var y in subjectObject[this.value]) {
        topicSel.options[topicSel.options.length] = new Option(y, y);
      }
    }
    topicSel.onchange = function() {
      //empty Chapters dropdown
      chapterSel.length = 1;
      //display correct values
      var z = subjectObject[subjectSel.value][this.value];
      for (var i = 0; i < z.length; i++) {
        chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
      }
    }
  }
  </script>
  <!--location-->
