@extends('back-end.layout.app')

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')

				<!-- four-grids -->
				<div class="row four-grids">
					<div class="col-md-6 ticket-grid">
						<div class="tickets">
							<div class="col-md-12 mb">
							<h3>متابعة من قبلي</h3>
							</div>
							<br>
							<div class="col-md-12">
							<div class="col-md-6"> عدد الملفات الوارد</div>
							<div class="col-md-6">3123132</div>
							</div>
							<div class="col-md-12">
							<div class="col-md-6"> عدد</div>
							<div class="col-md-6">65464645</div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-6 ticket-grid">
						<div class="tickets">
							<div class="col-md-12 mb">
							<h3>متابعة من قبل جهات أخرى</h3>
							</div>
							<br>
							<div class="col-md-12">
							<div class="col-md-6"> عدد الملفات الوارد</div>
							<div class="col-md-6">3123132</div>
							</div>
							<div class="col-md-12">
							<div class="col-md-6"> عدد</div>
							<div class="col-md-6">65464645</div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
				
					
				
					<div class="clearfix"> </div>
				</div>
				<!-- //four-grids -->
				<!--row-->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Candlestick colors
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<!-- candlestick -->
								<div class="candlestick">
									<script type="text/javascript">
									  // Generate data
									  
									  var data = [];
									  
									  var time = new Date('Dec 1, 2013 12:00').valueOf();
									  
									  var h = Math.floor(Math.random() * 100);
									  var l = h - Math.floor(Math.random() * 20);
									  var o = h - Math.floor(Math.random() * (h - l));
									  var c = h - Math.floor(Math.random() * (h - l));

									  var v = Math.floor(Math.random() * 1000);
									  
									  for (var i = 0; i < 30; i++) {
										data.push([time, o, h, l, c, v]);
										h += Math.floor(Math.random() * 10 - 5);
										l = h - Math.floor(Math.random() * 20);
										o = h - Math.floor(Math.random() * (h - l));
										c = h - Math.floor(Math.random() * (h - l));
										v += Math.floor(Math.random() * 100 - 50);
										time += 30 * 60000; // Add 30 minutes
									  }
									</script>
									<div id="example-8"></div>
									
									<script type="text/javascript">
									  $(function() {
										$('#example-8').jqCandlestick({
										  data: data,
										  theme: 'light',
										  yAxis: [{
											height: 7, // 7 / (7 + 3)
										  }, {
											height: 3, // 3 / (7 + 3)
										  }],
										  series: [{
											type: 'candlestick',
											upStroke: '#0C0',
											downStroke: '#C00',
											downColor: 'rgba(255, 0, 0, 0.4)',
										  }, {
											type: 'column',
											name: 'VOLUME',
											yAxis: 1,
											stroke: '#00C',
											color: 'rgba(0, 0, 255, 0.5)',
										  }],
										});
									  });
									</script>
								</div>
								<!-- //candlestick -->
							</div>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Lines and points
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="lines-points">
									<div id="example-4"></div>
									<script type="text/javascript">
									  $(function() {
										$('#example-4').jqCandlestick({
										  data: data,
										  theme: 'light',
										  series: [{
											type: 'line',
										  }, {
											type: 'point',
										  }],
										});
									  });
									</script>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--//row-->
				<!--row-->
				<div class="row">
					<div class="col-md-7">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Real Time Updates
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="demo-container">
									<div id="placeholder" class="demo-placeholder"></div>
								</div>
								<p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em"> milliseconds</p>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Error Bars
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="demo-container">
									<div id="placeholder1" class="demo-placeholder"></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<!--//row-->
				<!--row-->
				<div class="row">
					<div class="col-md-5 program-grid">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Programming Skills
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<div class="chart-skills">
									<div class="skills-holder" id="canvas-holder">
										<canvas id="chart-area" width="500" height="500"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7 monthly-grid">
						<div class="panel panel-widget">
							<div class="panel-title">
							  Monthly Status Report
							  <ul class="panel-tools">
								<li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
								<li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
								<li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li>
							  </ul>
							</div>
							<div class="panel-body">
								<!-- status -->
								<div class="contain">	
									<div class="gantt"></div>
								</div>
								<!-- status -->
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<!--//row-->

                <script type="text/javascript" src="/assets/js/dev-loaders.js"></script>
                <script type="text/javascript" src="/assets/js/dev-layout-default.js"></script>
                <script type="text/javascript" src="/assets/js/jquery.marquee.js"></script>
                <!-- candlestick -->
                <script type="text/javascript" src="/assets/js/jquery.jqcandlestick.min.js"></script>
                <link rel="stylesheet" type="text/css" href="css/jqcandlestick.css" />
                <!-- //candlestick -->
                
                <!--max-plugin-->
                <script type="text/javascript" src="/assets/js/plugins.js"></script>
                <!--//max-plugin-->
                
                <!--scrolling js-->
                <script src="/assets/js/jquery.nicescroll.js"></script>
                <script src="/assets/js/scripts.js"></script>
                <!--//scrolling js-->
                
                <!-- real-time-updates -->
                <script language="javascript" type="text/javascript" src="/assets/js/jquery.flot.js"></script>
                <script type="text/javascript">
        
                $(function() {
        
                    // We use an inline data source in the example, usually data would
                    // be fetched from a server
        
                    var data = [],
                        totalPoints = 300;
        
                    function getRandomData() {
        
                        if (data.length > 0)
                            data = data.slice(1);
        
                        // Do a random walk
        
                        while (data.length < totalPoints) {
        
                            var prev = data.length > 0 ? data[data.length - 1] : 50,
                                y = prev + Math.random() * 10 - 5;
        
                            if (y < 0) {
                                y = 0;
                            } else if (y > 100) {
                                y = 100;
                            }
        
                            data.push(y);
                        }
        
                        // Zip the generated y values with the x values
        
                        var res = [];
                        for (var i = 0; i < data.length; ++i) {
                            res.push([i, data[i]])
                        }
        
                        return res;
                    }
        
                    // Set up the control widget
        
                    var updateInterval = 30;
                    $("#updateInterval").val(updateInterval).change(function () {
                        var v = $(this).val();
                        if (v && !isNaN(+v)) {
                            updateInterval = +v;
                            if (updateInterval < 1) {
                                updateInterval = 1;
                            } else if (updateInterval > 2000) {
                                updateInterval = 2000;
                            }
                            $(this).val("" + updateInterval);
                        }
                    });
        
                    var plot = $.plot("#placeholder", [ getRandomData() ], {
                        series: {
                            shadowSize: 0	// Drawing is faster without shadows
                        },
                        yaxis: {
                            min: 0,
                            max: 100
                        },
                        xaxis: {
                            show: false
                        }
                    });
        
                    function update() {
        
                        plot.setData([getRandomData()]);
        
                        // Since the axes don't change, we don't need to call plot.setupGrid()
        
                        plot.draw();
                        setTimeout(update, updateInterval);
                    }
        
                    update();
        
                    // Add the Flot version string to the footer
        
                    $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
                });
        
                </script>
                <!-- //real-time-updates -->
                <!-- error-graph -->
                <script language="javascript" type="text/javascript" src="/assets/js/jquery.flot.errorbars.js"></script>
                <script language="javascript" type="text/javascript" src="/assets/js/jquery.flot.navigate.js"></script>
                <script type="text/javascript">
                    $(function() {
        
                        function drawArrow(ctx, x, y, radius){
                            ctx.beginPath();
                            ctx.moveTo(x + radius, y + radius);
                            ctx.lineTo(x, y);
                            ctx.lineTo(x - radius, y + radius);
                            ctx.stroke();
                        }
        
                        function drawSemiCircle(ctx, x, y, radius){
                            ctx.beginPath();
                            ctx.arc(x, y, radius, 0, Math.PI, false);
                            ctx.moveTo(x - radius, y);
                            ctx.lineTo(x + radius, y);
                            ctx.stroke();
                        }
        
                        var data1 = [
                            [1,1,.5,.1,.3],
                            [2,2,.3,.5,.2],
                            [3,3,.9,.5,.2],
                            [1.5,-.05,.5,.1,.3],
                            [3.15,1.,.5,.1,.3],
                            [2.5,-1.,.5,.1,.3]
                        ];
        
                        var data1_points = {
                            show: true,
                            radius: 5,
                            fillColor: "blue", 
                            errorbars: "xy", 
                            xerr: {show: true, asymmetric: true, upperCap: "-", lowerCap: "-"}, 
                            yerr: {show: true, color: "red", upperCap: "-"}
                        };
        
                        var data2 = [
                            [.7,3,.2,.4],
                            [1.5,2.2,.3,.4],
                            [2.3,1,.5,.2]
                        ];
        
                        var data2_points = {
                            show: true,
                            radius: 5,
                            errorbars: "y", 
                            yerr: {show:true, asymmetric:true, upperCap: drawArrow, lowerCap: drawSemiCircle}
                        };
        
                        var data3 = [
                            [1,2,.4],
                            [2,0.5,.3],
                            [2.7,2,.5]
                        ];
        
                        var data3_points = {
                            //do not show points
                            radius: 0,
                            errorbars: "y", 
                            yerr: {show:true, upperCap: "-", lowerCap: "-", radius: 5}
                        };
        
                        var data4 = [
                            [1.3, 1],
                            [1.75, 2.5],
                            [2.5, 0.5]
                        ];
        
                        var data4_errors = [0.1, 0.4, 0.2];
                        for (var i = 0; i < data4.length; i++) {
                            data4_errors[i] = data4[i].concat(data4_errors[i])
                        }
        
                        var data = [
                            {color: "blue", points: data1_points, data: data1, label: "data1"}, 
                            {color: "red",  points: data2_points, data: data2, label: "data2"},
                            {color: "green", lines: {show: true}, points: data3_points, data: data3, label: "data3"},
                            // bars with errors
                            {color: "orange", bars: {show: true, align: "center", barWidth: 0.25}, data: data4, label: "data4"},
                            {color: "orange", points: data3_points, data: data4_errors}
                        ];
        
                        $.plot($("#placeholder1"), data , {
                            legend: {
                                position: "sw",
                                show: true
                            },
                            series: {
                                lines: {
                                    show: false
                                }
                            },
                            xaxis: {
                                min: 0.6,
                                max: 3.1
                            },
                            yaxis: {
                                min: 0,
                                max: 3.5
                            },
                            zoom: {
                                interactive: true
                            },
                            pan: {
                                interactive: true
                            }
                        });
        
                        // Add the Flot version string to the footer
        
                        $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
                    });
        
                    </script>
                <!-- //error-graph -->
                <!-- Skills-graph -->		
                <script src="/assets/js/Chart.Core.js"></script>
                <script src="/assets/js/Chart.Doughnut.js"></script>
                <script>
        
                    var doughnutData = [
                            {
                                value: 2,
                                label: "One",
                                color:"#99CC00"
                            },
                            {
                                value: 3,
                                label: "Two",
                                color:"#FF3300"
                            },
                            {
                                value: 3,
                                label: "Three",
                                color:"#944DDB"
                            },
                            {
                                value: 4,
                                label: "Four",
                                color:"#3399FF"
                            },
                            {
                                value: 5,
                                label: "Five",
                                color:"#FFC575"
                            }
        
                        ];
        
                        window.onload = function(){
                            var ctx = document.getElementById("chart-area").getContext("2d");
                            window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
                        };
        
                </script>
                <!-- //Skills-graph -->
                <!-- status -->
                <script src="/assets/js/jquery.fn.gantt.js"></script>
                <script>
        
                    $(function() {
        
                        "use strict";
        
                        $(".gantt").gantt({
                            source: [{
                                name: "Sprint 0",
                                desc: "Analysis",
                                values: [{
                                    from: "/Date(1320192000000)/",
                                    to: "/Date(1322401600000)/",
                                    label: "Requirement Gathering", 
                                    customClass: "ganttRed"
                                }]
                            },{
                                name: " ",
                                desc: "Scoping",
                                values: [{
                                    from: "/Date(1322611200000)/",
                                    to: "/Date(1323302400000)/",
                                    label: "Scoping", 
                                    customClass: "ganttRed"
                                }]
                            },{
                                name: "Sprint 1",
                                desc: "Development",
                                values: [{
                                    from: "/Date(1323802400000)/",
                                    to: "/Date(1325685200000)/",
                                    label: "Development", 
                                    customClass: "ganttGreen"
                                }]
                            },{
                                name: " ",
                                desc: "Showcasing",
                                values: [{
                                    from: "/Date(1325685200000)/",
                                    to: "/Date(1325695200000)/",
                                    label: "Showcasing", 
                                    customClass: "ganttBlue"
                                }]
                            },{
                                name: "Sprint 2",
                                desc: "Development",
                                values: [{
                                    from: "/Date(1326785200000)/",
                                    to: "/Date(1325785200000)/",
                                    label: "Development", 
                                    customClass: "ganttGreen"
                                }]
                            },{
                                name: " ",
                                desc: "Showcasing",
                                values: [{
                                    from: "/Date(1328785200000)/",
                                    to: "/Date(1328905200000)/",
                                    label: "Showcasing", 
                                    customClass: "ganttBlue"
                                }]
                            },{
                                name: "Release Stage",
                                desc: "Training",
                                values: [{
                                    from: "/Date(1330011200000)/",
                                    to: "/Date(1336611200000)/",
                                    label: "Training", 
                                    customClass: "ganttOrange"
                                }]
                            },{
                                name: " ",
                                desc: "Deployment",
                                values: [{
                                    from: "/Date(1336611200000)/",
                                    to: "/Date(1338711200000)/",
                                    label: "Deployment", 
                                    customClass: "ganttOrange"
                                }]
                            },{
                                name: " ",
                                desc: "Warranty Period",
                                values: [{
                                    from: "/Date(1336611200000)/",
                                    to: "/Date(1349711200000)/",
                                    label: "Warranty Period", 
                                    customClass: "ganttOrange"
                                }]
                            }],
                            navigate: "scroll",
                            scale: "weeks",
                            maxScale: "months",
                            minScale: "days",
                            itemsPerPage: 10,
                            onItemClick: function(data) {
                                alert("Item clicked - show some details");
                            },
                            onAddClick: function(dt, rowId) {
                                alert("Empty space clicked - add an item!");
                            },
                            onRender: function() {
                                if (window.console && typeof console.log === "function") {
                                    console.log("chart rendered");
                                }
                            }
                        });
        
                        $(".gantt").popover({
                            selector: ".bar",
                            title: "I'm a popover",
                            content: "And I'm the content of said popover.",
                            trigger: "hover"
                        });
        
                        prettyPrint();
        
                    });
        
                </script>
                <!-- //status -->
@endsection
