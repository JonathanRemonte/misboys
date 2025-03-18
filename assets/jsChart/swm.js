// JS FOR RADIO BUTTON

$(document).ready(function() {
  $('.radioshow').on('click', function() {
      var val = $(this).attr('data-class');
      const yr = document.getElementById('radio1');
      $('.allshow').hide();
      $('.' + val).show();
  });
});

// end of radio

// doughnut chart

$(document).ready(function() {
  $.ajax({
      url: 'Auth/swmdash',
      type: 'GET',
      dataType: 'text',

      success: function(response) {
          var data = response.split(',');

        window.myDoughnutChart = new Chart($('#myChart'), {
          type: 'doughnut',
          data: {
            labels: ["Approved", "Not Approved"],
            datasets: [{
                data: [data[1], data[2]],
                backgroundColor: [
                  "#36A2EB",
                  "#FF6384"
              ],
              hoverBackgroundColor: [
                  "#36A2EB",
                  "#FF6384"
              ],
            }]
          },
          options: {
              responsive: true,
              legend: {
                  position: 'top',
              },
              animation: {
                  animateScale: true,
                  animateRotate: true
              }
          }
        })
      },
      error: function() {
          alert('Error fetching data');
      }
  })


$('#start_date , #end_date').on('change',function(e){
  e.preventDefault()

  // console.log('dd')

  $.ajax({
      url: 'Auth/planStatus',
      type: 'POST',
      data: {
          start_date: $('#start_date').val(),
          end_date: $('#end_date').val()
      },

      success: function(response) {
        var chart_data = JSON.parse(response);

        var data = []
        var labels = []
        var backgroundColor = []

        for (var i = 0; i < chart_data.length; i++) {
            data.push(chart_data[i].count)
            labels.push(chart_data[i].year10)
            if (chart_data[i].year10 == "Approved") {
            backgroundColor.push("#36A2EB");
          } else {
            backgroundColor.push("#FF6384");
          }
        }

        if (chart_data.length == 0) {

          if (window.myDoughnutChart) {
            window.myDoughnutChart.destroy();
          }

          window.myDoughnutChart = new Chart($('#myChart'), {
              type: 'doughnut',
              data: {
              labels: ['No Data Found'],
              datasets: [{
                  data: [100],
                  backgroundColor: [
                      'rgba(128, 128, 128, 0.2)'
                  ],
                  borderColor: [
                      'rgba(128, 128, 128, 1)'
                  ],
                  borderWidth: 1
              }]
              },
              options: {
                  responsive: true,
                  legend: {
                      position: 'top',
                  },
                  title: {
                      display: true,
                      fontColor: '#333',
                      fontFamily: 'Arial',
                      fontSize: 12,
                      fontStyle: 'bold',
                      lineHeight: 1.5
                  },
                  animation: {
                      animateScale: true,
                      animateRotate: true
                  }
              }
          })
        } else {
          if (window.myDoughnutChart) {
            window.myDoughnutChart.destroy();
          }

          window.myDoughnutChart = new Chart($('#myChart'), {
            type: 'doughnut',
            data: {
              labels: labels,
              datasets: [{
                  data: data,
                  backgroundColor: backgroundColor,
                  borderWidth: 1
              }]
            },
            options: {
              responsive: true,
              legend: {
                  position: 'top',
              },
              animation: {
                  animateScale: true,
                  animateRotate: true
              }
            }
          })
        }
      },
      error: function() {
          alert('Error fetching data');
      }
  })
})

// search by year
$('#year').on('change',function(e){
  e.preventDefault()

  console.log('dd')

  $.ajax({
      url: 'Auth/planStatus',
      type: 'POST',
      data: {
          year: $('#year').val()

      },

      success: function(response) {
        var chart_data = JSON.parse(response);

        var data = []
        var labels = []

        for (var i = 0; i < chart_data.length; i++) {
            data.push(chart_data[i].count)
            labels.push(chart_data[i].year10)
        }

        if (chart_data.length == 0) {

          if (window.myDoughnutChart) {
            window.myDoughnutChart.destroy();
          }

          window.myDoughnutChart = new Chart($('#myChart'), {
              type: 'doughnut',
              data: {
              labels: ['No Data Found'],
              datasets: [{
                  data: [100],
                  backgroundColor: [
                      'rgba(128, 128, 128, 0.2)'
                  ],
                  borderColor: [
                      'rgba(128, 128, 128, 1)'
                  ],
                  borderWidth: 1
              }]
              },
              options: {
                  responsive: true,
                  legend: {
                      position: 'top',
                  },
                  animation: {
                      animateScale: true,
                      animateRotate: true
                  }
              }
          })
        } else {
          if (window.myDoughnutChart) {
            window.myDoughnutChart.destroy();
          }

          window.myDoughnutChart = new Chart($('#myChart'), {
            type: 'doughnut',
            data: {
              labels: labels,
              datasets: [{
                  data: data,
                  backgroundColor: [
                    '#36A2EB',
                    '#FF6384'
                  ],
                  borderColor: [
                    '#36A2EB',
                      '#FF6384'

                  ],
                  borderWidth: 1
              }]
            },
            options: {
              responsive: true,
              legend: {
                  position: 'top',
              },
              animation: {
                  animateScale: true,
                  animateRotate: true
              }
            }
          })
        }
      },
      error: function() {
          alert('Error fetching data');
      }
  })
})
})

