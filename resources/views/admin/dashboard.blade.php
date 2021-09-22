@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#">Home</a></li>
          </ol>
        </nav>
      <h3>Ecommerce Stats</h3>
      <div class="d-flex justify-items-between gap-3 flex-wrap">
          <div class="card dashboard-card bg-primary mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-users"></i></span>
                    180
                </p>
              </div>
            </div> 
            <div class="card dashboard-card bg-secondary mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Products</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-shopping-cart"></i></span>
                    3453
                </p>
              </div>
            </div>

            <div class="card dashboard-card bg-warning mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Earning</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-dollar-sign"></i></span>
                    2629$
                </p>
              </div>
            </div>

            <div class="card dashboard-card bg-danger mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-business-time"></i></span>
                    241
                </p>
              </div>
            </div>

            <div class="card dashboard-card bg-dark mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-business-time"></i></span>
                    241
                </p>
              </div>
            </div>

      </div>

      <h3>Other Stats</h3>
      <div class="d-flex justify-items-between gap-3 flex-wrap mb-4">
          <div class="card dashboard-card bg-primary mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Users</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-users"></i></span>
                    180
                </p>
              </div>
            </div> 

            <div class="card dashboard-card bg-secondary mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Products</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-shopping-cart"></i></span>
                    3453
                </p>
              </div>
            </div>

            <div class="card dashboard-card bg-warning mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Earning</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-dollar-sign"></i></span>
                    2629$
                </p>
              </div>
            </div>

            <div class="card dashboard-card bg-danger mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-business-time"></i></span>
                    241
                </p>
              </div>
            </div>

            <div class="card dashboard-card bg-dark mb-3" >
              <div class="card-body text-white">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text">  
                    <span class="dashboard-icons"><i class="fas fa-business-time"></i></span>
                    241
                </p>
              </div>
            </div>

      </div>
      <h5>Total Sale</h5>
      <canvas class="chart" id="myChart2" width="400" height="200"></canvas>
      
      <div class="row chart">
          <div class="col-md-6">
              <canvas id="polar" width="200" height="200"></canvas>
          </div>
          <div class="col-md-6">
              <canvas id="donut" width="200" height="200"></canvas>
          </div>
      </div>

      <canvas class="chart" id="myChart" width="400" height="200"></canvas>

      <div class="card">
      <div class="card-header d-flex justify-content-between">
          <div class="d-flex align-items-center">Recent Users</div>
          <div>
              <a href="" class="btn btn-dark">All Users</a>
          </div>
      </div>

      <div class="card-body table-responsive">
          <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Tiger Nixon</td>
                      <td>System Architect</td>
                      <td>Edinburgh</td>
                      <td>61</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                  </tr>
                  <tr>
                      <td>Finn Camacho</td>
                      <td>Support Engineer</td>
                      <td>San Francisco</td>
                      <td>47</td>
                      <td>2009/07/07</td>
                      <td>$87,500</td>
                  </tr>
                  <tr>
                      <td>Serge Baldwin</td>
                      <td>Data Coordinator</td>
                      <td>Singapore</td>
                      <td>64</td>
                      <td>2012/04/09</td>
                      <td>$138,575</td>
                  </tr>
                  <tr>
                      <td>Zenaida Frank</td>
                      <td>Software Engineer</td>
                      <td>New York</td>
                      <td>63</td>
                      <td>2010/01/04</td>
                      <td>$125,250</td>
                  </tr>
                  <tr>
                      <td>Zorita Serrano</td>
                      <td>Software Engineer</td>
                      <td>San Francisco</td>
                      <td>56</td>
                      <td>2012/06/01</td>
                      <td>$115,000</td>
                  </tr>
                  <tr>
                      <td>Jennifer Acosta</td>
                      <td>Junior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>43</td>
                      <td>2013/02/01</td>
                      <td>$75,650</td>
                  </tr>
                  <tr>
                      <td>Cara Stevens</td>
                      <td>Sales Assistant</td>
                      <td>New York</td>
                      <td>46</td>
                      <td>2011/12/06</td>
                      <td>$145,600</td>
                  </tr>
                  <tr>
                      <td>Hermione Butler</td>
                      <td>Regional Director</td>
                      <td>London</td>
                      <td>47</td>
                      <td>2011/03/21</td>
                      <td>$356,250</td>
                  </tr>
                  <tr>
                      <td>Lael Greer</td>
                      <td>Systems Administrator</td>
                      <td>London</td>
                      <td>21</td>
                      <td>2009/02/27</td>
                      <td>$103,500</td>
                  </tr>
                  <tr>
                      <td>Jonas Alexander</td>
                      <td>Developer</td>
                      <td>San Francisco</td>
                      <td>30</td>
                      <td>2010/07/14</td>
                      <td>$86,500</td>
                  </tr>
                  <tr>
                      <td>Shad Decker</td>
                      <td>Regional Director</td>
                      <td>Edinburgh</td>
                      <td>51</td>
                      <td>2008/11/13</td>
                      <td>$183,000</td>
                  </tr>
                  <tr>
                      <td>Michael Bruce</td>
                      <td>Javascript Developer</td>
                      <td>Singapore</td>
                      <td>29</td>
                      <td>2011/06/27</td>
                      <td>$183,000</td>
                  </tr>
                  <tr>
                      <td>Donna Snider</td>
                      <td>Customer Support</td>
                      <td>New York</td>
                      <td>27</td>
                      <td>2011/01/25</td>
                      <td>$112,000</td>
                  </tr>
              </tbody>
              <tfoot>
                  <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                  </tr>
              </tfoot>
          </table>
      </div>
      </div>      
  </div>

@endsection



@push('js')
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','Red', 'Yellow', 'Green', 'Purple', 'Orange','Red'],
                datasets: [{
                    label: '# of Votes',
                    data: [65, 59, 80, 81, 56, 55, 40, 55, 60,12, 33,66,44,77,88],
                    fill: true,
                    lineTension: 0.4,
                    backgroundColor: '#007bff',
                    borderColor: '#007bff',
                    borderWidth: 3,
                    pointBackgroundColor: '#007bff',
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


        var ctx2 = document.getElementById('myChart2').getContext('2d');
        const data = {
            labels: [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December',
            ],
            datasets: [{
                type: 'bar',
                label: 'Bar Dataset',
                data: [10, 20, 30, 40,10, 20, 15, 33,10, 20, 39, 15],
                borderColor: 'rgb(255, 99, 132)',
                backgroundColor: '#007bff'
            }]
        };
        var myChart2 = new Chart(ctx2, {
            type: 'scatter',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


        var polar = document.getElementById('polar').getContext('2d');

        
        const pdata = {
        labels: [
            'Red',
            'Green',
            'Yellow',
            'Grey',
            'Blue'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [11, 16, 7, 3, 14],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
            'rgb(54, 162, 235)'
            ]
        }]
        };

        const config = {
            type: 'polarArea',
            data: pdata,
            options: {}
        };
        new Chart(polar, config);


        var donut = document.getElementById('donut').getContext('2d');

        
        const ddata = {
        labels: [
            'Red',
            'Green',
            'Yellow',
            'Grey',
            'Blue'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [11, 16, 7, 3, 14],
            backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(75, 192, 192)',
            'rgb(255, 205, 86)',
            'rgb(201, 203, 207)',
            'rgb(54, 162, 235)'
            ]
        }]
        };

        const dconfig = {
            type: 'doughnut',
            data: pdata,
            options: {}
        };
        new Chart(donut, dconfig);
    </script>
@endpush