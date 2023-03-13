<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div id="chart"></div>

  <!--     
      <script src="https://d3js.org/d3.v5.min.js"></script>
      <script src="{{asset('assets/js/c3.min.js')}}"></script>
      <script>
        var chart = c3.generate({
                bindto: '#chart',
                data: {
                  columns: [
                    ['data1', 30, 200, 100, 400, 150, 250],
                    ['data2', 50, 20, 10, 40, 15, 25]
                  ],
                  axes: {
                    data2: 'y2'
                  },
                  types: {
                    data2: 'bar' // ADD
                  }
                },
                axis: {
                  x:{
                    label:{
                      text:'dias'
                    }
                  },
                  y: {
                    label: {
                      text: 'Y Label',
                      position: 'outer-middle'
                    }
                  }
                }
            }); -->
    </script>
</body>
</html>