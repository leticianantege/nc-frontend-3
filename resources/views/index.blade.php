
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
    
</style>
</head>
<body>
      <div class="component-1">
            <div class="side-menu">
              <div class="frame-95">
                <img
                  alt=""
                  class="logo"
                  src="https://static.overlay-tech.com/assets/08d62b40-97df-4b42-9ee4-4550207d7712.svg"
                />

                <div>
                  @include('sidemenu')
                </div>
              </div>
            </div>
            <div class="flex-wrapper-five">
              <div class="name">
                <p class="good-morning">Good morning,</p>
                <p class="mr-abc">Mr. ABC</p>
              </div>
              <div class="recent-test-resultd">
                <p class="recent-test-results">Recent test results</p>
                <div class="component-1">
                  <div class="flex-wrapper-sixteen">
                    <div class="relative-wrapper-one">
                      <div class="group-2">
                      <canvas id="pieChart" width="400" height="400"></canvas>
                      </div>
                      <div class="frame-80">
                        <p class="num-19-passing-with-a-grade">
                          19% passing with A grade
                        </p>
                      </div>
                    </div>
                    <div class="component-1">
                      <div class="frame-14">
                        <p class="num-1381">1381</p>
                        <p class="students-attended-the-test">
                          Students attended the test
                        </p>
                      </div>
                      <div class="frame-14">
                        <p class="num-1381">92</p>
                        <p class="students-attended-the-test">
                          Students didn’t attend the test
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="frame-17" id="scaleContainer"></div>
             
                </div>
              </div>
              <div class="overall-survey-two">
                    <div class="frame-82">
                            <p class="overall-survey">Overall survey</p>
                            <div class="group-4">
                            <canvas id="barChart" width="800" height="400"></canvas>
                            </div>
                    </div>

             </div>
            </div>
            <div class="flex-wrapper-five">
              <div class="date">
                <div class="frame-77">
                <p class="today"><b>Today,</b> <i class="icon-calendar">📅</i></p>
                </div>
                <p class="num-15-may-2023">15 May, 2023</p>
              </div>
              @include('create')
              <div class="scheduled">
                <div class="frame-86">
                  <div class="frame-85">
                    <p class="scheduled-test">Scheduled test</p>
                    <a href="/Edit" class="edit-button">  <B>EDIT</B></a>
                  </div>
                  <div class="frame-95">
                    <div class="frame-83">
                      <div class="frame-27">
                        <div class="frame-24">
                          <div class="frame-22">
                            <p class="num-00">00</p>
                          </div>
                          <p class="hr">hr</p>
                        </div>
                        <div class="frame-25">
                          <div class="frame-22-two">
                            <p class="num-00">42</p>
                          </div>
                          <p class="hr">min</p>
                        </div>
                        <p class="">:</p>
                        <div class="frame-24">
                          <div class="frame-22-two">
                            <p class="num-00">10</p>
                          </div>
                          <p class="hr">sec</p>
                        </div>
                      </div>
                      <div class="frame-95">
                        <p class="geography-quiz">Geography quiz</p>
                        <p class="created-on-12-may2023">
                          Created on: 12 May,2023
                        </p>
                      </div>
                    </div>
                    <div class="frame-21">
                      <a href="/set_test" class="set-test-button">Set Another</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="overall">
                @include('overall')
              </div>
            </div>
          </div>
          @include('loader')

</body>
</html>

</body>
</html>