// plan summary

$(document).ready(function() {

  $.ajax({
    url: 'Auth/planSummary',
    type: 'POST',
    dataType: 'text',

    success: function(response) {
      var chart_data = JSON.parse(response);

      var data = [],
          labels = [],
          datanot = [],
          backgroundColor = []


          for (var i = 0; i < chart_data.length; i++) {
          data.push(chart_data[i].approved)
          datanot.push(0 - chart_data[i].not_approved)
          labels.push(chart_data[i].fprov)
      }


      if (chart_data.length == 0) {

        if (window.barChart) {
          window.barChart.destroy();
        }

        window.barChart = new Chart($('#chartSummary'), {
            type: 'bar',
            data: {
            labels: ['No Data Found'],
            datasets: [{
                data: [100],
                backgroundColor: [
                    'rgba(128, 128, 128, 0.2)'
                ],
                borderColor: [
                    'rgba(128, 128, 128, 1)'
                ]
            }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
            }
        })
      } else {
        if (window.barChart) {
          window.barChart.destroy();
        }

        window.barChart = new Chart($('#chartSummary'), {
          type: 'bar',
          data: {
            labels: labels,
            datasets: [{
                label: "Approved",
                data: data,
                backgroundColor:[ "#36A2EB" ],
                borderWidth: 1
            },
            {
              label: "Not Approved",
              data: datanot,
              backgroundColor: [ "#FF6384" ],
              borderWidth: 1
            }]
          },
          options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            scales: {
              x: {
                stacked: true,
              },
              y: {
                stacked: true,
                ticks: {
                    callback: function(value) {
                        return Math.abs(value);
                    }
                }
              }
            },
            plugins: {
              tooltip: {
                  callbacks: {
                      label: function(context) {
                          var label = context.dataset.label || '';
                          if (label) {
                              label += ': ';
                          }
                          label += Math.abs(context.parsed.y);
                          return label;
                      }
                  }
              }
          }
          }
        })
      }
    },
    error: function() {
        alert('Error fetching data');
    }
  })


$('#startDate , #endDate').on('change',function(e){
  e.preventDefault()

  $.ajax({
      url: 'Auth/planSummary',
      type: 'POST',
      data: {
          startDate: $('#startDate').val(),
          endDate: $('#endDate').val()
      },

      success: function(response) {
        var chart_data = JSON.parse(response);

        var data = []
        var labels = []
        var datanot = []
        var backgroundColor = []

        for (var i = 0; i < chart_data.length; i++) {
            data.push(chart_data[i].approved)
            datanot.push(0 - chart_data[i].not_approved)
            labels.push(chart_data[i].fprov)
        }

          // console.log(datanot)

        if (chart_data.length == 0) {

          if (window.barChart) {
            window.barChart.destroy();
          }

          window.barChart = new Chart($('#chartSummary'), {
              type: 'bar',
              data: {
              labels: ['No Data Found'],
              datasets: [{
                  data: [100],
                  backgroundColor: [
                      'rgba(128, 128, 128, 0.2)'
                  ],
                  borderColor: [
                      'rgba(128, 128, 128, 1)'
                  ]
              }]
              },
              options: {
                  responsive: true,
                  legend: {
                      position: 'top',
                  },
              }
          })
        } else {
          if (window.barChart) {
            window.barChart.destroy();
          }

          window.barChart = new Chart($('#chartSummary'), {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                  label: "Approved",
                  data: data,
                  backgroundColor:[ "#36A2EB" ],
                  borderWidth: 1
              },
              {
                label: "Not Approved",
                data: datanot,
                backgroundColor: [ "#FF6384" ],
                borderWidth: 1
              }]
            },
            options: {
              responsive: true,
              legend: {
                  position: 'top',
              },
              scales: {
                x: {
                  stacked: true,
                },
                y: {
                  stacked: true,
                  ticks: {
                      callback: function(value) {
                          return Math.abs(value);
                      }
                  }
                }
              },
              plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += Math.abs(context.parsed.y);
                            return label;
                        }
                    }
                }
            }
            }
          })
        }
      },
      error: function() {
          alert('Error fetching data');
      }
  })
})
$('#year1').on('change',function(e){
  e.preventDefault()


  $.ajax({
      url: 'Auth/planSummary',
      type: 'POST',
      data: {
          year1: $('#year1').val()
      },

      success: function(response) {
        var chart_data = JSON.parse(response);

        var data = []
        var labels = []
        var datanot = []
        var backgroundColor = []

        for (var i = 0; i < chart_data.length; i++) {
          data.push(chart_data[i].approved)
          // datanot.push(chart_data[i].not_approved)
          datanot.push(0 - chart_data[i].not_approved)
          labels.push(chart_data[i].fprov)
      }
          // console.log(datanot)

        if (chart_data.length == 0) {

          if (window.barChart) {
            window.barChart.destroy();
          }

          window.barChart = new Chart($('#chartSummary'), {
              type: 'bar',
              data: {
              labels: ['No Data Found'],
              datasets: [{
                  data: [100],
                  backgroundColor: [
                      'rgba(128, 128, 128, 0.2)'
                  ],
                  borderColor: [
                      'rgba(128, 128, 128, 1)'
                  ]
              }]
              },
              options: {
                  responsive: true,
                  legend: {
                      position: 'top',
                  },
              }
          })
        } else {
          if (window.barChart) {
            window.barChart.destroy();
          }

          window.barChart = new Chart($('#chartSummary'), {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                  label: "Approved",
                  data: data,
                  backgroundColor:[ "#36A2EB" ],
                  borderWidth: 1
              },
              {
                label: "Not Approved",
                data: datanot,
                backgroundColor: [ "#FF6384" ],
                borderWidth: 1
              }]
            },
            options: {
              responsive: true,
              legend: {
                  position: 'top',
              },
              scales: {
                x: {
                  stacked: true,
                },
                y: {
                  stacked: true,
                  ticks: {
                      callback: function(value) {
                          return Math.abs(value);
                      }
                  }
                }
              },
              plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += Math.abs(context.parsed.y);
                            return label;
                        }
                    }
                }
            }
            }
          })
        }
      },
      error: function() {
          alert('Error fetching data');
      }
  })
})
})

