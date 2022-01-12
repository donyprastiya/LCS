var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: [<?php
                        $balik = array_reverse($graftgl);
                        foreach ($balik as $tanggal) {
                          echo "'" .mediumdate_indo($tanggal->tgl) ."',";
                        }
                      
                    ?>],
          datasets: [{
              label: 'Suhu',
              data: [<?php 
                        $baliksuhu = array_reverse($grafsuhu);
                        foreach ($baliksuhu as $data) {
                        echo "'" .number_format($data->suhu) ."',";
                      }
                    ?>],
              lineTension: 0.3,
              backgroundColor: "rgba(255, 215, 0, 0.05)",
              borderColor: "rgba(255, 215, 0, 1)",
              pointRadius: 5,
              pointBackgroundColor: "rgba(255, 215, 0, 1)",
              pointBorderColor: "rgba(255, 215, 0, 1)",
              pointHoverRadius: 3,
              pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
              pointHoverBorderColor: "rgba(78, 115, 223, 1)",
              pointHitRadius: 10,
              pointBorderWidth: 4,
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero: true
                  }
              }]
          }
      }
  });