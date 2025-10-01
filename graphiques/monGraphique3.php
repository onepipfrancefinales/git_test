<!DOCTYPE html>

<?php
// nom division

$reponse= $bdd->query(" SELECT nom
						FROM phpab_division
						INNER JOIN $phpclubs as clubsDom ON $phpmatchs.id_equipe_dom = ((clubsDom.id +  90000000))
						INNER JOIN $phpclubs as clubsExt ON $phpmatchs.id_equipe_ext = ((clubsExt.id +  90000000))
						
						WHERE $phpmatchs.buts_dom + 90000000  is NULL 
						AND $phpmatchs.buts_ext + 90000000 is NULL 
						AND $phpmatchs.id_journee BETWEEN $valComiteMin AND $valComiteMax
						AND $phpmatchs.date_reelle < '$ma_date2'
						AND date_reelle != '0000-00-00 00:00:00'
						AND substr($phpmatchs.id_equipe_dom,-3,1) != 5
						AND substr($phpmatchs.id_equipe_ext,-3,1) != 5
						ORDER BY $phpmatchs.id_journee");
			
	while($row = $reponse->fetch())
    { 
		?>
	 <table  style="margin:auto; width:800px">
	  <tr>
		<td width="80" height="23"><?php echo substr($row[0],-10,-4);?></td>
		<td width="80" ><?php echo "journee ".substr($row[0],-4,-2);?></td>
		<td width="181" align="right" ><?php echo $row[1];?></td>
		<td width="20" align="center"><?php echo " - " ;?></td>
		<td width="181" ><?php echo $row[2];?></td>
		<td width="181" ><?php echo $row[3];?></td>
	  </tr>
	 </table>
	 <?php
	}


// liste equipes



// classements







?>






<html>
  <head>
    <meta charset="utf-8" />
    <!-- Include the ECharts file you just downloaded -->
    <script src="
https://cdn.jsdelivr.net/npm/echarts@6.0.0/dist/echarts.min.js
"></script>
  </head>
<body>
  <!-- Prepare a DOM with a defined width and height for ECharts -->

   <div id="main" style="width: 800px;height:500px;"></div>
 

  <script type="text/javascript">

var app = {};

var chartDom = document.getElementById('main');
var myChart = echarts.init(chartDom);
var option;

const names = [
  'Orange',
  'Tomato',
  'Apple',
  'Sakana',
  'Banana',
  'Iwashi',
  'Snappy Fish',
  'Lemon',
  'Pasta',
  'Equipe10'
];
const journees = ['J1', 'J2', 'J3', 'J4', 'J5', 'J6','J7', 'J8', 'J9', 'J10', 'J11', 'J12','J13', 'J14', 'J15', 'J16','J17', 'J18'];
/*
const shuffle = (array) => {
  let currentIndex = array.length;
  let randomIndex = 0;
  while (currentIndex > 0) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex],
      array[currentIndex]
    ];
  }
  return array;
};
*/
option = {
  title: {
    text: 'Evolution des classements'
  },
  tooltip: {
    trigger: 'item'
  },
  grid: {
    left: 30,
    right: 110,
    bottom: 30,
    containLabel: true
  },
  toolbox: {
    feature: {
      saveAsImage: {}
    }
  },
  xAxis: {
    type: 'category',
    splitLine: {
      show: true
    },
    axisLabel: {
      margin: 30,
      fontSize: 16
    },
    boundaryGap: false,
    data: journees
  },
  yAxis: {
    type: 'value',
    axisLabel: {
      margin: 30,
      fontSize: 16,
      formatter: '#{value}'
    },
    inverse: true,
    interval: 1,
    min: 1,
    max: names.length
  },
  series: [
    {
      data: [1, 2, 3, 4, 5, 6, 7, 8, 9 ,10],
        name : 'equipe1',
      names : [0],
      type: 'line',
        smooth: true,
    },
     {
      data: [10, 1, 2, 3, 4, 5, 6, 7, 8, 9 ],
        name : 'equipe2',
    names : [1],
      type: 'line',
      
   
        smooth: true,
    },
     {
      data: [10, 9, 1, 2, 3, 4, 5, 6, 7, 8],
        name : 'equipe3',
      type: 'line',
  names : [2],
 
        smooth: true,
    },
     {
      data: [10, 9, 8, ,1 ,2, 3, 4, 5, 6, 7],
        name : 'equipe4',
        names : [3],
      type: 'line',
        smooth: true,
    },
     {
      data: [10, 9, 8,7, 1, 2, 3, 4, 5, 6],
        name : 'equipe5',
        names : [4],
      type: 'line',
        smooth: true,
    },
     {
      data: [1, 2, 3, 4, 5, 6, 7],
        names : [5],
      name : 'equipe6',
      type: 'line',
        smooth: true,
    },
     {
      data: [2, 3, 1, 4, 7, 6, 5],
        name : 'equipe7',
        names : [6],
      type: 'line',
      names : 'aaa',
        smooth: true,
    },
     {
      data: [8, 7, 6, 5, 5, 5, 6],
        name : 'equipe8',
        names : [7],
      type: 'line',
  
        smooth: true,
    },
     {
      data: [10, 7, 8, 9, 9, 9, 9],
        name : 'equipe9',
         names : [8],
      type: 'line',
        smooth: true,
    },
     {
      data: [9, 10, 9, 8, 5, 3, 2],
        name : 'equipe10',
         names : [9],
      type: 'line',
        smooth: true,
    }
  ]
 // series: generateSeriesList()
};

option && myChart.setOption(option);

option = {
  xAxis: {
    type: 'category',
    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
  },
  yAxis: {
    type: 'value'
    
  },
  
};




</script>
</body>

</html>






