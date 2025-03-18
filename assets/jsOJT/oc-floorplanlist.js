$(document).ready(function() {
    setInterval(updateStatusFr, 750)
  })
  
    var moreDown = document.getElementById("moredown"),
        fieldList = document.getElementById("field-list"),
        pismuLeft = document.getElementById("pismuleft"),
        recordsLeft = document.getElementById("recordsleft"),
        recordsRight = document.getElementById("recordsright"),
        technicalLeft = document.getElementById("technicalleft"),
        technicalRight = document.getElementById("technicalright"),
        fadLeft = document.getElementById("fadleft"),
        fadRight = document.getElementById("fadright"),
        ordLeft = document.getElementById("ordleft"),
        ordRight = document.getElementById("ordright"),
        recordsBlock = document.getElementById("recordsblock"),
        pismuBlock = document.getElementById("pismublock"),
        technicalBlock = document.getElementById("technicalblock"),
        fadBlock = document.getElementById("fadblock"),
        ordBlock = document.getElementById("ordblock"),
        content = document.getElementById("container"),
        links = document.getElementsByClassName("btnclick")
  
    moreDown.addEventListener("click", function() {
        moreDown.style.display = "none"
        fieldList.style.maxHeight = "500vh"
    })
    
    const checkboxes = document.querySelectorAll('input[type="radio"]')
    let lastChecked
    function handleCheck(e) {
        if(this.checked) {
            if(lastChecked) {
                lastChecked.checked = false;
            }
            lastChecked = this;
        }
    }
    checkboxes.forEach(checkbox => checkbox.addEventListener('click', handleCheck))
  
    pismuLeft.addEventListener("click", function() {
      pismuBlock.style.display = "none"
      recordsBlock.style.display = "block"
    })
  
    recordsRight.addEventListener("click", function() {
      pismuBlock.style.display = "block"
      recordsBlock.style.display = "none"
    })
  
    recordsLeft.addEventListener("click", function() {
      technicalBlock.style.display = "block"
      recordsBlock.style.display = "none"
    })
  
    technicalLeft.addEventListener("click", function() {
      fadBlock.style.display = "block"
      technicalBlock.style.display = "none"
    })
  
    technicalRight.addEventListener("click", function() {
      recordsBlock.style.display = "block"
      technicalBlock.style.display = "none"
    })
  
    fadLeft.addEventListener("click", function() {
      fadBlock.style.display = "none"
      ordBlock.style.display = "block"
    })
  
    fadRight.addEventListener("click", function() {
      fadBlock.style.display = "none"
      technicalBlock.style.display = "block"
    })
  
    ordRight.addEventListener("click", function() {
      ordBlock.style.display = "none"
      fadBlock.style.display = "block"
    })
  
    function updateStatusFr() {
      $.ajax({
        url: 'Auth_Orgchart/updateStatusFr',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          $('span#status-container').each(function() {
            var high = 0,
                frname = $(this).attr('fr-name'),
                container = $(this)
            container.empty()
            let tzone = "matchingRow.authTime"
            var totalRows = 0
    
            $.each(data, function(i, row) {
              if (row.empName == frname) {
                high = Math.max(high, row.id)
                totalRows++
              }
            })
  
            let timeformat = document.getElementById("content").getAttribute("time-format")
    
            console.log(totalRows)
            if (timeformat != tzone){
              if (totalRows === 0) {
                container.append('<i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>')
              } else if (totalRows % 2 === 0) {
                container.append('<i class="fa-solid fa-circle fa-beat-fade" style="color:red;margin-right:10px;"></i>')
              } else if (totalRows % 2 !== 0) {
                container.append('<i class="fa-solid fa-circle fa-beat-fade" style="color:#29e029;margin-right:10px;"></i>')
              } else {
                container.append('<i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>')
              }
            }else {
              container.append('<i class="fa-solid fa-circle fa-beat-fade" style="color:gray;margin-right:10px;"></i>')
            }
          })
        },
        error: function() {
          alert('Error fetching data from server.');
          location.reload();
        }
      });
    }