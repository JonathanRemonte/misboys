// radio button

$(document).ready(function() {
    $('.radioshow').on('click', function() {
        var val = $(this).attr('data-class');
        const yr = document.getElementById('radio1');
        $('.allshow').hide();
        $('.' + val).show();
    });
  });

//   firms
$(document).ready(function() {

    $.ajax({
      url: 'Auth/firms',
      type: 'POST',
      dataType: 'text',

      success: function(response) {
        var chart_data = JSON.parse(response);

        var labels = [],
            heavy = [],
            infra = [], extract = [], resother = [], golf = []

        for (var i = 0; i < chart_data.length; i++) {
            heavy.push(chart_data[i].heavy)
            infra.push(chart_data[i].infra)
            extract.push(chart_data[i].extract)
            resother.push(chart_data[i].res)
            golf.push(chart_data[i].golf)
            labels.push(chart_data[i].fprov)
        }

        if (chart_data.length == 0) {
          if (window.firmsChart) {
            window.firmsChart.destroy();
          }

          window.firmsChart = new Chart($('#stakedBarChart'), {
              type: 'bar',
              data: {
              labels: ['No Data Found'],
              datasets: [{
                  data: [0],
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
          if (window.firmsChart) {
            window.firmsChart.destroy();
          }

          window.firmsChart = new Chart($('#stakedBarChart'), {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                  label: "Heavy and Other Processing Mfg. Ind.",
                  data: heavy,
                  backgroundColor:[ 'rgb(238, 102, 102)'],
              },
              {
                label: ['Infrastructure Projects'],
                data: infra,
                backgroundColor: [ 'rgb(75, 192, 192)' ],
              },
              {
                label: "Resources Extractive",
                data: extract,
                backgroundColor: ['rgb(255, 205, 86)' ],
              },
              {
                label: "Golf Course and other Tourism Projects",
                data: golf,
                backgroundColor: [ 'rgb(145, 204, 117)' ],
              },
              {
                label: "Other Resources",
                data: resother,
                backgroundColor: [ "rgb(84, 112, 198)" ],
              }
            ]
            },
              options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                      x: {
                        stacked: true
                      },
                      y: {
                        stacked: true
                      },
                    },
                    plugins: {
                      legend: {
                        labels: {
                          font: {
                              size: 11
                          },
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

    $('#year').on('change', function(e){
        e.preventDefault()

        $.ajax({
            url: 'Auth/firms',
            type: 'POST',
            dataType: 'text',
            data: { year: $('#year').val() },
            success: function(response) {
              var chart_data = JSON.parse(response);

              var labels = [],
                  heavy = [],
                  infra = [], extract = [], resother = [], golf = []

              for (var i = 0; i < chart_data.length; i++) {
                  heavy.push(chart_data[i].heavy)
                  infra.push(chart_data[i].infra)
                  extract.push(chart_data[i].extract)
                  resother.push(chart_data[i].res)
                  golf.push(chart_data[i].golf)
                  labels.push(chart_data[i].fprov)
              }

              if (chart_data.length == 0) {
                if (window.firmsChart) {
                  window.firmsChart.destroy();
                }

                window.firmsChart = new Chart($('#stakedBarChart'), {
                    type: 'bar',
                    data: {
                    labels: ['No Data Found'],
                    datasets: [{
                        data: [0],
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
                if (window.firmsChart) {
                  window.firmsChart.destroy();
                }

                window.firmsChart = new Chart($('#stakedBarChart'), {
                  type: 'bar',
                  data: {
                    labels: labels,
                    datasets: [{
                      label: "Heavy and Other Processing Mfg. Ind.",
                      data: heavy,
                      backgroundColor:[ 'rgb(238, 102, 102)'],
                  },
                  {
                    label: ['Infrastructure Projects'],
                    data: infra,
                    backgroundColor: [ 'rgb(75, 192, 192)' ],
                  },
                  {
                    label: "Resources Extractive",
                    data: extract,
                    backgroundColor: ['rgb(255, 205, 86)' ],
                  },
                  {
                    label: "Golf Course and other Tourism Projects",
                    data: golf,
                    backgroundColor: [ 'rgb(145, 204, 117)' ],
                  },
                  {
                    label: "Other Resources",
                    data: resother,
                    backgroundColor: [ "rgb(84, 112, 198)" ],
                  }
                ]
                },
                  options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                          x: {
                            stacked: true
                          },
                          y: {
                            stacked: true
                          },
                        },
                        plugins: {
                          legend: {
                            labels: {
                              font: {
                                  size: 11
                              },
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

    $('#start_date, #end_date').on('change', function(e){
        e.preventDefault()

        $.ajax({
            url: 'Auth/firms',
            type: 'POST',
            dataType: 'text',
            data: {
              start_date: $('#start_date').val(),
              end_date: $('#end_date').val()
            },
            success: function(response) {
              var chart_data = JSON.parse(response);

              var labels = [],
                  heavy = [],
                  infra = [], extract = [], resother = [], golf = []

              for (var i = 0; i < chart_data.length; i++) {
                  heavy.push(chart_data[i].heavy)
                  infra.push(chart_data[i].infra)
                  extract.push(chart_data[i].extract)
                  resother.push(chart_data[i].res)
                  golf.push(chart_data[i].golf)
                  labels.push(chart_data[i].fprov)
              }

              if (chart_data.length == 0) {
                if (window.firmsChart) {
                  window.firmsChart.destroy();
                }

                window.firmsChart = new Chart($('#stakedBarChart'), {
                    type: 'bar',
                    data: {
                    labels: ['No Data Found'],
                    datasets: [{
                        data: [0],
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
                if (window.firmsChart) {
                  window.firmsChart.destroy();
                }

                window.firmsChart = new Chart($('#stakedBarChart'), {
                  type: 'bar',
                  data: {
                    labels: labels,
                    datasets: [{
                      label: "Heavy and Other Processing Mfg. Ind.",
                      data: heavy,
                      backgroundColor:[ 'rgb(238, 102, 102)'],
                  },
                  {
                    label: ['Infrastructure Projects'],
                    data: infra,
                    backgroundColor: [ 'rgb(75, 192, 192)' ],
                  },
                  {
                    label: "Resources Extractive",
                    data: extract,
                    backgroundColor: ['rgb(255, 205, 86)' ],
                  },
                  {
                    label: "Golf Course and other Tourism Projects",
                    data: golf,
                    backgroundColor: [ 'rgb(145, 204, 117)' ],
                  },
                  {
                    label: "Other Resources",
                    data: resother,
                    backgroundColor: [ "rgb(84, 112, 198)" ],
                  }
                ]
                },
                  options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        scales: {
                          x: {
                            stacked: true
                          },
                          y: {
                            stacked: true
                          },
                        },
                        plugins: {
                          legend: {
                            labels: {
                              font: {
                                  size: 11
                              },
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
// end of stacked bar chart

// Permits

$(document).ready(function() {

  $.ajax({
    url: 'Auth/permits',
    type: 'POST',
    dataType: 'text',

    success: function(response) {
      var chart_data = JSON.parse(response);

      var labels = [],
          ecc = [], pto = [], dp = [], haz = []


      for (var i = 0; i < chart_data.length; i++) {
          ecc.push(chart_data[i].ecc)
          pto.push(chart_data[i].pto)
          dp.push(chart_data[i].dp)
          haz.push(chart_data[i].haz)
          labels.push(chart_data[i].fprov)
      }

      if (chart_data.length == 0) {
        if (window.permitChart) {
          window.permitChart.destroy();
        }

        window.permitChart = new Chart($('#barChart'), {
            type: 'bar',
            data: {
            labels: ['No Data Found'],
            datasets: [{
                data: [0],
                backgroundColor: [
                    'rgba(128, 128, 128)'
                ],
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
        if (window.permitChart) {
          window.permitChart.destroy();
        }

        window.permitChart = new Chart($('#barChart'), {
          type: 'bar',
          data: {
            labels: labels,
            datasets: [{
                label: "ECC",
                data: ecc,
                backgroundColor: [
                  'rgb(75, 192, 192)' ],
            },
            {
              label: "PTO",
              data: pto,
              backgroundColor: [
                 'rgb(238, 102, 102)'],
            },
            {
              label: "DP",
              data: dp,
              backgroundColor: [
                'rgb(255, 205, 86)' ],
            },
            {
              label: "HWM",
              data:haz,
              backgroundColor: [
                'rgb(145, 204, 117)' ],
            }
          ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                labels: {
                  font: {
                      size: 11
                  },
                }
              }
          },
          }
        })
      }
    },
    error: function() {
        alert('Error fetching data');
    }
  })

  $('#startDate, #endDate').on('change', function(e){
    e.preventDefault()

    $.ajax({
      url: 'Auth/permits',
      type: 'POST',
      dataType: 'text',
      data:{
        startDate: $('#startDate').val(),
        endDate: $('#endDate').val()
      },

      success: function(response) {
        var chart_data = JSON.parse(response);

        var labels = [],
            ecc = [], pto = [], dp = [], haz = []


        for (var i = 0; i < chart_data.length; i++) {
            ecc.push(chart_data[i].ecc)
            pto.push(chart_data[i].pto)
            dp.push(chart_data[i].dp)
            haz.push(chart_data[i].haz)
            labels.push(chart_data[i].fprov)
        }

        if (chart_data.length == 0) {
          if (window.permitChart) {
            window.permitChart.destroy();
          }

          window.permitChart = new Chart($('#barChart'), {
              type: 'bar',
              data: {
              labels: ['No Data Found'],
              datasets: [{
                  data: [0],
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
          if (window.permitChart) {
            window.permitChart.destroy();
          }

          window.permitChart = new Chart($('#barChart'), {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: "ECC",
                data: ecc,
                backgroundColor: [
                  'rgb(75, 192, 192)' ],
            },
            {
              label: "PTO",
              data: pto,
              backgroundColor: [
                 'rgb(238, 102, 102)'],
            },
            {
              label: "DP",
              data: dp,
              backgroundColor: [
                'rgb(255, 205, 86)' ],
            },
            {
              label: "HWM",
              data:haz,
              backgroundColor: [
                'rgb(145, 204, 117)' ],
            }
          ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                labels: {
                  font: {
                      size: 11
                  },
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

  $('#year1').on('change', function(e){
    e.preventDefault()

    $.ajax({
      url: 'Auth/permits',
      type: 'POST',
      dataType: 'text',
      data:{
        year1: $('#year1').val()
      },

      success: function(response) {
        var chart_data = JSON.parse(response);

        var labels = [],
            ecc = [], pto = [], dp = [], haz = []


        for (var i = 0; i < chart_data.length; i++) {
            ecc.push(chart_data[i].ecc)
            pto.push(chart_data[i].pto)
            dp.push(chart_data[i].dp)
            haz.push(chart_data[i].haz)
            labels.push(chart_data[i].fprov)
        }

        if (chart_data.length == 0) {
          if (window.permitChart) {
            window.permitChart.destroy();
          }

          window.permitChart = new Chart($('#barChart'), {
              type: 'bar',
              data: {
              labels: ['No Data Found'],
              datasets: [{
                  data: [0],
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
          if (window.permitChart) {
            window.permitChart.destroy();
          }

          window.permitChart = new Chart($('#barChart'), {
            type: 'bar',
            data: {
              labels: labels,
              datasets: [{
                label: "ECC",
                data: ecc,
                backgroundColor: [
                  'rgb(75, 192, 192)' ],
            },
            {
              label: "PTO",
              data: pto,
              backgroundColor: [
                 'rgb(238, 102, 102)'],
            },
            {
              label: "DP",
              data: dp,
              backgroundColor: [
                'rgb(255, 205, 86)' ],
            },
            {
              label: "HWM",
              data:haz,
              backgroundColor: [
                'rgb(145, 204, 117)' ],
            }
          ]
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
              legend: {
                labels: {
                  font: {
                      size: 11
                  },
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

// firm and pco

$(document).ready(function() {

  $.ajax({
    url: 'Auth/firmPco',
    type: 'POST',
    dataType: 'text',

    success: function(response) {
      var chart_data = JSON.parse(response);

      var labels = [],
          firm = [],
          pco = []

      for (var i = 0; i < chart_data.length; i++) {
          pco.push(chart_data[i].pco)
          firm.push(chart_data[i].firm)
          labels.push(chart_data[i].fprov)
      }
      // console.log(labels)

      if (chart_data.length == 0) {
        if (window.firmPCO) {
          window.firmPCO.destroy();
        }

        window.firmPCO = new Chart($('#firmPcoChart'), {
            type: 'bar',
            data: {
            labels: ['No Data Found'],
            datasets: [{
                data: [0],
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
        if (window.firmPCO) {
          window.firmPCO.destroy();
        }

        window.firmPCO = new Chart($('#firmPcoChart'), {
          type: 'bar',
          data: {
            labels: labels,
            datasets: [{
                label: "Firm",
                data: firm,
                backgroundColor:[ 'rgb(238, 102, 102)'],
            },
            {
              label: ['PCO'],
              data: pco,
              backgroundColor: [ 'rgb(75, 192, 192)' ],
            }
          ]
          },
            options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  indexAxis: 'y',
                  scales: {
                    x: {
                      beginAtZero: true
                    }
                  },
                  scales: {
                    x: {
                      stacked: true
                    },
                    y: {
                      stacked: true
                    },
                  },
                  plugins: {
                    legend: {
                      labels: {
                        font: {
                            size: 11
                        },
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


    // search by date
    $('#sDate, #eDate').on('change', function(e){
      e.preventDefault()

      $.ajax({
        url: 'Auth/firmPco',
        type: 'POST',
        dataType: 'text',
        data:{
          sDate: $('#sDate').val(),
          eDate: $('#eDate').val()
        },

        success: function(response) {
          var chart_data = JSON.parse(response);

          var labels = [],
              firm = [],
              pco = []

          for (var i = 0; i < chart_data.length; i++) {
              pco.push(chart_data[i].pco)
              firm.push(chart_data[i].firm)
              labels.push(chart_data[i].fprov)
          }
          console.log(labels)

          if (chart_data.length == 0) {
            if (window.firmPCO) {
              window.firmPCO.destroy();
            }

            window.firmPCO = new Chart($('#firmPcoChart'), {
                type: 'bar',
                data: {
                labels: ['No Data Found'],
                datasets: [{
                    data: [0],
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
            if (window.firmPCO) {
              window.firmPCO.destroy();
            }

            window.firmPCO = new Chart($('#firmPcoChart'), {
              type: 'bar',
              data: {
                labels: labels,
                datasets: [{
                    label: "Firm",
                    data: firm,
                    backgroundColor:[ 'rgb(238, 102, 102)'],
                },
                {
                  label: ['PCO'],
                  data: pco,
                  backgroundColor: [ 'rgb(75, 192, 192)' ],
                }
              ]
              },
              options: {
                responsive: true,
                maintainAspectRatio: false,
                indexAxis: 'y',
                scales: {
                  x: {
                    beginAtZero: true
                  }
                },
                scales: {
                  x: {
                    stacked: true
                  },
                  y: {
                    stacked: true
                  },
                },
                plugins: {
                  legend: {
                    labels: {
                      font: {
                          size: 11
                      },
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

      // search by year

      $('#year2').on('change', function(e){
        e.preventDefault()

        $.ajax({
          url: 'Auth/firmPco',
          type: 'POST',
          dataType: 'text',
          data:{
            year2: $('#year2').val()
          },

          success: function(response) {
            var chart_data = JSON.parse(response);

            var labels = [],
                firm = [],
                pco = []

            for (var i = 0; i < chart_data.length; i++) {
                pco.push(chart_data[i].pco)
                firm.push(chart_data[i].firm)
                labels.push(chart_data[i].fprov)
            }
            console.log(labels)

            if (chart_data.length == 0) {
              if (window.firmPCO) {
                window.firmPCO.destroy();
              }

              window.firmPCO = new Chart($('#firmPcoChart'), {
                  type: 'bar',
                  data: {
                  labels: ['No Data Found'],
                  datasets: [{
                      data: [0],
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
              if (window.firmPCO) {
                window.firmPCO.destroy();
              }

              window.firmPCO = new Chart($('#firmPcoChart'), {
                type: 'bar',
                data: {
                  labels: labels,
                  datasets: [{
                      label: "Firm",
                      data: firm,
                      backgroundColor:[ 'rgb(238, 102, 102)'],
                  },
                  {
                    label: ['PCO'],
                    data: pco,
                    backgroundColor: [ 'rgb(75, 192, 192)' ],
                  }
                ]
                },
                options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  indexAxis: 'y',
                  scales: {
                    x: {
                      beginAtZero: true
                    }
                  },
                  scales: {
                    x: {
                      stacked: true
                    },
                    y: {
                      stacked: true
                    },
                  },
                  plugins: {
                    legend: {
                      labels: {
                        font: {
                            size: 11
                        },
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
