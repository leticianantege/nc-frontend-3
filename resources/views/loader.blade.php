          <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('pieChart').getContext('2d');
            var pieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['A grade', 'B grade', 'C grade', 'D grade', 'Failing'],
                    datasets: [{
                        data: [19, 19, 11, 59, 30], // Adjust the percentages as needed
                        backgroundColor: ['#3498db', '#e74c3c', '#2ecc71', '#f39c12', '#95a5a6'],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: {
                        onComplete: function () {
                            updateScaleValues(pieChart);
                        }
                    }
                }
            });

            function updateScaleValues(chart) {
                var scaleContainer = document.getElementById('scaleContainer');
                scaleContainer.innerHTML = ''; // Clear previous content

                chart.data.datasets[0].data.forEach(function (value, index) {
                    var percentage = Math.round(value * 100 / chart.data.datasets[0].data.reduce((a, b) => a + b, 0));

                    var scaleItem = document.createElement('div');
                    scaleItem.classList.add('frame-9');

                    var rectangleDiv = document.createElement('div');
                    rectangleDiv.classList.add('rectangle-13');
                    scaleItem.appendChild(rectangleDiv);

                    var frame2Div = document.createElement('div');
                    frame2Div.classList.add('frame-2');

                    var num220Students = document.createElement('p');
                    num220Students.classList.add('num-220-students');
                    num220Students.textContent = '220 students';
                    frame2Div.appendChild(num220Students);

                    var num19StudentsPassing = document.createElement('p');
                    num19StudentsPassing.classList.add('num-19-students-passing-with-a-grade');
                    num19StudentsPassing.textContent = percentage + '% Students passing with ' + getGradeLetter(index) + ' grade';
                    frame2Div.appendChild(num19StudentsPassing);

                    scaleItem.appendChild(frame2Div);

                    scaleContainer.appendChild(scaleItem);
                });
            }

            function getGradeLetter(index) {
                var gradeLetters = ['A', 'B', 'C', 'D', 'F'];
                return gradeLetters[index];
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('barChart').getContext('2d');
            var barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Weekly', 'Quizzes', 'Questinaires', 'Monthly', 'Practice'],
                    datasets: [{
                        label: 'Number of Students',
                        data: [1500, 1200, 900, 600, 300],
                        backgroundColor: ['#3498db', '#e74c3c', '#2ecc71', '#f39c12', '#95a5a6'],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        x: {
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 300
                            }
                        }
                    }
                }
            });
        });
  
    </script>