// Total registered


$(document).ready(function() {

  $.ajax({
    url: 'Auth/totalPlan',
    type: 'POST',

    success: function(response) {
      var chart_data = JSON.parse(response);

      var data = []
      var labels = []
      // var dLabels = []
      // var bgColor = []

      for (var i = 0; i < chart_data.length; i++) {
          data.push(chart_data[i].count);
          labels.push(chart_data[i].fprov);

          // check for specific label values and push to dLabels array with corresponding background color
          // if (chart_data[i].fprov === "Marinduque") {
          //   dLabels.push("Marinduque");
          //   bgColor.push('#36A2EB');
          // } else if (chart_data[i].fprov === "Oriental Mindoro") {
          //   dLabels.push("Oriental Mindoro");
          //   bgColor.push('#42a832');
          // }
      }

      if (chart_data.length == 0) {

        if (window.lineChart) {
          window.lineChart.destroy();
        }

        window.lineChart = new Chart($('#chartTotal'), {
            type: 'line',
            data: {
            labels: ['No Data Found'],
            datasets: [{
                data: [100],
                backgroundColor: [
                    'rgba(128, 128, 128, 0.2)'
                ],
                borderColor: [
                    'rgba(128, 128, 128, 1)'
                ],
                borderWidth: 1
            }]
            },
            options: {
                responsive: true,
                legend: {
                  display: false
                }
            }
        })
      } else {
        if (window.lineChart) {
          window.lineChart.destroy();
        }

        window.lineChart = new Chart($('#chartTotal'), {
          type: 'line',
          data: {
            labels: labels,
            datasets: [{
              data: data,
              backgroundColor: '#36A2EB',
              borderColor: 'rgb(75, 192, 192)',
              borderWidth: 1
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: false
              }
            }
          }
        })
      }
    },
    error: function() {
        alert('Error fetching data');
    }
  })

    $('#firstDate, #lastDate').on('change', function(e){
      e.preventDefault()

      $.ajax({
        url: 'Auth/totalPlan',
        type: 'POST',
        data:{
          firstDate:$('#firstDate').val(),
          lastDate:$('#lastDate').val()
        },
        success: function(response) {
          var chart_data = JSON.parse(response);

          var data = []
          var labels = []

          for (var i = 0; i < chart_data.length; i++) {
              data.push(chart_data[i].count);
              labels.push(chart_data[i].fprov);

          }

          if (chart_data.length == 0) {

            if (window.lineChart) {
              window.lineChart.destroy();
            }

            window.lineChart = new Chart($('#chartTotal'), {
                type: 'line',
                data: {
                labels: ['No Data Found'],
                datasets: [{
                    data: [0],
                    backgroundColor: [
                        'rgba(128, 128, 128, 0.2)'
                    ],
                    borderColor: [
                        'rgba(128, 128, 128, 1)'
                    ],
                    borderWidth: 1
                }]
                },
                options: {
                  responsive: true,
                  plugins: {
                    legend: {
                      display: false
                    }
                  }
                }
            })
          } else {
            if (window.lineChart) {
              window.lineChart.destroy();
            }

            window.lineChart = new Chart($('#chartTotal'), {
              type: 'line',
              data: {
                labels: labels,
                datasets: [{
                  data: data,
                  backgroundColor: '#36A2EB',
                  borderColor: 'rgb(75, 192, 192)',
                  borderWidth: 1
                }]
              },
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    display: false
                  }
                }
              }
            })
          }
        },
        error: function() {
            alert('Error fetching data');
        }
      })
    })
    $('#year2').on('change', function(e){
      e.preventDefault()

      $.ajax({
        url: 'Auth/totalPlan',
        type: 'POST',
        data:{
          year2:$('#year2').val()
        },
        success: function(response) {
          var chart_data = JSON.parse(response);

          var data = []
          var labels = []

          for (var i = 0; i < chart_data.length; i++) {
              data.push(chart_data[i].count);
              labels.push(chart_data[i].fprov);

          }

          if (chart_data.length == 0) {

            if (window.lineChart) {
              window.lineChart.destroy();
            }

            window.lineChart = new Chart($('#chartTotal'), {
                type: 'line',
                data: {
                labels: ['No Data Found'],
                datasets: [{
                    data: [0],
                    backgroundColor: [
                        'rgba(128, 128, 128, 0.2)'
                    ],
                    borderColor: [
                        'rgba(128, 128, 128, 1)'
                    ],
                    borderWidth: 1
                }]
                },
                options: {
                    responsive: true,
                    legend: {
                      display: false
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            })
          } else {
            if (window.lineChart) {
              window.lineChart.destroy();
            }

            window.lineChart = new Chart($('#chartTotal'), {
              type: 'line',
              data: {
                labels: labels,
                datasets: [{
                  data: data,
                  backgroundColor: '#36A2EB',
                  borderColor: 'rgb(75, 192, 192)',
                  borderWidth: 1
                }]
              },
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    display: false
                  }
                }
              }
            })
          }
        },
        error: function() {
            alert('Error fetching data');
        }
      })
    })
})
